<?php
$to = 'dimon_13_alucard@mail.ru';
$title = 'Стройпрокат';
$from = $_POST['email'];
$body = $_POST['message'];
var_dump(mail($to, $title, $body, $from));
die();

