<h5><i class="fa fa-truck fa-fw"></i>DETALHES</h5>
<hr>


<div class="row">


	<div class="col-md-8">
    	<div class="card">
        	

            <div class="card-body">
                <div class="form-row">

                    <div class="form-group col-md-12">
                        <label  class="col-form-label">Nome</label>
                        <input type="text" class="form-control" name="nome_produto" required="required"  maxlength=150 value="">
                        <small id="emailHelp" class="form-text text-muted">Exemplo: Tênis Nike Runner, Camiseta Under Armour.</small>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="col-form-label">Descrição da Página</label>
                        <textarea class="form-control" name="" maxlength=400 style="height:120px"></textarea>
                        <small  class="form-text text-muted">Caso fique em branco, será adotado o resumo do produto.</small>
                    </div>


                    <div class="form-group col-md-12">
                        <label  class="col-form-label">Produtos relacionados</label>
                        <input type="text" class="form-control" name="" required="required"  maxlength=150 value="">
                        <small id="emailHelp" class="form-text text-muted">Termo de busca</small>
                    </div>


                </div>
            </div>
        </div>
    </div>


	<div class="col-md-4">
    	<div class="card">
        	<h6 class="card-header">Preço</h6>
            <div class="card-body">
            
                <div class="form-row">

                    
                    <div class="form-group col-md-12">
                        <label  class="col-form-label">Preço</label>
                        <div class="input-group">
                            <input type="number" class="form-control mascara-dinheiro" data-precision="3" name="" data-thousands="" data-decimal="." value="">
                            <span class="input-group-addon">R$</span>
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Valor do kit</small>
                    </div>
                    
                   
                </div>
                                
            </div>
        </div>
     </div>

     <div class="col-md-12">
        
         <div class="form-group">
            <label  class="col-form-label">Descrição completa</label>
            <textarea class="form-html" name="descricao_produto"></textarea>
        </div>
    </div>


</div>