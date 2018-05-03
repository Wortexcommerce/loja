<?php
require ("../../../class/class.db.php");
require ("../../class/class.seguranca.php");

@session_start();

$senha_login_admin = md5($senha_login_admin);

$db = new DB();
$sql = $db->select("SELECT nome_admin, id_admin, tipo_acesso_admin FROM cad_admin WHERE email_admin='$email_login_admin' AND senha_admin='$senha_login_admin' LIMIT 1");

if($db->rows($sql)){
	
	$result = $db->expand($sql);
	$_SESSION['user_admin_wortex'] = $result['id_admin'];	
	
	echo 1;	  
	
} else {
	echo 0;	
}

?>