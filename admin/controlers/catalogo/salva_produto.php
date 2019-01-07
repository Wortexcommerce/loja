<?php
require("../../config.php");

//SALVA
if(empty($id_produto)){


$sql = $db->select("INSERT INTO cad_produtos (  nome_produto,
												sku_produto,
												resumo_produto,
												preco_normal_produto,
												preco_promocional_produto,
												preco_custo_produto,
												descricao_produto,
												gerenciar_produto,
												quantidade_fixa_produto,
												quantidade_produto,
												ean_produto,
												ncm_produto,
												peso_produto,
												comprimento_produto,
												largura_produto,
												altura_produto,
												url_pagina_produto,
												titulo_pagina_produto,
												descricao_pagina_produto,
												palavras_chave_produto
												) VALUES (
												'$nome_produto',
												'$sku_produto',
												'$resumo_produto',
												'$preco_normal_produto',
												'$preco_promocional_produto',
												'$preco_custo_produto',
												'$descricao_produto',
												'$gerenciar_produto',
												'$quantidade_fixa_produto',
												'$quantidade_produto',
												'$ean_produto',
												'$ncm_produto',
												'$peso_produto',
												'$comprimento_produto',
												'$largura_produto',
												'$altura_produto',
												'$url_pagina_produto',
												'$titulo_pagina_produto',
												'$descricao_pagina_produto',
												'$palavras_chave_produto'
											)");
											
		$id_produto = $db->last_id($sql);	
										

//UPDATE
}else{

	$sql = $db->select("UPDATE cad_produtos SET nome_produto='$nome_produto',
												sku_produto='$sku_produto',
												resumo_produto='$resumo_produto',
												preco_normal_produto='$preco_normal_produto',
												preco_promocional_produto='$preco_promocional_produto',
												preco_custo_produto='$preco_custo_produto',
												descricao_produto='$descricao_produto',
												gerenciar_produto='$gerenciar_produto',
												quantidade_fixa_produto='$quantidade_fixa_produto',
												quantidade_produto='$quantidade_produto',
												ean_produto='$ean_produto',
												ncm_produto='$ncm_produto',
												peso_produto='$peso_produto',
												comprimento_produto='$comprimento_produto',
												largura_produto='$largura_produto',
												altura_produto='$altura_produto',
												url_pagina_produto='$url_pagina_produto',
												titulo_pagina_produto='$titulo_pagina_produto',
												descricao_pagina_produto='$descricao_pagina_produto',
												palavras_chave_produto='$palavras_chave_produto' 
												WHERE id_produto='$id_produto' LIMIT 1");
}



//FOTOS DO PRODUTO
$sql = $db->select("UPDATE cad_fotos_produtos SET aguarde_foto='0', produto_foto='$id_produto' WHERE usuario_foto='".ID_USER_WORTEX."' AND aguarde_foto='1'"); 


//FOTO PRINCIPAL
if(isset($foto_principal)){
	//VEM MARCADO RADIO FOTO PRINCIPAL
	$sql = $db->select("UPDATE cad_fotos_produtos SET principal_foto='0' WHERE id_foto!='$foto_principal'");		
	$sql = $db->select("UPDATE cad_fotos_produtos SET principal_foto='1' WHERE id_foto='$foto_principal' LIMIT 1");		
} else {
	//NÃO VEM MARCADO, OU ADICIONOU APENAS UMA FOTO
	$sql = $db->select("UPDATE cad_fotos_produtos SET principal_foto='1' WHERE produto_foto='$id_produto' ORDER BY id_foto LIMIT 1");		
}


//APAGA AS CATEGORIAS E SUBCATEGORIAS DO PRODUTO
$sql = $db->select("DELETE FROM cad_relacao_categorias_produtos WHERE id_produto_relacao='$id_produto'"); 


//CATEGORIAS DO PRODUTO//
if(isset($_POST['categoria'])){

	$categoria = $_POST['categoria']; 

	foreach($categoria as $k => $v){ 
		$id_categoria = $v; 
		$sql = $db->select("INSERT INTO cad_relacao_categorias_produtos (id_produto_relacao, id_categoria_relacao) VALUES ('$id_produto', '$id_categoria')");
		
	} 	
	
}


//SUBCATEGORIAS DO PRODUTO//
if(isset($_POST['subcategoria'])){

	$subcategoria = $_POST['subcategoria']; 

	foreach($subcategoria as $k => $v){ 
		$id_subcategoria = $v; 
		$sql = $db->select("INSERT INTO cad_relacao_categorias_produtos (id_produto_relacao, id_categoria_relacao) VALUES ('$id_produto', '$id_subcategoria')");
	} 	
	
}
 
 
 

//SESSIONS DE AVISO//
$_SESSION['avisos-admin-wortex-classe'] = 'success';
$_SESSION['avisos-admin-wortex-frase'] = 'Produto cadastrado/alterado com sucesso.';

//REDIRECIONA PARA A PÁGINA//
header("Location: ".ADMIN_WORTEX."produtos");

?>