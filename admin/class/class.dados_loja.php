<?php
@session_start();

//SE TIVER LOGADO//
if(isset($_SESSION['user_admin_wortex'])){
	
	$db = new DB();
	$sql = $db->select("SELECT logo_loja FROM cad_loja LIMIT 1");
	
	if($db->rows($sql)){
		
		$result = $db->expand($sql);
		define("LOJA_LOGO_WORTEX", $result['logo_loja']);
	
	} 

}

?>