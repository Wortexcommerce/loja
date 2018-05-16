<div class="table-rep-plugin">
	<div class="table-responsive" data-pattern="priority-columns">
    
    	<table class="table table-striped table-centered table-hover">
        	<thead>
            	<tr >
                    <th data-priority="3">Nome</th>
                    <th data-priority="1">Sobrenome</th>
                    <th data-priority="3">Email</th>
                    <th data-priority="3">Acesso</th>
                    
                </tr>
            </thead>
            <tbody >
            	
                	<?php
						$x=1;
						while($x<16){
							echo '<tr>';
								echo '<td>Matheus</td>';
								echo '<td>Foganholi</td>';
								echo '<td>matheusfoganholi@bravus.com.br</td>';
								echo '<td>vendedor</td>';
								echo '<td> 
										<a href=""> <span class="fa fa-edit fa-fw"></span></a> 
										<a href=""> <span class="fa fa-trash-o fa-fw"></span></a>
									</td>';
							echo '</tr>';
							$x++;	
						}
					?>
                	
                </tr>
            </tbody>
        </table>

	</div>
</div>
