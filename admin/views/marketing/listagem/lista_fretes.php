<div class="table-rep-plugin">
	<div class="table-responsive" data-pattern="priority-columns">
    
    	<table class="table table-striped table-centered table-hover">
        	<thead>
            	<tr class="no-border">
                    <th>Nome da Regra</th>
                    <th>Status</th>
                </tr>
            </thead>
           <tbody >
            	
                	<?php
						$x=1;
						while($x<16){
							echo '<tr>';
								echo '<td>
									<i class="fa fa-truck fa-fw" aria-hidden="true"></i>
									Frete Grátis acima de R$199,99
								</td>';
								echo '<td><span class="badge badge-success">Ativo</span></td>';
							echo '</tr>';
							$x++;	
						}
					?>
                	
                </tr>
            </tbody>
        </table>

	</div>
</div>