<?php
require("../../config.php");
header('Content-type:application/json;charset=utf-8');

try {
    if (
        !isset($_FILES['file']['error']) ||
        is_array($_FILES['file']['error'])
    ) {
        throw new RuntimeException('Invalid parameters.');
    }

    switch ($_FILES['file']['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new RuntimeException('Nenhum arquivo enviado.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('O tamanho do arquivo excede o limite de envio.');
        default:
            throw new RuntimeException('Unknown errors.');
    }
	
	
	
	$imagem_name = Nome_Arquivo_Upload(uniqid().'_'.$_FILES['file']['name']);
	$filepath = '../../../'.PASTA_UPLOAD_IMAGENS_GRANDE.$imagem_name;

    if (!move_uploaded_file($_FILES['file']['tmp_name'],$filepath)) {
        throw new RuntimeException('Falha ao fazer upload do arquivo.');
    } else {
		
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