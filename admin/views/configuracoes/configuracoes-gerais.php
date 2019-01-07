<?php include_once ("../../includes/topo.php"); ?>
<?php include_once ("../../includes/header_interno.php"); ?>



<div class="row">
	<div class="col-sm-12">                    
    	<div class="page-title-box">
        	<div class="btn-group pull-right">
            
            </div>
            <h3 class="page-title">Configurações gerais</h3>

        </div>
	</div>
</div>

<hr>


    <ul class="nav nav-tabs tabs-bordered nav-justified">
        
        <li class="nav-item">
            <a href="#aba01" data-toggle="tab" aria-expanded="false" class="nav-link active">
            <i class="fa fa-building fa-fw"></i><br>
            PRINCIPAL/REDES SOCIAIS
            </a>
        </li>
        
        <li class="nav-item">
            <a href="#aba02" data-toggle="tab" aria-expanded="true" class="nav-link">
            <i class="fa fa-cogs fa-fw"></i><br>
            PREFERÊNCIAS
            </a>
        </li>
                                
        <li class="nav-item">
            <a href="#aba03" data-toggle="tab" aria-expanded="true" class="nav-link">
            <i class="fa fa-refresh fa-fw"></i><br>
            AUTOMAÇÕES  
            </a>
        </li>
        
        <li class="nav-item">
            <a href="#aba04" data-toggle="tab" aria-expanded="true" class="nav-link">
            <i class="fa fa-rss fa-fw"></i><br>
            SEO/REDIRECT 301
            </a>
        </li>
                         
    </ul>
    
<div class="card-box">

    <div class="tab-content">
        
        <div class="tab-pane active" id="aba01">
            <?php include_once ("telas-configuracoes/tela_configuracao01.php"); ?>                         
        </div>
        
        <div class="tab-pane" id="aba02">
            <?php include_once ("telas-configuracoes/tela_configuracao02.php"); ?>   
        </div>  
        
         <div class="tab-pane" id="aba03">
            <?php include_once ("telas-configuracoes/tela_configuracao03.php"); ?>   
        </div>  
        
         <div class="tab-pane" id="aba04">
            <?php include_once ("telas-configuracoes/tela_configuracao04.php"); ?>   
        </div>  
                          
    
    </div>


</div>





<?php include_once ("../../includes/footer_interno.php"); ?>
<?php include_once ("../../includes/rodape.php"); ?>
<?php include_once ("../../includes/editor_texto.php"); ?>



<?php include_once ("../../includes/footer_interno.php"); ?>
<?php include_once ("../../includes/rodape.php"); ?>