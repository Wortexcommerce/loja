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
						
						if(isset($busca)){
							$sql = $db->select("SELECT ");
						} else {
							$sql = $db->select("SELECT id_usuario, nome_usuario, sobrenome_usuario, email_usuario, tipo_usuario FROM cad_usuarios ORDER BY id_usuario DESC");
						}	
            	
                	
						

						if($db->rows($sql)){
						while($row = $db->expand($sql)){
						

						

									 
							echo '<tr>';
								echo '<td>'.$row['nome_usuario'].'</td>';
								echo '<td>'.$row['sobrenome_usuario'].'</td>';
								echo '<td>'.$row['email_usuario'].'</td>';
								echo '<td>';
										if ($row['tipo_usuario'] == 1) {
											echo "Administrador";
										}else{
											echo "Vendedor";
										};
								echo'</td>';
								echo '<td class="text-right"> 
										<a href="'.ADMIN_WORTEX.'usuarios/edit/'.$row['id_usuario'].'"> <span class="fa fa-edit fa-fw"></span></a> 
										<a href=""> <span class="fa fa-trash-o fa-fw"></span></a>
									</td>';
							echo '</tr>';
							
						}

					}
					?>
                	
                </tr>
            </tbody>
        </table>

	</div>
</div>
