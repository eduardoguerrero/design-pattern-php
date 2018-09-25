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