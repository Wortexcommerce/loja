<?php
include_once("../class/class.db.php"); 
include_once("../class/class.seguranca.php"); 
$logado = user_logado();

if($logado==0){header("Location: login-user");}

?>