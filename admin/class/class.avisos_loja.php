<?php
@session_start();

class AvisosLoja{
	
	
	public function Avisos(){	
		
		if(isset($_SESSION['avisos-admin-wortex-classe'])){
			
			echo '<div class="alert alert-'.$_SESSION['avisos-admin-wortex-classe'].' avisos-loja">';
				echo '<div class="container-fluid">';
  					echo $_SESSION['avisos-admin-wortex-frase'];
				echo '</div>';
			echo '</div>';
			
			unset($_SESSION['avisos-admin-wortex-classe']);	
			unset($_SESSION['avisos-admin-wortex-frase']);	
			
		} 
		
	}
	
	
	
}

?>