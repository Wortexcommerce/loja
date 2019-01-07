<h5><i class="fa fa-clone fa-fw"></i>CATEGORIAS</h5>
<hr>

<ul class="list-group">
<?php
	$categorias = new Pesquisas();
	//EDIÇÃO
	if(isset($id)){
		$categorias->ListagemCategorias($id);
	//INSERT	
	} else {
		$categorias->ListagemCategorias(0);
	}
	
?>
</ul>