<?php

/**
 * DESING PATTERN -  Factory
 * 
 * The purpose of any factory class, is to create and return instances of other classes, 
 * just like a real world factory creates products.There are two types of factory design patterns
 *   One is called the factory method and 
 *   The other is called an abstract factory. 
 *   There is another not official pattern called simple factory.
 * 
 * Abstract classes can not be instantiated
 *
 * It can be inherited and overwrite methods.
 * 
 * All messengers (Sms, Email) should extend this abstract Message class.
 */
abstract class MessageAbstract
{
    // Force Extending class to define this method
    abstract public function getMessage();
    
    // Common method
    public function send()
    {
        return $this->getMessage();
    }
}

/**
 * Used to represent a Email
 */
class Email extends MessageAbstract
{
    //Email class override abstract method  getMessage() in MessageAbstract.
    public function getMessage() 
    {
        return "Email::message has been sent";
    }
}

/**
 * Used to represent a Sms
 */
class Sms extends MessageAbstract
{
    //Sms class override abstract method  getMessage() in MessageAbstract.
    public function getMessage()
    {
        return "Sms::message has been sent";
    }
    
}

/**
 * The is the factory which creates message objects.
 * 
 * Simple Factory:
 *  The factory class must have a static method, this is called a factory method.
 *  The factory method must return a class instance.
 *  Only one object should be created and returned at a time.
 * 
 * Simple factories, which are sometimes called static factories, are the simplest form of a factory. 
 * Although it’s not an official design pattern, it does have it’s uses especially in small to mid sized applications.
 * Simple factories are classes which can return a single class (these are called product classes) instance,
 * the class to initialise could be hard coded (if the factory only returns objects of one particular product) 
 * or determined at runtime (if there are multiple classes which could be initialised), this is commonly done 
 * with a switch statement.
 * 
 */
class MessageFactory
{
    public static function factory($messenger)
    {
        if(class_exists($messenger))
        {
            return new $messenger();
        }
            else
        {
            throw new Exception("Message factory could not create the object.");
        }
        
    }
}

try 
{
    $sms = MessageFactory::factory('Sms');      // Object(Sms)
    echo $sms->send();

    $email = MessageFactory::factory('Email');  // Object (Email)
    echo $email->send();

    $mms = MessageFactory::factory('mms');      // This will throw an Exception
    echo $mms->send();
} 
    catch (Exception $ex) 
{
    // MessageFactory could not create messages of messengers (Sms, Email).
    echo $ex->getMessage(); 
}






