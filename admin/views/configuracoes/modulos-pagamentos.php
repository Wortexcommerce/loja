<?php include_once ("../../includes/topo.php"); ?>
<?php include_once ("../../includes/header_interno.php"); ?>

<div class="row">
	<div class="col-sm-12">                    
    	<div class="page-title-box">
        	<div class="btn-group pull-right">
                
            </div>
            <h3 class="page-title">MODULOS DE PAGAMENTO</h3>

        </div>
	</div>
</div>

<hr>



<div class="row">
    <?php

    $x=1;
    while ($x<7) {
    
    echo'<div class="col-md-4">';
    echo'    <div class="card m-b-30 text-xs-center">';
    echo'        <div class="card-header text-center">';
    echo'            <img src="assets/images/pagamentos/mercado.png" style="max-width: 150px">';
    echo'        </div>';
    echo'            <div class="card-body text-center">';
                 
    echo'                <div class="alert alert-success" role="alert">';
    echo'                    TAXA ESPECIAL';
    echo'                </div>';

    echo'               <small>Checkout Transparente</small><br>';
    echo'                <span>- - - - - - - - - - - - - - - - - - - - - - - - - - -</span><br><br>';
                
    echo'                <h6 class="card-title">D14</h6>';

    echo'                <h4 class="card-title cor-porcentagem">4,99%</h4>';

    echo'                <p class="card-text">Sem custos extras por transação.</p>';

    echo'                <div class="alert alert-light" role="alert">';
    echo'                 Solicitar uma taxa especial para <a href=""> parcerias@mercadopago.com.br</a> de 
                          acordo com seu faturamento.';
    echo'                </div> ';           
                   
    echo'           </div>';
        
    echo'            <div class="card-footer text-muted">';
    echo'                        <a href="" class="btn btn-block btn-xs btn-success waves-effect waves-light">INSTALAR</a>';
    echo'            </div>';
    echo'    </div>';
    echo'</div>';
    $x++;
    }
    ?>
</div>



<?php include_once ("../../includes/footer_interno.php"); ?>
<?php include_once ("../../includes/rodape.php"); ?>