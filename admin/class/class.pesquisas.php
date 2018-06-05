<?php
class Pesquisas{
	
	public function EditaCadastros($id,$campo,$tabela,$campo_pesquisa){	
		$db = new DB();
		$sql = $db->select("SELECT $campo FROM $tabela WHERE $campo_pesquisa='$id' LIMIT 1");
		$line = $db->expand($sql);
		return $line[$campo];
	}
	
	
	public function SimNaoOptions($resposta){	
		$db = new DB();
		$retorno='';
		//SIM
		if($resposta==1){
			$retorno .= '<option value="1" selected="selected">Sim</option>';
            $retorno .= '<option value="0">Não</option>';
		//NÃO	
		} else {
			$retorno .= '<option value="1">Sim</option>';
            $retorno .= '<option value="0" selected="selected">Não</option>';
		}
		
		return $retorno;
	}

	public function UsuarioTipoOptions($resposta){	
		$db = new DB();
		$retorno='';
		//SIM
		if($resposta==1){
			$retorno .= '<option value="1" selected="selected">Administrador</option>';
            $retorno .= '<option value="0">Vendedor</option>';
		//NÃO	
		} else {
			$retorno .= '<option value="1">Administrador</option>';
            $retorno .= '<option value="0" selected="selected">Vendedor</option>';
		}
		
		return $retorno;
	}
	
	public function ListagemSubCategorias($id_categoria,$num,$produto){	
		
		$x=1;
		$espacos = '';
		while($x<=$num){
			$espacos .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
			$x++;
		}
		
		$db = new DB();
		$sub_principais = $db->select("SELECT nome_categoria, id_categoria FROM cad_categoria WHERE status_categoria='1' AND pai_categoria='$id_categoria' ORDER BY ordem_categoria, nome_categoria");
		if($db->rows($sub_principais)){
			$num++;
			while($ln_subcategorias = $db->expand($sub_principais)){
				
				$id_subcategoria = $ln_subcategorias['id_categoria'];
				
				$verifica_checado = $db->select("SELECT id_relacao FROM cad_relacao_categorias_produtos 
				WHERE id_produto_relacao='$produto' AND id_categoria_relacao='$id_subcategoria'
				LIMIT 1");
				
				$checked = '';
				if($db->rows($verifica_checado)){
					$checked = 'checked="checked"';
				}
				
				
				echo '<li class="list-group-item">';
					echo '<input '.$checked.' type="checkbox" name="subcategoria[]" value="'.$ln_subcategorias['id_categoria'].'">';						echo $espacos.'<span class="badge-categorias badge-success">';
							echo '<i class="fa fa-fw fa-long-arrow-right"></i>';
							echo $ln_subcategorias['nome_categoria'];
						echo '</span>';
				echo '</li>';
				
				
				$objeto = new Pesquisas();
        		$objeto->ListagemSubCategorias($id_subcategoria,$num,$produto);
				
			}
		}
	
	}
	
	
	
	public function ListagemCategorias($produto){	
		
			$db = new DB();
			
			
			$cat_principais = $db->select("SELECT nome_categoria, id_categoria FROM cad_categoria WHERE status_categoria='1' AND pai_categoria='0' ORDER BY ordem_categoria, nome_categoria");
			
			while($ln_categorias = $db->expand($cat_principais)){
				
				$id_categoria = $ln_categorias['id_categoria'];
				
				$verifica_checado = $db->select("SELECT id_relacao FROM cad_relacao_categorias_produtos 
				WHERE id_produto_relacao='$produto' AND id_categoria_relacao='$id_categoria'
				LIMIT 1");
				
				$checked = '';
				if($db->rows($verifica_checado)){
					$checked = 'checked="checked"';
				}
				
				
				echo '<li class="list-group-item">';
					echo '<input '.$checked.' type="checkbox" name="categoria[]" value="'.$ln_categorias['id_categoria'].'">';
					echo '<span class="badge-categorias badge-danger">'.$ln_categorias['nome_categoria'].'</span>';
				echo '</li>';
				
					
					
					$objeto = new Pesquisas();
        			$objeto->ListagemSubCategorias($id_categoria,1,$produto);
					
				
			}
		
	}
	
	
	
}

?>