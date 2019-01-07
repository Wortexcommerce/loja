<?php
require_once("../../config.php");

$sql = $db->select("SELECT imagem_foto FROM cad_fotos_produtos WHERE id_foto='$id_foto' LIMIT 1");
$ln = $db->expand($sql);
$imagem_name = $ln['imagem_foto'];

$sql = $db->select("DELETE FROM cad_fotos_produtos WHERE id_foto='$id_foto' LIMIT 1");

//APAGA IMAGEM GRANDE DA PASTA
$filepath = '../../../'.PASTA_UPLOAD_IMAGENS_GRANDE.$imagem_name;
if(file_exists($filepath)){unlink($filepath);}

//APAGA IMAGEM PEQUENA DA PASTA
$filepath = '../../../'.PASTA_UPLOAD_IMAGENS_THUMBS.$imagem_name;
if(file_exists($filepath)){unlink($filepath);}



echo 1;	

?>