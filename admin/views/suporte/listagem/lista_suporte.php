<div class="table-rep-plugin">
	<div class="table-responsive" data-pattern="priority-columns">
    
    	<table class="table table-striped table-centered table-hover">
        	<thead>
            	<tr class="no-border">
                    <th data-priority="1" width="20"><input type="checkbox"></th>
                    <th data-priority="3">Data Abertura</th>
                    <th data-priority="3">Título</th>
                    <th data-priority="3">Usuário</th>
                    <th data-priority="3">Status</th>
                </tr>
            </thead>
            <tbody >
            	
                	<?php
						$x=1;
						while($x<16){
							echo '<tr style="padding:0">';
								echo '<td><input type="checkbox"></td>';
								echo '<td>01/05/2018 10:00</td>';
								echo '<td>Erro na ativação do SSL</td>';
								echo '<td>Diogo Mastrangelo de Moura</td>';
								echo '<td><span class="badge badge-warning">Pendente</span></td>';
								
							echo '</tr>';
							$x++;	
						}
					?>
                	
                </tr>
            </tbody>
        </table>

	</div>
</div>