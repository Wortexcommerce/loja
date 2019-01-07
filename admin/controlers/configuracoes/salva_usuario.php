<?php
require("../../config.php");


$senha_usuario = md5($senha_usuario);

if(empty($id_usuario)){
$sql = $db->select("INSERT INTO cad_usuarios (nome_usuario,
											 sobrenome_usuario,
											 tipo_usuario,
											 email_usuario,
											 senha_usuario) 
											 VALUES (
											 '$nome_usuario',
											 '$sobrenome_usuario',
											 '$tipo_usuario',
											 '$email_usuario',
											 '$senha_usuario'
											 )");

}else{

	$sql = $db->select("UPDATE cad_usuarios SET nome_usuario='$nome_usuario',
											   sobrenome_usuario='$sobrenome_usuario',
											   tipo_usuario='$tipo_usuario',
											   email_usuario='$email_usuario'
											   WHERE id_usuario='$id_usuario' ");

	if (!empty($senha_usuario)) {
		$sql = $db->select("UPDATE cad_usuarios SET senha_usuario='$senha_usuario' WHERE id_usuario='$id_usuario' ");
	}
}
 

//SESSIONS DE AVISO//
$_SESSION['avisos-admin-wortex-classe'] = 'success';
$_SESSION['avisos-admin-wortex-frase'] = 'Usuário cadastrado/alterado com sucesso.';

//REDIRECIONA PARA A PÁGINA//
header("Location: ".ADMIN_WORTEX."usuarios");

?>