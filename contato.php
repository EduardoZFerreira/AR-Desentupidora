<?php

require_once "config.php";

if(isset($_POST))
{
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $descricao = $_POST['descricao'];

    $mailer = SetMailer("mailUser", "password", "gmail", "dev");
    $mailer->setFrom('eduardo.zekl@gmail.com', 'AR Desentupidora');
    $mailer->addAddress($email, $nome);
    $mailer->Subject = 'Nova solicitação de orçamento';
    $mailer->Body = $descricao;
    $mailer->send();
    header("Location: index.php");
}
else
{
    header("Location: index.php");
}