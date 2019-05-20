<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "vendor" . DIRECTORY_SEPARATOR . "autoload.php";



function SetMailer($user, $pass, $client, $env):PHPMailer
{    
    $mailer = new PHPMailer(TRUE);
    $mailer->CharSet = 'UTF-8';
    $mailer->Encoding = 'base64';
    $mailer->IsSMTP();
    $mailer->SMTPDebug = 0;
    $mailer->SMTPAuth = true;
    $mailer->SMTPSecure = 'ssl';
    $mailer->Host = $client == "gmail" ? 'smtp.gmail.com' : "smtp.live.com";
    $mailer->Port = $client == "gmail" ? 465 : 587;  		
    $mailer->Username = $user;
    $mailer->Password = $pass;
    return $mailer;
}