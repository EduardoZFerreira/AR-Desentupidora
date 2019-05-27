<?php

class Mailer extends PHPMailer\PHPMailer\PHPMailer
{

    private $User, $Pass, $Client, $Env;

    public function __construct($user, $pass, $client, $env)
    {   
        $this->isHTML(true);
        $this->CharSet = 'UTF-8';
        $this->Encoding = 'base64';
        $this->SetUser($user);
        $this->SetPass($pass);
        $this->SetClient($client);
        $this->SetEnv($env);
    }

    public function SetUser($user)
    {
        $this->User = $user;
    }

    public function GetUser()
    {
        return $this->User;
    }

    public function SetPass($pass)
    {
        $this->Pass = $pass;
    }

    public function GetPass()
    {
        return $this->Pass;
    }
    
    public function SetClient($client)
    {
        $this->Client = $client;
    }

    public function GetClient()
    {
        return $this->Client;
    }

    public function SetEnv($env)
    {
        $this->Env = $env;
    }

    public function GetEnv()
    {
        return $this->Env;
    }

    public function ConfigSMTP()
    {
        $this->IsSMTP();
        $this->SMTPDebug = 0;
        $this->SMTPAuth = true;
        $this->SMTPSecure = 'ssl';
        $this->Host = $this->Client == "gmail" ? 'smtp.gmail.com' : "smtp.live.com";
        $this->Port = $this->Client == "gmail" ? 465 : 587;  		
        $this->Username = $this->User;
        $this->Password = $this->Pass;
    }

    public function SendNewTextMail(Person $recipiente, Person $remetente, $assunto, $mensagem): bool
    {
        try
        {
            $this->AddReplyTo($remetente->GetEmail(), $remetente->GetNome());
            $this->setFrom($remetente->GetEmail(), $remetente->GetNome());            
            $this->addAddress($recipiente->GetEmail(), $recipiente->GetNome());
            $this->Subject = $assunto;
            $this->Body = $mensagem;
            $this->send();
            return true;
        } catch (Exception $e)
        {
            return false;
        }
    }

    public function SendNewHtmlMail($email, $nome, $mensagem, $template): bool
    {

    }

}