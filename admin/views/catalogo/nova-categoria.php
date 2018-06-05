<?php include_once ("../../includes/topo.php"); ?>
<?php include_once ("../../includes/header_interno.php"); ?>


<div class="row">
    <div class="col-sm-12">                    
        <div class="page-title-box">
            <div class="btn-group pull-right">
                 <a href="<?php echo ADMIN_WORTEX; ?>produtos">
                 <button class="btn btn-link" type="button">
                    <i class="fa fa-backward fa-fw"></i> voltar
                 </button>
                 </a>
                 <button class="btn btn-success" type="submit">
                    <i class="fa fa-save fa-fw"></i> Salvar
                 </button>
            </div>
            <h3 class="page-title">Nova Categoria</h3>
        </div>
    </div>
</div>


<hr>


<div class="row">
    

    
    <div class="col-md-8">
        <div class="card">
            <h6 class="card-header">Cadastre uma nova categoria :)</h6>
            <div class="card-body">

            <form method="post" action="usuarios/save">

                <input type="hidden" name="id_usuario" value="<?php if(isset($id)){echo $id;} ?>" />


                <div class="form-row">

                    <div class="form-group col-md-12">
                        <label  class="col-form-label">Nome</label>
                        <div class="input-group">
                            <input type="text"  required="" maxlength="50" name="" class="form-control" value="" >
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label  class="col-form-label">Descrição</label>
                        <div class="input-group">
                            <textarea class="form-control col-md-12" name="" maxlength="450" style="width: 100%"></textarea>
                        </div>
                    </div>


                    <div class="form-group col-md-12">
                        <label  class="col-form-label">Categoria Google Shopping - <a href="https://support.google.com/merchants/answer/6324436" target="_blanck">Instruções </a></label>
                        <div class="input-group">
                            <input type="text"  required="" maxlength="" name="" class="form-control" value="" >
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label  class="col-form-label">Imagem <small>(Recomendado: 712x150px)</small></label>
                        <div class="input-group">
                            <input type="file"  name="" class="form-control" value="" >
                        </div>
                        <small>Tamanho máximo do arquivo: 10 MB</small>
                    </div>

                
                </div>
                                
            </div>
        </div>

        <br>


</div>


<div class="col-md-4">
        <div class="card">
            <h6 class="card-header">Atributos e SEO</h6>
            <div class="card-body">



                <div class="form-row">

                    <div class="form-group col-md-12">
                        <label  class="col-form-label">URL da página desta categoria</label>
                        <div class="input-group">
                            <input type="text"  required="" maxlength="50" name="" class="form-control" value="" >
                        </div>
                    </div>


                    <div class="form-group col-md-12">
                        <label  class="col-form-label">Categoria Pai</label>
                        <div class="input-group">
                            <select class="form-control select2">
                                <option value="">Categoria 1</option>
                                <option value="">Categoria 1</option>
                                <option value="">Categoria 1</option>
                                <option value="">Categoria 1</option>
                                <option value="">Categoria 1</option>
                                <option value="">Categoria 1</option>
                            </select>
 
                        </div>
                    </div>


                    <div class="form-group col-md-12">
                        <label  class="col-form-label">Título da página</label>
                        <div class="input-group">
                            <input type="text"  required="" maxlength="" name="" class="form-control" value="" >
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label  class="col-form-label">Descrição da página</label>
                        <div class="input-group">
                            <textarea class="form-control col-md-12" name="" maxlength="450" style="width: 100%"></textarea>
                        </div>
                    </div>


                    <div class="form-group col-md-12">
                        <label  class="col-form-label">Palavras chave separadas por vírgula</label>
                        <div class="input-group">
                            <input type="text"  required="" maxlength="" name="" class="form-control" value="" >
                        </div>
                    </div>

                
                </div>
                                
            </div>
        </div>

        <br>


</div>



<?php include_once ("../../includes/footer_interno.php"); ?>
<?php include_once ("../../includes/rodape.php"); ?>