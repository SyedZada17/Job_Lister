<?php
//Sessions start
session_start();

//Configuration file
require_once 'config.php';

//Include Helpers
require_once 'helpers/system_helper.php';

//AutoLoad classes
function __autoload($class_name){
   require_once 'lib/'.$class_name.'.php';
}