<?php include_once ("../../includes/topo.php"); ?>
<?php include_once ("../../includes/header_interno.php"); ?>


<div class="row">
	<div class="col-sm-12">                    
    	<div class="page-title-box">
        	<div class="btn-group pull-right">
            	
                <form class="form-inline" action="/action_page.php">
                	<div class="input-group">
                    	<input type="text" class="form-control" placeholder="Pesquisa">
                        <div class="input-group-btn">
                        	<button class="btn btn-success" type="submit">
                            	<i class="fa fa-search"></i>
                          	</button>
                        </div>
                    </div>
                </form>
                
            </div>
            <h3 class="page-title">Pedidos</h3>

        </div>
	</div>
</div>

<hr>

<?php include_once ("listagem/lista_pedidos.php"); ?>





<?php include_once ("../../includes/footer_interno.php"); ?>
<?php include_once ("../../includes/rodape.php"); ?>