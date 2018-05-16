<?php include_once ("../../includes/topo.php"); ?>
<?php include_once ("../../includes/header_interno.php"); ?>

<div class="row">
	<div class="col-sm-12">                    
    	<div class="page-title-box">
        	<div class="btn-group pull-right">
            
                
            </div>
            <h3 class="page-title">MODULOS DE ENVIO</h3>  
            <hr>
	</div>
</div>



<div class="row">
    <?php 

    $x=1;
    while ($x<12) {
    
    echo '<div class="col-md-3">';
    echo '    <div class="card m-b-30">';
    echo '        <img class="card-img-top img-fluid" src="assets/images/entregas/correios.jpg" alt="Card image cap">';
    echo '             <div class="card-body">';
    echo '                 <h5 class="card-title">Correios</h5>';
    echo '                     <p class="card-text">';
    echo '                         This is a wider card with supporting text below as a natural lead-in to additional                                                                               content.';
    echo '                     </p>';

    echo '                    <p class="card-text">';
    echo '                         <a href="" class="btn btn-block btn-xs btn-success waves-effect waves-light">INSTALAR</a>';
    echo '                    </p>';
    echo '            </div>';
    echo '    </div>';
    echo '</div>';
    $x++;
    }
    ?>

</div>



<?php include_once ("../../includes/footer_interno.php"); ?>
<?php include_once ("../../includes/rodape.php"); ?>