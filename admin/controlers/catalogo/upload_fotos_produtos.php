<?php
require("../../config.php");
header('Content-type:application/json;charset=utf-8');

try {
    
	
	
	$imagem_name = Nome_Arquivo_Upload(uniqid().'_'.$_FILES['file']['name']);
	$filepath = '../../../'.PASTA_UPLOAD_IMAGENS_GRANDE.$imagem_name;
	
	
    if (!move_uploaded_file($_FILES['file']['tmp_name'],$filepath)) {
        throw new RuntimeException('Falha ao fazer upload do arquivo.');
    } else {
		
		//REDIMENSIONA IMAGENS
		$redimensiona_imagens = new ImagensRedimensiona();
		
		//MINIATURA
		$redimensiona_imagens_miniatura = $redimensiona_imagens->RedimensionaFotoProduto($imagem_name,192,'thumb');
		
		//NORMAL
		$redimensiona_imagens_normal = $redimensiona_imagens->RedimensionaFotoProduto($imagem_name,1000,'grande');
		
		if(is_numeric($id_produto)){$aguarde=0;} else {$aguarde=1;}
		
		$sql = $db->select("INSERT INTO cad_fotos_produtos (produto_foto, imagem_foto, usuario_foto, aguarde_foto) VALUES ('$id_produto', '$imagem_name', '".ID_USER_WORTEX."', '$aguarde')");
		
		

	}
		

    // All good, send the response
    echo json_encode([
        'status' => 'ok',
        'path' => $filepath
    ]);

} catch (RuntimeException $e) {
	// Something went wrong, send the err message as JSON
	http_response_code(400);

	echo json_encode([
		'status' => 'error',
		'message' => $e->getMessage()
	]);
}