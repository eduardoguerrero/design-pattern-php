<?php

include_once 'Singleton.php';

$log = AppLog::getInstance();

//In this point, Log instance already exists.
$log2 = AppLog::getInstance();

echo $log->LogMessage();

var_dump($log);

//log2 instance was not initialized.
var_dump($log2);



echo "Example without Singleton, multiple instances have been initialized.";

include_once 'NoSingleton.php';

$helper = new AppHelper();

$helper2 = new AppHelper();

//Multiple instaces heve been initialized.
var_dump($helper);

var_dump($helper2);