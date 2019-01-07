<div class="table-rep-plugin">
	<div class="table-responsive" data-pattern="priority-columns">
    
    	<table class="table table-striped table-centered table-hover">
        	<thead>
            	<tr class="no-border">
                    <th data-priority="1" width="20"><input type="checkbox"></th>
                    <th data-priority="3">Cupom</th>
                    <th data-priority="3">QTD Usada</th>
                    <th data-priority="3">Data Criação</th>
                    <th data-priority="3">Data Expiração</th>
                    <th data-priority="3">Status</th>
                </tr>
            </thead>
           <tbody >
            	
                	<?php
						$x=1;
						while($x<16){
							echo '<tr>';
								echo '<td><input type="checkbox"></td>';
								echo '<td>Frete Grátis</td>';
								echo '<td>50/1000</td>';
								echo '<td>01/05/2018 20:00</td>';
								echo '<td>----------</td>';
								echo '<td><span class="badge badge-success">Válido</span></td>';
							echo '</tr>';
							$x++;	
						}
					?>
                	
                </tr>
            </tbody>
        </table>

	</div>
</div>