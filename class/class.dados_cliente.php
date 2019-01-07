<?php
@session_start();


if(isset($_SESSION['loja_modelo_sis'])){		
	
	define("AUTENTICADO", $_SESSION['loja_modelo_sis']);	
	
	$query = $db->select("SELECT email_cliente, nome_cliente, cep_cliente FROM clientes WHERE id_cliente='".AUTENTICADO."'");
	$line = $db->expand($query);
	
	define("NOME_CLIENTE", $line['nome_cliente']);	
	define("CEP_CLIENTE", $line['cep_cliente']);
	define("FRASE_CHECKOUT", NOME_CLIENTE.', confirme seu endereço de e-mail para continuar');
	define("EMAIL_CLIENTE", $line['email_cliente']);

}  else {
	
	define("FRASE_CHECKOUT", 'Ops, percebemos que você não está logado!');
	
	
	if(isset($_SESSION['loja_modelo_sis_aguarde'])){
		
		define("AUTENTICADO", $_SESSION['loja_modelo_sis_aguarde']);
		
	} else {
		
		$_SESSION['loja_modelo_sis_aguarde'] = md5(time());
		define("AUTENTICADO", $_SESSION['loja_modelo_sis_aguarde']);
						
	}
	
	
	if(isset($_SESSION['cep_sis_aguarde'])){
		define("CEP_CLIENTE", $_SESSION['cep_sis_aguarde']);
	} 
	
	
}

?>