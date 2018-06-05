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
            throw new RuntimeException('No file sent.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('Exceeded filesize limit.');
        default:
            throw new RuntimeException('Unknown errors.');
    }

    //$filepath = sprintf('../../../uploads/images/produtos/%s_%s', uniqid(), $_FILES['file']['name']);
	
	$imagem_name = Nome_Arquivo_Upload(uniqid().'_'.$_FILES['file']['name']);
	$filepath = '../../../uploads/images/produtos/'.$imagem_name;

    if (!move_uploaded_file($_FILES['file']['tmp_name'],$filepath)) {
        throw new RuntimeException('Falha ao fazer upload do arquivo.');
    } else {
		
		$sql = $db->select("INSERT INTO cad_fotos_produtos (produto_foto, imagem_foto, usuario_foto) VALUES ('$id_produto', '$imagem_name', '".ID_USER_WORTEX."')");

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