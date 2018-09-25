<?php

/**
*
* DESING PATTERN -  Singleton
* 
* The singleton programming pattern solves the problem of when you need one, and only one instance of given
* class on your script. Although this essentially creates you a global variable, it can be very beneficial 
* when you shouldn't have multiple instances of the same class. For example, you might not want more than one
* database object, since the connection goes to the same server, database, and everything else. The key to a 
* singleton is having a private constructor that keeps your client code from instantiating the class at will.
* Instead, the class itself has a static, public method that creates and serves up a reference to a public
* static instance variable that holds a reference to an instance of the class.
* 
* Purpose: 
*   To have only one instance of this object in the application that will handle all calls.
*   This is considered to be an anti-pattern, for better testability and maintainability use dependency injection.
*   Encapsulated "just-in-time initialization" or "initialization on first use".
* 
* Singleton should be considered only if all three of the following criteria are satisfied:
*   Ownership of the single instance cannot be reasonably assigned.
*   Lazy initialization is desirable.
*   Global access is not otherwise provided for.
* Examples: 
*   DB Connector.
*   Logger (may also be a Multiton if there are many log files for several purposes).
*   Lock file for the application (there is only one in the filesystem ).
*
*
* 
*/

class AppLog
{
    /**
    * Is not allowed to call from outside to prevent from creating multiple instances,
    * to use the singleton, you have to obtain the instance from Singleton::getInstance() instead
    */
    private function __construct()
    {
        
    }

    /**
     * Prevent from being cloned (which would create a second instance of it)
     */
    private function __clone()
    {
        
    }

    /**
     * Prevent from being unserialized (which would create a second instance of it)
     */
    private function __wakeup()
    {
    	 throw new Exception("Cannot unserialize singleton");    
    }

    /**
     * @var $instance
     */
    private static $instance;

    /**
    * Gets the instance via lazy initialization (created on first usage)
    * The Lazy Initialization pattern delays the creation of an object or the execution of an expensive process
    * until the first time it is needed.
    * Lazy instantiation (also known as lazy load) is an object orientated design pattern that attempts to reduce 
    * the amount of resources needed to load an application by only loading certain parts of it if they are needed.  
    */
    public static function getInstance() 
    {
        // Lazy initialization takes place here
        if (null === self::$instance)
        {
            self::$instance = new AppLog();
        } 
            else 
        {
            return "Instance already exists";
        }
        return self::$instance;
    }

    public function LogMessage() 
    {
        return "A log of this error has been created.";
    }

}

?>