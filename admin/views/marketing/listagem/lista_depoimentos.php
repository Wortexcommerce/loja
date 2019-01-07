<div class="table-rep-plugin">
	<div class="table-responsive" data-pattern="priority-columns">
    
    	<table class="table table-striped table-centered table-hover">
        	<thead>
            	<tr class="no-border">
                    <th data-priority="1" width="20"><input type="checkbox"></th>
                    <th data-priority="3">Data</th>
                    <th data-priority="3">Cliente</th>
                    <th data-priority="3">Produto</th>
                    <th data-priority="3">Depoimento</th>
                    <th data-priority="3">Status</th>
                </tr>
            </thead>
           <tbody >
            	
                	<?php
						$x=1;
						while($x<16){
							echo '<tr>';
								echo '<td><input type="checkbox"></td>';
								echo '<td>01/05/2018</td>';
								echo '<td>Diogo Mastrangelo</td>';
								echo '<td>Escova Progressiva Select One Sem Formol 1 litro - Prohall Cosmétic0</td>';
								echo '<td>Muito top! Prohall o que é esse produto? O meu cabelo e o cabelo da minha filha estava muito ressecado, e esse produto resolveu isso, muito cheiroso, e o efeito teia, maravilhoso!</td>';
								echo '<td><span class="badge badge-success">Aprovado</span></td>';
							echo '</tr>';
							$x++;	
						}
					?>
                	
                </tr>
            </tbody>
        </table>

	</div>
</div>