<?php

include_once 'MessageAbstract.php';

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