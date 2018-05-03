<?php
class Pesquisas{
	
	public function ListagemSubCategorias($id_categoria,$num){	
		
		$x=1;
		$espacos = '';
		while($x<=$num){
			$espacos .= '&nbsp;&nbsp;&nbsp;';
			$x++;
		}
		
		$db = new DB();
		$sub_principais = $db->select("SELECT nome_categoria, id_categoria FROM cad_categoria WHERE status_categoria='1' AND pai_categoria='$id_categoria' ORDER BY ordem_categoria, nome_categoria");
		if($db->rows($sub_principais)){
			$num++;
			while($ln_subcategorias = $db->expand($sub_principais)){
				$id_subcategoria = $ln_subcategorias['id_categoria'];
				echo '<li class="list-group-item">'.$espacos.'<i class="fa fa-fw fa-long-arrow-right"></i>'.$ln_subcategorias['nome_categoria'].'</li>';
				$objeto = new Pesquisas();
        		$objeto->ListagemSubCategorias($id_subcategoria,$num);
			}
		}
	
	}
	
	
	
	public function ListagemCategorias($produto){	
		
			$db = new DB();
			$cat_principais = $db->select("SELECT nome_categoria, id_categoria FROM cad_categoria WHERE status_categoria='1' AND pai_categoria='0' ORDER BY ordem_categoria, nome_categoria");
			
			while($ln_categorias = $db->expand($cat_principais)){
				echo '<li class="list-group-item"><input type="checkbox"><b>'.$ln_categorias['nome_categoria'].'</b></li>';
				
					$id_categoria = $ln_categorias['id_categoria'];
					
					$objeto = new Pesquisas();
        			$objeto->ListagemSubCategorias($id_categoria,1);
					
				
			}
		
	}
	
	
	
}

?>