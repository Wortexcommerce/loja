<?php
ob_start();
@session_start();

class Login{
	
	
	public function VerificaLogado(){	
		if(isset($_SESSION['user_admin_wortex'])){
			
			include_once ("includes/header_interno.php");
			include_once("views/home/home.php");
			include_once ("includes/footer_interno.php");
			
		} else {
			
			include_once("views/login/login.php");	
		}
	}
	
	
	public function Logoff(){
		@session_start();
		unset($_SESSION['user_admin_wortex']);	
		header("Location: ../../home");
	}

}

?>