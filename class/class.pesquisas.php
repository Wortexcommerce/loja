<?php
$db = new DB();

class Pesquisas{
	
	public function DetalhesPedido($id,$campo){
		
		global $db;
		$result = $db->select("SELECT $campo FROM vendas WHERE id_venda='$id' LIMIT 1");
		$resultado = $db->expand($result);
		return $resultado[$campo];
		
	}
	
	
	public function ListaItensPedidos($id){
	
		global $db;
		$retorno='';
		
		$result = $db->select("SELECT * FROM vendas_produtos WHERE id_venda_controle='$id' ORDER BY id_controle");
		if($db->rows($result)){
			while($row = $db->expand($result)){
				$retorno .= '<tr>';
                	$retorno .= '<td>'.$row['nome_produto_controle'].'</td>';
					$retorno .= '<td>R$ '.valores($row['valor_produto_controle']).'</td>';
					$retorno .= '<td>'.$row['quantidade_produto_controle'].'</td>';   
					$retorno .= '<td>R$ '.valores(($row['quantidade_produto_controle']*$row['valor_produto_controle'])).'</td>';        
                $retorno .= '</tr>';
			}
			
			$retorno .= '<tr>';
                	$retorno .= '<td><strong>Subotal</strong></td>';
					$retorno .= '<td></td>';
					$retorno .= '<td></td>';   
					$retorno .= '<td>R$ '.valores(Pesquisas::DetalhesPedido($id,'valor_produtos_venda')).'</td>';        
            $retorno .= '</tr>';
			
			$retorno .= '<tr>';
                	$retorno .= '<td><strong>Envio/Frete</strong></td>';
					$retorno .= '<td></td>';
					$retorno .= '<td></td>';   
					$retorno .= '<td>R$ '.valores(Pesquisas::DetalhesPedido($id,'valor_frete_venda')).'</td>';        
            $retorno .= '</tr>';
			
			$retorno .= '<tr class="table-titulos">';
                	$retorno .= '<td><strong>Total</strong></td>';
					$retorno .= '<td></td>';
					$retorno .= '<td></td>';   
					$retorno .= '<td><strong>R$ '.valores(Pesquisas::DetalhesPedido($id,'valor_final_venda')).'</strong></td>';        
            $retorno .= '</tr>';
			
		} else {
			$retorno .= '<tr>';
				$retorno .= '<td colspan="20" align="center">Nenhum item encontrado no pedido.</td>';	
			$retorno .= '</tr>';
		}
		
		return $retorno;
			
	}
	
	
	public function ListaPedidos(){
	
		global $db;
		$retorno='';
		
		$result = $db->select("SELECT * FROM vendas WHERE id_cliente='".AUTENTICADO."' ORDER BY id_venda DESC");
		if($db->rows($result)){
			while($row = $db->expand($result)){
				$retorno .= '<tr>';
                	$retorno .= '<td><a class="link-pagamento color-default" href="order/'.$row['id_venda'].'">#'.$row['id_venda'].'</a></td>';
                    $retorno .= '<td>'.data_mysql_para_user(substr($row['data_venda'],0,10)).'</td>';
					$retorno .= '<td>'.$row['destinatario_venda'].'</td>';
					$retorno .= '<td>R$ '.valores($row['valor_final_venda']).'</td>';
					$retorno .= '<td>'.$row['situacao_venda'].'</td>';   
					$retorno .= '<td><a href="order/'.$row['id_venda'].'"><i class="fa fa-eye" aria-hidden="true"></i></a></td>';        
                $retorno .= '</tr>';
			}
		} else {
			$retorno .= '<tr>';
				$retorno .= '<td colspan="20" align="center">Nenhum pedido encontrado.</td>';	
			$retorno .= '</tr>';
		}
		
		return $retorno;
			
	}
	
	
	public function BuscaProdutos($busca,$limit){
	
		global $db;
		
		if($limit>0){
			$limit = "LIMIT $limit";	
		} else {
			$limit = "";	
		}
		
		$result = $db->select("SELECT produtos.id_produto, produtos.nome_produto, fotos_produtos.foto
				FROM produtos
				LEFT JOIN fotos_produtos ON produtos.id_produto=fotos_produtos.id_produto
				WHERE (produtos.nome_produto LIKE '%$busca%' OR meta_tags_produto LIKE '%$busca%')
				GROUP BY produtos.id_produto
				ORDER BY produtos.nome_produto
				$limit
			");			
	
		return $result;
		
	}
	
	public function SelectProdutosVenda($id){
		global $db;
		 
		$result = $db->select("SELECT vendas_produtos.*, produtos.nome_produto, produtos.preco_produto, promocoes_descontos.porcentagem_desconto, promocoes_descontos.id_categoria AS cat_promocao, promocoes_descontos.id_produto AS prod_promocao
				FROM vendas_produtos
				INNER JOIN produtos ON vendas_produtos.id_produto_controle=produtos.id_produto
				LEFT JOIN promocoes_descontos ON produtos.id_produto=promocoes_descontos.id_produto OR (produtos.categoria_produto=promocoes_descontos.id_categoria AND promocoes_descontos.id_categoria!='0')
				WHERE vendas_produtos.id_venda_controle='$id'
				GROUP BY produtos.id_produto
				ORDER BY vendas_produtos.id_controle
			");			
	
		return $result;
	}
	
	
	public function SelectIDVendaCliente($campo){
		
		global $db;
		
		$result = $db->select("SELECT $campo FROM vendas WHERE id_cliente='".AUTENTICADO."' ORDER BY id_venda DESC LIMIT 1");	
		$resultado = $db->expand($result);
		return $resultado[$campo];
		
	}
	
	
	public function SelectDadoEspecificoCliente($campo){
		
		global $db;
		
		$result = $db->select("SELECT $campo FROM clientes WHERE id_cliente='".AUTENTICADO."' LIMIT 1");	
		$resultado = $db->expand($result);
		return $resultado[$campo];
		
	}
	
	public function SelectFreteCarrinho($tipo){
		
		global $db;
		
		$result = $db->select("SELECT * FROM frete_selecionado WHERE id_cliente='".AUTENTICADO."' ORDER BY id_controle DESC LIMIT 1");		
		$resultado = $db->expand($result);
		
		if($tipo=='total'){
			return $resultado['valor_frete'];	
		}
		
		if($tipo=='tipo'){
			return $resultado['tipo_frete'];	
		}
		
	}

	public function SelectEnderecoEntrega($tipo){
		
		global $db;
		 
			$result = $db->select("SELECT * FROM enderecos_clientes WHERE id_cliente='".AUTENTICADO."' AND ativo_endereco='1' LIMIT 1");			
			$endereco = $db->expand($result);
		
			if($tipo=='controle_endereco'){
				return $endereco['id_endereco'];	
			}
			
			else if($tipo=='endereco_completo'){
				return $endereco['endereco_endereco'].', '.$endereco['numero_endereco'].' '.$endereco['complemento_endereco'].' - '.$endereco['bairro_endereco'].'<br>'.$endereco['cidade_endereco'].' - '.$endereco['estado_endereco'].'<br>CEP: '.$endereco['cep_endereco'];	
			}
			
			else if($tipo=='destinatario'){
				return $endereco['destinatario_endereco'];	
			}
		
		
			else{
				return $endereco[$tipo];	
			}
		
	}
	
	
	
	
	
	public function SelectCarrinho(){	
		
		global $db;
		 
		$result = $db->select("SELECT carrinho.*, produtos.nome_produto, produtos.preco_produto, fotos_produtos.foto, promocoes_descontos.porcentagem_desconto, promocoes_descontos.id_categoria AS cat_promocao, promocoes_descontos.id_produto AS prod_promocao
				FROM carrinho
				INNER JOIN produtos ON carrinho.id_produto_cart=produtos.id_produto
				LEFT JOIN fotos_produtos ON produtos.id_produto=fotos_produtos.id_produto
				LEFT JOIN promocoes_descontos ON produtos.id_produto=promocoes_descontos.id_produto OR (produtos.categoria_produto=promocoes_descontos.id_categoria AND promocoes_descontos.id_categoria!='0')
				WHERE carrinho.id_usuario_cart='".AUTENTICADO."'
				GROUP BY produtos.id_produto
				ORDER BY carrinho.id_cart
			");			
	
		return $result;
	
	}
	
	
	
	
	public function SelectValoresCarrinho(){	
		
		global $db;
		 
		$result = $db->select("SELECT carrinho.*, produtos.nome_produto, produtos.preco_produto, promocoes_descontos.porcentagem_desconto, promocoes_descontos.id_categoria AS cat_promocao, promocoes_descontos.id_produto AS prod_promocao
				FROM carrinho
				INNER JOIN produtos ON carrinho.id_produto_cart=produtos.id_produto
				LEFT JOIN promocoes_descontos ON produtos.id_produto=promocoes_descontos.id_produto OR (produtos.categoria_produto=promocoes_descontos.id_categoria AND promocoes_descontos.id_categoria!='0')
				WHERE carrinho.id_usuario_cart='".AUTENTICADO."'
				GROUP BY produtos.id_produto
				ORDER BY carrinho.id_cart
			");			
		
		$total = 0;
		while($result_valor = $db->expand($result)){
			
			$id_produto = $result_valor['id_produto_cart'];
		
			//APLICA DESCONTO OU NÃO//
			$preco_real = $result_valor['preco_produto'];
								
			if(empty($result_valor['cat_promocao']) && $result_valor['prod_promocao']==$id_produto || !empty($result_valor['cat_promocao'])){
				if(!empty($result_valor['porcentagem_desconto'])){
					$preco_real = aplica_desconto(($preco_real),$result_valor['porcentagem_desconto']);			
				}
			}
			//////////////////////////
			
			$preco_real = ($preco_real*$result_valor['quantidade_cart']);
			
			$total = ($total+$preco_real);
				
		}
		
		return $total;
	
	}
	
	
	
	
	
}
?>