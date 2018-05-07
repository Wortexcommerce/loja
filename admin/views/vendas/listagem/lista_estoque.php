<div class="table-rep-plugin">
	<div class="table-responsive" data-pattern="priority-columns">
    
    	<table class="table table-striped table-centered table-hover">
        	<thead>
            	<tr class="no-border">
                    <th>CÓD.</th>
                    <th>Produto</th>
                    <th>Estoque</th>
                </tr>
            </thead>
            <tbody >
            	
                	<?php
						$x=1;
						while($x<16){
							echo '<tr style="padding:0">';
								echo '<td>00'.$x.'</td>';
								echo '<td>Escova Progressiva Select One Sem Formol 1 litro - Prohall Cosmétic</td>';
								echo '<td>';
									echo '
									<form class="form-inline" action="">
										<div class="input-group input-group-sm">
											<div class="input-group-btn">
												<button class="btn btn-danger" type="submit">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</button>
											</div>
											<input type="text" class="form-control input-ajuste input-sm" value="10" style="width:50px">
											<div class="input-group-btn">
												<button class="btn btn-success" type="submit">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</form>
									';
								echo '</td>';
								 
							echo '</tr>';
							$x++;	
						}
					?>
                	
                </tr>
            </tbody>
        </table>

	</div>
</div>