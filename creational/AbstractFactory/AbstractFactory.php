<?php

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


include_once 'Email.php';

include_once 'Sms.php';

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






