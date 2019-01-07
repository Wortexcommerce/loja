<?php
include_once ('../../config.php');
include_once ('../../class/class.login.php');

$Login = new Login();
$logado = $Login->Logoff();

?>