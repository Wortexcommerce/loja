<?php include_once ("../../includes/topo.php"); ?>
<?php include_once ("../../includes/header_interno.php"); ?>

<div class="row">
    <div class="col-sm-12">                    
        <div class="page-title-box">
            <div class="btn-group pull-right">
            
            </div>
            <h3 class="page-title"> Novo usuário</h3>

        </div>
    </div>
</div>

<hr>

<div class="row">
    
    
    <div class="col-md-12">
        <div class="card">
            <h6 class="card-header">Cadstre o novo usuário</h6>
            <div class="card-body">
            
                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label  class="col-form-label">Nome</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <label  class="col-form-label">Sobrenome</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                    </div>


                    <div class="form-group col-md-4">
                        <label  class="col-form-label">Tipo</label>
                        <div class="input-group">
                            <select class="form-control select2">
                                <option value="">Escolha</option>
                                <option value="">Lojista</option>
                                <option value="">Vendedor</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label  class="col-form-label">E-mail</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                    </div>

                    <div class="col-md-12">
                         <p class="text-muted font-13 mt-3 mb-2">Defina as permissões</p>
                         <div class="checkbox form-check-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1">
                            <label for="inlineCheckbox1"> Editar HTML e trocar o Template </label>
                         </div>
                         <div class="checkbox checkbox-success form-check-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                            <label for="inlineCheckbox2"> Exibir estatísticas de vendas no painel </label>
                        </div>
                        <div class="checkbox checkbox-pink form-check-inline">
                            <input type="checkbox" id="inlineCheckbox3" value="option1">
                            <label for="inlineCheckbox3"> Acessar ferramentas de marketing </label>
                        </div>
                    </div>


                    <div class="form-group col-md-6">
                        <label  class="col-form-label">Senha*</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label  class="col-form-label">Confirme a senha*</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                    </div>
                </div>
                                
            </div>
        </div>

        <br>

       
     <div class="col-md-12">
        <hr>
        <button class="btn btn-success pull-right" type="button">
            <i class="fa fa-save fa-fw"></i> Salvar
        </button>
    </div> 

</div>

<?php include_once ("../../includes/footer_interno.php"); ?>
<?php include_once ("../../includes/rodape.php"); ?>
<?php include_once ("../../includes/editor_texto.php"); ?>