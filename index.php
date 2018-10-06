<?php
require __DIR__ . '/lib-ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>TESTE</b>!</p>",
    "chrystian@caxote.com.br", "Caxote Web", "chrystian_ramos@live.com",
    "Chrystian Ramos");

var_dump($novoEmail);