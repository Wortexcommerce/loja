<?php


//APLICA DESCONTO OU NÃO//				
$preco_antigo = '';
$preco_real = $dados_produto_detalhes['preco_produto'];
					
				
if(empty($dados_produto_detalhes['cat_promocao']) && $dados_produto_detalhes['prod_promocao']==$id_produto || !empty($dados_produto_detalhes['cat_promocao'])){
	if($dados_produto_detalhes['porcentagem_desconto']!='0.00'){
		$preco_antigo = $preco_real;
		$preco_real = aplica_desconto($preco_real,$dados_produto_detalhes['porcentagem_desconto']);			
	}
}
//////////////////////////

//PARCELAMENTO OU DESCONTO NO BOLETO//
$parcelamento ='';
$boleto_a_vista ='';
						
if(empty($dados_produto_detalhes['cat_parcelamento']) && $dados_produto_detalhes['prod_parcelamento']==$id_produto || !empty($dados_produto_detalhes['cat_parcelamento'])){

	//TEM PARCELAMENTO
	if(!empty($dados_produto_detalhes['parcelas_sem_juros'])){
		$parcelamento = aplica_parcelamento($preco_real,$dados_produto_detalhes['parcelas_sem_juros']);			
	}
							
	//DESCONTO BOLETO Á VISTA
	if($dados_produto_detalhes['desconto_boleto']!='0.00'){
		$boleto_a_vista = aplica_desconto_boleto($preco_real,$dados_produto_detalhes['desconto_boleto']);						
	}
							
}
//////////////////////////


////FRETE GRATIS////
$frete_gratis =0;
if(empty($dados_produto_detalhes['$cat_frete']) && $dados_produto_detalhes['prod_frete']==$id_produto || !empty($dados_produto_detalhes['cat_frete'])){
	$frete_gratis=1;
}
//////////////////////////	

