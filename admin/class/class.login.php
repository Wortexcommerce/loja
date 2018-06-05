<?php
ob_start();
@session_start();

class Login{
	
	
	public function VerificaLogadoInternas(){
		if(basename($_SERVER['PHP_SELF'])!='index.php'){
			if(!isset($_SESSION['user_admin_wortex'])){
				header("Location: ".ADMIN_WORTEX."");
			} else {
				//Cria Session do usuário
				define("ID_USER_WORTEX", $_SESSION['user_admin_wortex']);	
			}
		}
	}
	
	public function VerificaLogadoHome(){	
		if(isset($_SESSION['user_admin_wortex'])){
			
			include_once ("includes/header_interno.php");
			include_once("views/home/home.php");
			include_once ("includes/footer_interno.php");
			
		} else {
			
			include_once("views/login/login.php");
			//Cria Session do usuário
			define("ID_USER_WORTEX", $_SESSION['user_admin_wortex']);	
			
		}
	}
	
	
	public function Logoff(){
		@session_start();
		unset($_SESSION['user_admin_wortex']);	
		header("Location: ../../home");
	}

}

?>