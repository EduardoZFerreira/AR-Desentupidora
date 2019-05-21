<?php

class Person
{
    private $Nome, $Email, $Telefone;

    public function __construct($nome, $email, $telefone)
    {
        $this->SetNome($nome);
        $this->SetEmail($email);
        $this->SetTelefone($telefone);
    }

    public function SetNome($nome)
    {
        $this->Nome = $nome;
    }

    public function GetNome()
    {
        return $this->Nome;
    }

    public function SetEmail($email)
    {
        $this->Email = $email != "" ? $email : "Não informado";
    }

    public function GetEmail()
    {
        return $this->Email;
    }

    public function SetTelefone($telefone)
    {
        $this->Telefone = $telefone;
    }

    public function GetTelefone()
    {
        return $this->Telefone;
    }

    public function ContactInfo(): string
    {
        $info = "<br>Telefone: " . $this->Telefone;
        $info .= "<br>E-mail: " . $this->Email;
        return $info;
    }

}