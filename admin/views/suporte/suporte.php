<?php include_once ("../../includes/topo.php"); ?>
<?php include_once ("../../includes/header_interno.php"); ?>


<div class="row">
	<div class="col-sm-12">                    
    	<div class="page-title-box">
        	<div class="btn-group pull-right">
            	
                <form class="form-inline" action="/action_page.php">
                	
                    <a href="produtos/novo">
                    <button class="btn btn-custom" type="button">
                    	<i class="fa fa-plus fa-fw"></i> Novo Chamado
                    </button>
                    </a>
                </form>
                
            </div>
            <h3 class="page-title">Meus Chamados</h3>
        </div>
	</div>
    
</div>

<hr>

<?php include_once ("listagem/lista_suporte.php"); ?>





<?php include_once ("../../includes/footer_interno.php"); ?>
<?php include_once ("../../includes/rodape.php"); ?>