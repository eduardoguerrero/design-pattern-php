<?php

include_once 'Motorcycle.php';


/**
 * The Simple Factory: One of the most commonly used design patterns is the factory pattern. 
 * In this pattern, a class simply creates the object you want to use.
 * 
 * This code uses a factory to create the Motorcycle object. There are two possible benefits
 * to building your code this way; the first is that if you need to change, rename, or replace 
 * the Motorcycle class later on you can do so and you will only have to modify the code in the factory,
 * instead of every place in your project that uses the Motorcycle class.
 * The second possible benefit is that if creating the object is a complicated job you can do all of 
 * the work in the factory, instead of repeating it every time you want to create a new instance.
 * 
 */
class MotorcycleFactory
{
    public static function create($make, $model)
    {
        return new Motorcycle($make, $model);
    }
    
}


?>