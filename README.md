# Email Notification Library using phpMailer

This library has the function of sending e-mail using the phpmailer 
library. Doing this in an uncomplicated way is essential for any system.

To install the library, run the following command:

```sh
composer require gustavoweb/composer_teste
```

To make use of the library, simply require the autoload of the composer, 
invoke the class and make the method call:

```sh
<? php

require __DIR__ . '/vendor/autoload.php';

USE Notification\Email;

$mail = new Email (2, "mail.host.com", "your@email.com", "your-pass", 
"smtp secure (tls / ssl)", "port (587)", "from@email.com", "From Name");

$email-> sendEmail ("Subject", "Content", "reply@email.com", "Replay 
Name", "address@email.com", "Address Name");
```

Note that the entire configuration of sending the email is using the 
magic method builder! Once you've invoked the constructor method within 
your application, your system will be able to fire the shots.

### Developers
* [Gustavo Web] - Developer of this library and tutor of the course 
Composer in the Practice!
* [Robson V. Leite] - Ceo and Founder UpInside Treinamentos
* [UpInside Treinamentos] - Official site of your digital marketing and 
programming school
* [phpMailer] - Lib to send Email

License
----

MIT

** Plus One UpInside Treinamento Courses, Make Good Use! **

[//]: #
[Gustavo Web]: <mailto: gustavo@upinside.com.br>
[Robson V. Leite]: <mailto: robson@upinside.com.br>
[UpInside Treinamentos]: <https://www.upinside.com.br>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>

# ** Traduzido em Português **

# Biblioteca de Notificação via e-mail utilizando o phpMailer

Essa biblioteca tem por função enviar e-mail utilizando a biblioteca 
phpmailer. Fazer essa ação de forma descomplicada é essencial para 
qualquer sistema.

Para fazer a instalação da biblioteca, execute o seguinte comando:

```sh
composer require gustavoweb/composer_teste
```

Para fazer o uso da biblioteca, basta requerir o autoload do composer, 
invocar a classe e fazer a chamada do método:

```sh
<?php

require __DIR__ . '/vendor/autoload.php';

USE Notification\Email;

$email = new Email(2, "mail.host.com", "your@email.com", "your-pass", 
"smtp secure (tls/ssl)", "port (587)",
    "from@email.com", "From Name");

$email->sendEmail("SUbject", "Content", "reply@email.com", "Replay 
Name", "address@email.com", "Address Name");
```

Note que toda a configuração do envio do e-mail está utilizando o método 
mágico construtor! Uma vez invocado o método construtor dentro da sua 
aplicação, seu sistema estar'á apto a efetuar os disparos.

### Developers
* [Gustavo Web] - Desenvolvedor desta biblioteca e tutor do curso 
Composer na Prática!
* [Robson V. Leite] - CEO and Founder UpInside Treinamentos
* [UpInside Treinamentos] - Site oficial da sua escola de programação e 
marketing digital
* [phpMailer] - Lib to send E-mail

License
----

MIT

**Mais um curso da UpInside Treinamentos, faça bom uso!**

[//]:#
[Gustavo Web]: <mailto:gustavo@upinside.com.br>
[Robson V. Leite]: <mailto:robson@upinside.com.br>
[UpInside Treinamentos]: <https://www.upinside.com.br>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>
