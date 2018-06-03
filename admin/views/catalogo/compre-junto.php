<?php include_once ("../../includes/topo.php"); ?>
<?php include_once ("../../includes/header_interno.php"); ?>

<?php
$edicao = new Pesquisas();
?>

<form method="post" action="">

<div class="row">
    <div class="col-sm-12">                    
        <div class="page-title-box">
            <div class="btn-group pull-right">
                 <a href="<?php echo ADMIN_WORTEX; ?>home">
                 <button class="btn btn-link" type="button">
                    <i class="fa fa-backward fa-fw"></i> voltar
                 </button>
                 </a>
                 <button class="btn btn-success" type="submit">
                    <i class="fa fa-save fa-fw"></i> Salvar
                 </button>
            </div>
            <h3 class="page-title">Compre Junto</h3>
        </div>
    </div>
</div>


    <hr>
                 

    <ul class="nav nav-tabs tabs-bordered nav-justified">
        
        <li class="nav-item">
            <a href="#aba01" data-toggle="tab" aria-expanded="false" class="nav-link active">
            <i class="fa fa-check-square-o fa-fw"></i><br>
            PRODUTOS
            </a>
        </li>
        
        <li class="nav-item">
            <a href="#aba02" data-toggle="tab" aria-expanded="true" class="nav-link">
            <i class="fa fa-truck fa-fw"></i><br>
            DETALHES
            </a>
        </li>
                                
        <li class="nav-item">
            <a href="#aba03" data-toggle="tab" aria-expanded="true" class="nav-link">
            <i class="fa fa-clone fa-fw"></i><br>
            CATEGORIAS  
            </a>
        </li>
        
        <li class="nav-item">
            <a href="#aba04" data-toggle="tab" aria-expanded="true" class="nav-link">
            <i class="fa fa-rss fa-fw"></i><br>
            MARKETING
            </a>
        </li>
                         
    </ul>
   
<div class="card-box">

    <div class="tab-content">
        
        <div class="tab-pane active" id="aba01">
            <?php include_once ("telas-cadastro-compre-junto/tela_novo_compre_junto01.php"); ?>                         
        </div>
        
        <div class="tab-pane" id="aba02">
            <?php include_once ("telas-cadastro-compre-junto/tela_novo_compre_junto02.php"); ?>   
        </div>  
        
         <div class="tab-pane" id="aba03">
            <?php include_once ("telas-cadastro-compre-junto/tela_novo_compre_junto03.php"); ?>   
        </div>  
        
         <div class="tab-pane" id="aba04">
            <?php include_once ("telas-cadastro-compre-junto/tela_novo_compre_junto04.php"); ?>   
        </div>  
        
        
    </div>


</div>

</form>



<?php include_once ("../../includes/footer_interno.php"); ?>
<?php include_once ("../../includes/rodape.php"); ?>
<?php include_once ("../../includes/editor_texto.php"); ?>