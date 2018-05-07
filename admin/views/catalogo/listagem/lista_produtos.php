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
						$x=1;
						while($x<16){
							echo '<tr>';
								echo '<td><input type="checkbox"></td>';
								echo '<td style="padding:0">';
									echo '<div class="img-admin">';
										echo '<img src="'.SITE_WORTEX.'uploads/images/produtos/produto.jpg">';
									echo '</div>';
								echo '</td>';
								echo '<td>00'.$x.'</td>';
								echo '<td>Escova Progressiva Select One Sem Formol 1 litro - Prohall Cosmétic</td>';
								echo '<td><span class="txt-riscado">R$ 199,99</span></td>';
								echo '<td>R$ 99,99</td>';
								echo '<td>999</td>';
							echo '</tr>';
							$x++;	
						}
					?>
                	
                </tr>
            </tbody>
        </table>

	</div>
</div>