<?php

include_once 'AbstractFactory.php';

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

