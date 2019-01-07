<h5><i class="fa fa-check-square-o fa-fw"></i>Dados Principais</h5>
<hr>

<div class="row">
	
    <div class="col-md-7">
    
    	<input type="hidden" name="id_produto" value="<?php if(isset($id)){echo $id;} ?>" />
        <input type="hidden" name="id_aguarde" value="<?php if(!isset($id)){echo $id = uniqid();} ?>" />

    	<div class="form-group">
    		<label  class="col-form-label">Nome</label>
        	<input type="text" class="form-control" name="nome_produto" required="required"  maxlength=150 value="<?php if(isset($id)){echo $edicao->EditaCadastros($id,'nome_produto','cad_produtos','id_produto');} ?>">
        	<small id="emailHelp" class="form-text text-muted">Exemplo: Tênis Nike Runner, Camiseta Under Armour.</small>
    	</div>
        
        <div class="form-group">
    		<label  class="col-form-label">Resumo</label>
        	<textarea class="form-control" name="resumo_produto" maxlength=450 style="height:200px"><?php if(isset($id)){echo $edicao->EditaCadastros($id,'resumo_produto','cad_produtos','id_produto');} ?></textarea>
            <small id="emailHelp" class="form-text text-muted">Pequena descrição para apresentação do produto.</small>
    	</div>
        
       
    </div>
    
    
    <div class="col-md-5">
    	<div class="card">
        	<h6 class="card-header">Estoque</h6>
            <div class="card-body">
            
                <div class="form-row">

                    <div class="form-group col-md-6">
                    	<label  class="col-form-label">CÓD.</label>
                    	<div class="input-group">
                        	<span class="input-group-addon"><i class="fa fa-registered"></i></span>
                        	<input type="text" name="sku_produto" value="<?php if(isset($id)){echo $edicao->EditaCadastros($id,'sku_produto','cad_produtos','id_produto');} ?>" maxlength=99 class="form-control" >
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Identificador único.</small>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label  class="col-form-label">Gerenciar Estoque</label>
                    	<div class="input-group">
                        	<span class="input-group-addon"><i class="fa fa-sitemap"></i></span>
                        	<select class="form-control" name="gerenciar_produto">
                            	<?php
									 if(isset($id)){
										echo $edicao->SimNaoOptions($edicao->EditaCadastros($id,'gerenciar_produto','cad_produtos','id_produto')); 
									 } else {
										echo '<option value="0">Não</option>'; 
										echo '<option value="1">Sim</option>';
									 }
								?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label  class="col-form-label">Quantidade Fixa</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-thumb-tack"></i></span>
                            <select class="form-control" name="quantidade_fixa_produto">
                            	<?php
									 if(isset($id)){
										echo $edicao->SimNaoOptions($edicao->EditaCadastros($id,'quantidade_fixa_produto','cad_produtos','id_produto')); 
									 } else {
										echo '<option value="0">Não</option>'; 
										echo '<option value="1">Sim</option>';	
									 }
								?>
                            	
                            </select>
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Um ítem do produto no carrinho.</small>
                    </div>

                    <div class="form-group col-md-6">
                        <label  class="col-form-label">Quantidade</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
                            <input type="number" value="<?php if(isset($id)){echo $edicao->EditaCadastros($id,'quantidade_produto','cad_produtos','id_produto');} ?>" class="form-control" name="quantidade_produto" >
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Quantidade em estoque.</small>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label  class="col-form-label">EAN</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                            <input value="<?php if(isset($id)){echo $edicao->EditaCadastros($id,'ean_produto','cad_produtos','id_produto');} ?>" type="text" class="form-control" maxlength=13 name="ean_produto" >
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label  class="col-form-label">NCM</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list-ol"></i></span>
                            <input value="<?php if(isset($id)){echo $edicao->EditaCadastros($id,'ncm_produto','cad_produtos','id_produto');} ?>" type="text" class="form-control" name="ncm_produto" data-mask="9999.99.99">
                        </div>
                    </div>
                    
                    
                
                </div>
                                
            </div>
        </div>
     </div>



     <div class="col-md-12">
        
         <div class="form-group">
            <label  class="col-form-label">Descrição</label>
            <textarea class="form-html" name="descricao_produto"><?php if(isset($id)){echo $edicao->EditaCadastros($id,'descricao_produto','cad_produtos','id_produto');} ?></textarea>
        </div>
    </div>
    
    
    <div class="col-md-12 mt-20">
    	<?php include_once ("tela_upload_fotos_produto.php"); ?>   
 	</div>
   
</div>


