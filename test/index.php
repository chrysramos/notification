<?php
require __DIR__ . '/../lib-ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "caxote.com.br", "sender@caxote.com.br", "teste@123", "tls", "587", "chrystian@caxote.com.br", "Equipe Caxote");
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>TESTE</b>!</p>",
    "chrystian@caxote.com.br", "Caxote Web", "chrystian_ramos@live.com",
    "Chrystian Ramos");

var_dump($novoEmail);