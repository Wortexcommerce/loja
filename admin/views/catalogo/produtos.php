<?php include_once ("../../includes/topo.php"); ?>
<?php include_once ("../../includes/header_interno.php"); ?>


<div class="row">
	<div class="col-sm-12">                    
    	<div class="page-title-box">
        	<div class="btn-group pull-right">
            	
                <form class="form-inline" action="pesquisa/produto" method="post">
                	<div class="input-group">
                    	<input name="busca" required type="text" class="form-control" placeholder="Pesquisa">
                        <div class="input-group-btn">
                        	<button class="btn btn-success" type="submit">
                            	<i class="fa fa-search"></i>
                          	</button>
                        </div>
                    </div>
                    &nbsp;
                    <a href="produtos/novo">
                    <button class="btn btn-custom" type="button">
                    	<i class="fa fa-plus fa-fw"></i> Novo Produto
                    </button>
                    </a>
                </form>
                
            </div>
            <h3 class="page-title">Produtos</h3>
        </div>
	</div>
    
</div>

<hr>

<?php include_once ("listagem/lista_produtos.php"); ?>




<?php include_once ("../../includes/footer_interno.php"); ?>
<?php include_once ("../../includes/rodape.php"); ?>