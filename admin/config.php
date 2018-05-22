<?php
ob_start();
@session_start();

//LOCALHOST//
if($_SERVER['HTTP_HOST']=='localhost' || $_SERVER['HTTP_HOST']=='127.0.0.1'){	
	$caminho_admin = 'http://'.$_SERVER['HTTP_HOST'].'/loja/admin/';	
	$caminho_site = 'http://'.$_SERVER['HTTP_HOST'].'/loja/';	
//WEB//	
} else {	
	$caminho_admin = 'http://'.$_SERVER['HTTP_HOST'].'/admin/';
	$caminho_site = 'http://'.$_SERVER['HTTP_HOST'];	
}


define("ADMIN_WORTEX", $caminho_admin);
define("SITE_WORTEX", $caminho_site);
define('ROOT_DIR', dirname(__FILE__).'/' );


require(ROOT_DIR."../class/class.db.php");
require(ROOT_DIR."class/class.seguranca.php");
require(ROOT_DIR."class/class.login.php");
require(ROOT_DIR."class/class.dados_usuario.php");
require(ROOT_DIR."class/class.dados_loja.php");
require(ROOT_DIR."class/class.avisos_loja.php");
require(ROOT_DIR."class/class.menu.php");
require(ROOT_DIR."class/class.pesquisas.php");


//VERIFICA SE ESTÁ LOGADO//
$Login = new Login();
$logado = $Login->VerificaLogadoInternas();

?>