<?php
require("../../config.php");


$sql = $db->select("INSERT INTO cad_produtos () VALUES ()");
 

//SESSIONS DE AVISO//
$_SESSION['avisos-admin-wortex-classe'] = 'success';
$_SESSION['avisos-admin-wortex-frase'] = 'Produto cadastrado/alterado com sucesso.';

//REDIRECIONA PARA A PÁGINA//
header("Location: ".ADMIN_WORTEX."produtos");

?>