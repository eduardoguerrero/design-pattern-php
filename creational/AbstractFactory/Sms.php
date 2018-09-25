<?php

include_once 'MessageAbstract.php';

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