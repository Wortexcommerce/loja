

<div class="row">
	<div class="col-sm-12">                    
    	<div class="page-title-box">
            
        </div>
	</div>
    
</div>


<?php require ("listagem/banners.php"); ?>


<div class="row mt-30">

	<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
    	<div class="card-box tilebox-one">
        	<i class="fi-box float-right"></i>
            <h6 class="text-muted text-uppercase">Pedidos</h6>
            <h5 class="mb-3" data-plugin="counterup">2549</h5>
           <span class="badge badge-danger"> De 01/12/2018 á 31/12/2018</span>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
    	<div class="card-box tilebox-one">
        	<i class="fi-layers float-right"></i>
            <h6 class="text-muted text-uppercase">Vendas Totais</h6>
        	<h5 class="mb-3"><span data-plugin="counterup">R$ 36.232,66</span></h5>
        	<span class="badge badge-danger"> De 01/12/2018 á 31/12/2018</span>
        </div>
	</div>

	<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
    	<div class="card-box tilebox-one">
        	<i class="fi-tag float-right"></i>
            <h6 class="text-muted text-uppercase">Vendas Aprov.</h6>
            <h5 class="mb-3"><span data-plugin="counterup">R$ 12.232,66</span></h5>
            <span class="badge badge-danger"> De 01/12/2018 á 31/12/2018</span>
        </div>
    </div>

	<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
    	<div class="card-box tilebox-one">
        	<i class="fi-briefcase float-right"></i>
        	<h6 class="text-muted text-uppercase">Ticket Médio</h6>
       		<h5 class="mb-3" data-plugin="counterup">R$ 129,90</h5>
        	<span class="badge badge-primary"> +10% </span> <span class="text-muted ml-2 vertical-middle">Last year</span>
       	</div>
   	</div>
    
    
</div>


<?php require ("listagem/grafico_pedidos.php"); ?>



<div class="row">
	
    <?php require ("listagem/produtos_sem_estoque.php"); ?>

	<?php require ("listagem/mais_buscados.php"); ?>
    
    <?php require ("listagem/mais_vendidos.php"); ?>

</div>


            