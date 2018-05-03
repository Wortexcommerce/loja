<?php
	
	$db = new DB();
	
	$query = $db->select("SELECT * FROM informacoes_loja");
	$dados_loja = $db->expand($query);
	
	
?>