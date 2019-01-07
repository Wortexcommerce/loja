<div class="table-rep-plugin">
	<div class="table-responsive" data-pattern="priority-columns">
    
    	<table class="table table-striped table-centered table-hover">
        	<thead>
            	<tr class="no-border">
                    <th data-priority="3">Núm. Pedido</th>
                    <th data-priority="3">Data da criação</th>
                    <th data-priority="3">Nome</th>
                    <th data-priority="3">E-mail</th>
                    <th data-priority="3">Página</th>
                    <th data-priority="3">Valor</th>
                </tr>
            </thead>
           <tbody >
            	
                	<?php
						$x=1;
						while($x<16){
							echo '<tr>';
								echo '<td>1545778'.$x.'</td>';
								echo '<td>01/05/2018 20:00</td>';
								echo '<td>Diogo Mastrangelo</td>';
								echo '<td>diogomastrangelo@uol.com.br</td>';
								echo '<td>carrinho/ver</td>';
								echo '<td>R$ 300,00</td>';
							echo '</tr>';
							$x++;	
						}
					?>
                	
                </tr>
            </tbody>
        </table>

	</div>
</div>