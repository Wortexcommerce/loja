
<div class="row">
	 
    <div class="col-md-6">
    	<h5>Informações de Cadastro</h5>
        <div class="col-md-12"></div>
       
          	<div class="row">
            	
                <div class="col-md-3">
                	<strong>CPF/CNPJ:</strong>
                </div>
                <div class="col-md-9">
                	358.055.544-89
            	</div>
          	
            	<div class="col-md-3">
                	<strong>Nome/Razão:</strong>
                </div>
                <div class="col-md-9">
                	Diogo Mastrangelo ME
            	</div>
          	
            	<div class="col-md-3">
                	<strong>Cidade/UF:</strong>
                </div>
                <div class="col-md-9">
                	Lençóis Paulista/SP
            	</div>
          	
            	<div class="col-md-3">
                	<strong>Bairro:</strong>
                </div>
                <div class="col-md-9">
                	Jardim Europa
            	</div>
          	
            	<div class="col-md-3">
                	<strong>CEP:</strong>
                </div>
                <div class="col-md-9">
                	18683-732
            	</div>

            	<div class="col-md-3">
                	<strong>Endereço:</strong>
                </div>
                <div class="col-md-9">
                	Alfredo Chiari, 258
            	</div>
          	
            	<div class="col-md-3">
                	<strong>E-mail:</strong>
                </div>
                <div class="col-md-9">
                	diogomastrangelo@uol.com.br
            	</div>
          	
            	<div class="col-md-3">
                	<strong>Telefone:</strong>
                </div>
                <div class="col-md-9">
                	(14) 3263-1265
            	</div>
          	
            	<div class="col-md-3">
                	<strong>Celular:</strong>
                </div>
                <div class="col-md-9">
                	(14) 98162-5656
            	</div>
                
                <div class="col-md-12">
                	<a href=""><button class="btn-sm btn-warning"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>Editar dados</button></a>
                </div>
          	
        </div>
    
    </div>
    
    
    
    <div class="col-md-6">
    
    	<h5>Informações do Plano</h5>
                      
                <ul class="list-group">
                  
                      <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Seu Plano:</strong>
                            </div>
                            <div class="col-md-6">
                                Básico (Full Comerce)
                            </div>
                        </div>    
                      </li>
                      
                      <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                               Valor do plano:
                            </div>
                            <div class="col-md-6">
                                <strong>R$ 99,00</strong>
                            </div>
                        </div>    
                      </li>
                      
                      <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                               1 x Certificado de Segurança SSL
                            </div>
                            <div class="col-md-6">
                                <strong>R$ 29,00</strong>
                            </div>
                        </div>    
                      </li>
                      
                      <li class="list-group-item active">
                        <div class="row">
                            <div class="col-md-6">
                               Valor Total
                            </div>
                            <div class="col-md-6">
                                <strong>R$ 128,00</strong>
                            </div>
                        </div>    
                      </li>
                      
                      <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Forma de pagamento:</strong>
                            </div>
                            <div class="col-md-6">
                                Cartão de crédito <a href="">(Mudar)</a>
                            </div>
                        </div>    
                      </li>
                      
                      <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Dia da recorrência:</strong>
                            </div>
                            <div class="col-md-6">
                                Dia 5 de cada mês
                            </div>
                        </div>    
                      </li>
                      
                      <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Status da loja:</strong>
                            </div>
                            <div class="col-md-6">
                                <span class="badge badge-success">Ativa</span>
                            </div>
                        </div>    
                      </li>
                      
                      
                      <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Cancelamento da loja:</strong>
                            </div>
                            <div class="col-md-6">
                                <a href=""><button class="btn-sm btn-danger">Solicitar cancelamento</button></a>
                            </div>
                        </div>    
                      </li>
                      
                </ul>   
             
    </div>
   
   	
    
    <div class="col-md-12 mt-40">
    	
        <div class="table-rep-plugin">
            <div class="table-responsive" data-pattern="priority-columns">
            
                <table class="table table-striped table-centered table-hover">
                    <thead>
                        <tr class="no-border">
                            <th>Data da criação</th>
                            <th>Tipo</th>
                            <th>Vencimento</th>
                            <th>Pagamento</th>
                            <th>Valor</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody >
                        
                            <?php
                                $x=1;
                                while($x<4){
                                    echo '<tr style="padding:0">';
                                        echo '<td>12/01/2018 10:00</td>';
										echo '<td>Assinatura do Plano</td>';
										echo '<td>12/01/2018</td>';
										echo '<td>Cartão de Crédito</td>';
										echo '<td>R$ 129,90</td>';
                                        echo '<td><span class="badge badge-success">Pago</span></td>';
                                        
                                    echo '</tr>';
                                    $x++;	
                                }
                            ?>
                            
                        </tr>
                    </tbody>
                </table>
        
            </div>
        </div>
    
    </div>
   
</div>    