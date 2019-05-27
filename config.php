<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

define("CONTACT_MAIL", "ardesentupidora@hotmail.com");

spl_autoload_register(function($classname){
    $class_dir = "Classes";
    $filename = $class_dir . DIRECTORY_SEPARATOR . $classname . ".class.php";

    if(file_exists($filename))
    {
        require_once $filename;
    }
});