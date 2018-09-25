<?php

include_once 'SimpleFactory.php';

$motorcycle = MotorcycleFactory::create('BMX', 'C400X');

var_dump($motorcycle);

$motorcycle2 = MotorcycleFactory::create('Kawasaki', 'R1');

var_dump($motorcycle2);

?>