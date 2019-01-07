<?php
@session_start();

//SE TIVER LOGADO//
if(isset($_SESSION['user_admin_wortex'])){

	$id_user_logado = $_SESSION['user_admin_wortex'];
	
	$db = new DB();
	$sql = $db->select("SELECT * FROM cad_admin WHERE id_admin='$id_user_logado' LIMIT 1");
	
	if($db->rows($sql)){
		
		$result = $db->expand($sql);
		define("NOME_ADMIN_WORTEX", $result['nome_admin']);
		define("EMAIL_ADMIN_WORTEX", $result['email_admin']);
		define("PERMISSAO_ADMIN_WORTEX", $result['tipo_acesso_admin']);
	
	} 

}

?>