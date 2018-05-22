<div class="table-rep-plugin">
	<div class="table-responsive" data-pattern="priority-columns">
    
    	<table class="table table-striped table-centered table-hover">
        	<thead>
            	<tr >
                    <th data-priority="1"><input type="checkbox"></th>
                    <th data-priority="3">Foto</th>
                    <th data-priority="3">CÓD.</th>
                    <th data-priority="1">Produto</th>
                    <th data-priority="3">Preço</th>
                    <th data-priority="3">Promoção</th>
                    <th data-priority="6">Estoque</th>
                </tr>
            </thead>
            <tbody >
            	
                	<?php
						
						if(isset($busca)){
							$sql = $db->select("SELECT ");
						} else {
							$sql = $db->select("SELECT nome_produto, sku_produto, preco_normal_produto, preco_promocional_produto, quantidade_produto FROM cad_produtos ORDER BY sku_produto DESC");
						}	
						
					
						if($db->rows($sql)){
							while($row = $db->expand($sql)){
								echo '<tr>';
									echo '<td><input type="checkbox"></td>';
									echo '<td style="padding:0">';
										echo '<div class="img-admin">';
											echo '<img src="'.SITE_WORTEX.'uploads/images/produtos/produto.jpg">';
										echo '</div>';
									echo '</td>';
									echo '<td>'.$row['sku_produto'].'</td>';
									echo '<td>'.$row['nome_produto'].'</td>';
									
									//PREÇO NORMAL
									echo '<td>';
										if($row['preco_promocional_produto']!='0.00'){
											echo '<span class="txt-riscado">'; 	
												echo 'R$ '.valores($row['preco_normal_produto']);
											echo '</span>';
										} else {
											echo 'R$ '.valores($row['preco_normal_produto']);
										}
									echo '</td>';
									
									//PREÇO PROMOCIONAL
									echo '<td>';
										if($row['preco_promocional_produto']!='0.00'){
											echo 'R$ '.valores($row['preco_promocional_produto']);
										}
									echo '</td>';
									
									//QUANTIDADE
									echo '<td>'.$row['quantidade_produto'].'</td>';
								echo '</tr>';
								
							}
						} else {
							echo '<tr>';
								echo '<td colspan="20" align="center">Nenhum ítem encontrado.</td>';
							echo '</tr>';
						}
					?>
                	
                </tr>
            </tbody>
        </table>

	</div>
</div>