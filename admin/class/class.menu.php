<?php
class Menu{


	public function ConstroiMenu($tipo){
		
		//MENU BÁSICO
		if($tipo==3){
			include_once(ROOT_DIR."includes/menu_avancado.php");	
		}
			
	}

	
	public function PermissaoMenu(){
		
		//EXIBE MENU SE LOGADO
		if(isset($_SESSION['user_admin_wortex'])){
			
			include_once(ROOT_DIR."includes/barra_topo.php");
			
		}
		
	}

}

?>