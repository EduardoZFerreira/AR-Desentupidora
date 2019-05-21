<?php

require_once "config.php";

if(isset($_POST))
{
    $cliente = new Person($_POST['nome'], $_POST['email'], $_POST['telefone']);
    $empresa = new Person("AR Desentupidora", CONTACT_MAIL, "(47) 99999-5517");
    $descricao = $_POST['descricao'];

    $assunto = "Há uma nova solicitação de orçamento feita por: " . $cliente->GetNome();
    $mensagem = $cliente->ContactInfo();
    $mensagem .= "<br>Detalhes: " . $descricao;

    $mailer = new Mailer("mail", "password", "gmail", "dev");
    $mailer->ConfigSMTP();
    
    if($mailer->SendNewTextMail($empresa, $cliente, $assunto, $mensagem) && $cliente->GetEmail() != "Não informado")
    {
        $assuntoCliente = "Recebemos sua solicitação de orçamento!";
        $mensagemCliente = "Olá " . $cliente->GetNome() . "! <br>";
        $mensagemCliente .= "Recebemos sua solicitação de orçamento pelo nosso site, entraremos em contato em breve!<br>";
        $mensagemCliente .= "Você pode falar conosco em: <br>";
        $mensagemCliente .= $empresa->ContactInfo();
        $mailer->SendNewTextMail($cliente, $empresa, $assuntoCliente, $mensagemCliente);
    }
    header("Location: index.php");
}
else
{
    header("Location: index.php");
}