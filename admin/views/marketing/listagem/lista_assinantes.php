<div class="table-rep-plugin">
	<div class="table-responsive" data-pattern="priority-columns">
    
    	<table class="table table-striped table-centered table-hover">
        	<thead>
            	<tr class="no-border">
                    <th width="20"><input type="checkbox"></th>
                    <th>Data</th>
                    <th>Nome/Sobrenome</th>
                    <th>E-mail</th>
                </tr>
            </thead>
           <tbody >
            	
                	<?php
						$x=1;
						while($x<16){
							echo '<tr>';
								echo '<td><input type="checkbox"></td>';
								echo '<td>01/05/2018 20:00</td>';
								echo '<td>Diogo Mastrangelo</td>';
								echo '<td>diogomastrangelo@uol.com.br</td>';
							echo '</tr>';
							$x++;	
						}
					?>
                	
                </tr>
            </tbody>
        </table>

	</div>
</div>