<?php include_once ("../../includes/topo.php"); ?>
<?php include_once ("../../includes/header_interno.php"); ?>

<?php
    $edicao = new Pesquisas();
?>

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
            <h6 class="card-header">Cadastre o novo usuário</h6>
            <div class="card-body">

            <form method="post" action="usuarios/save">

                <input type="hidden" name="id_usuario" value="<?php if(isset($id)){echo $id;} ?>" />


                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label  class="col-form-label">Nome</label>
                        <div class="input-group">
                            <input type="text"  required="" maxlength="50" name="nome_usuario" class="form-control" value="<?php if(isset($id)){echo $edicao->EditaCadastros($id,'nome_usuario','cad_usuarios','id_usuario');} ?>" >
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <label  class="col-form-label">Sobrenome</label>
                        <div class="input-group">
                            <input type="text" class="form-control" required="" maxlength="50" name="sobrenome_usuario" value="<?php if(isset($id)){echo $edicao->EditaCadastros($id,'sobrenome_usuario','cad_usuarios','id_usuario');} ?>">
                        </div>
                    </div>


                    <div class="form-group col-md-4">
                        <label  class="col-form-label">Tipo</label>
                        <div class="input-group">
                            <select class="form-control select2" required="" name="tipo_usuario">
                               
                                <?php
                                     if(isset($id)){
                                        echo $edicao->UsuarioTipoOptions($edicao->EditaCadastros($id,'tipo_usuario','cad_usuarios','id_usuario')); 
                                     } else {
                                        echo '<option value="0">Vendedor</option>'; 
                                        echo '<option value="1">Administrador</option>';
                                     }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label  class="col-form-label">E-mail</label>
                        <div class="input-group">
                            <input type="email" class="form-control" required="" maxlength="99" name="email_usuario" value="<?php if(isset($id)){echo $edicao->EditaCadastros($id,'email_usuario','cad_usuarios','id_usuario');} ?>">
                        </div>
                    </div>



                    <div class="form-group col-md-6">
                        <label  class="col-form-label">Senha*</label>
                        <div class="input-group">
                            <input type="password" <?php if(!isset($id)){echo 'required=""';} ?> maxlength="32" name="senha_usuario" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label  class="col-form-label">Confirme a senha*</label>
                        <div class="input-group">
                            <input type="password" <?php if(!isset($id)){echo 'required=""';} ?> maxlength="32" class="form-control" >
                        </div>
                    </div>
                </div>
                                
            </div>
        </div>

        <br>

       
     <div class="col-md-12">
        <hr>
        <button class="btn btn-success pull-right" type="submit">
            <i class="fa fa-save fa-fw"></i> Salvar
        </button>
    </div> 
</form>
</div>

<?php include_once ("../../includes/footer_interno.php"); ?>
<?php include_once ("../../includes/rodape.php"); ?>
<?php include_once ("../../includes/editor_texto.php"); ?>