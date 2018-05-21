<?php
require("../../config.php");


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
 

//SESSIONS DE AVISO//
$_SESSION['avisos-admin-wortex-classe'] = 'success';
$_SESSION['avisos-admin-wortex-frase'] = 'Produto cadastrado/alterado com sucesso.';

//REDIRECIONA PARA A PÁGINA//
header("Location: ".ADMIN_WORTEX."produtos");

?>