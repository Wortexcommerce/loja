<?php
require("../../config.php");

//RECEBE OS IDS DOS CHECKBOX E FAZ O LOOP
$id_produto = $_POST['id_produto']; 
foreach($id_produto as $k => $id){ 

	//APAGA FOTOS DOS PRODUTOS
	$sql = $db->select("SELECT id_foto, imagem_foto FROM cad_fotos_produtos WHERE produto_foto='$id'");
	while($ln = $db->expand($sql)){
		
		$imagem_name = $ln['imagem_foto'];
		$id_foto = $ln['id_foto'];
		
		//APAGA IMAGEM GRANDE DA PASTA
		$filepath = '../../../'.PASTA_UPLOAD_IMAGENS_GRANDE.$imagem_name;
		if(file_exists($filepath)){unlink($filepath);}
		
		//APAGA IMAGEM PEQUENA DA PASTA
		$filepath = '../../../'.PASTA_UPLOAD_IMAGENS_THUMBS.$imagem_name;
		if(file_exists($filepath)){unlink($filepath);}
		
		$delete = $db->select("DELETE FROM cad_fotos_produtos WHERE id_foto='$id_foto' LIMIT 1");
	
	}
	
	
	//APAGA O PRODUTO
	$apaga = $db->select("DELETE FROM cad_produtos WHERE id_produto='$id' LIMIT 1");
	
}

//SESSIONS DE AVISO//
$_SESSION['avisos-admin-wortex-classe'] = 'success';
$_SESSION['avisos-admin-wortex-frase'] = 'Produto(s) excluído(s) com sucesso.';

//REDIRECIONA PARA A PÁGINA//
header("Location: ".ADMIN_WORTEX."produtos");

?>