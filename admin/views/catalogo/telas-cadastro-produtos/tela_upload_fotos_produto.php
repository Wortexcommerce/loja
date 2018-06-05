   
   
   <div class="card">
    	<h6 class="card-header">Fotos</h6>
            <div class="card-body">
                <div class="form-row">
    
                    <div class="col-md-12 borda-tracejada" style="padding:20px">
                          
                          <!-- Our markup, the important part here! -->
                          <div id="drag-and-drop-zone" class="dm-uploader pt-10">
                            <h3 class="mb-4 mt-1 text-muted">Arraste e solte aqui os arquivos!</h3>
                
                            <div class="btn btn-primary  mb-5">
                                <span>Procurar arquivos</span>
                                <input type="file" title='Procurar arquivos' />
                            </div>
                          </div><!-- /uploader -->
                		 
                          <hr>	
                          
                         <div class="row"> 
                         	<div class="col-md-12 text-center"  id="fotos-produto-reload">
                         		<?php include_once ("listagem/lista_fotos_produto.php"); ?> 	
                            </div>
                         </div>
                          
                         <ul class="list-unstyled p-2 d-flex flex-column col" id="files">
                         	<li class="text-muted text-center empty">Nenhum arquivo selecionado.</li>
                         </ul>
                          
                   </div>
       
                   
                    
                </div>    
			</div>
		</div>