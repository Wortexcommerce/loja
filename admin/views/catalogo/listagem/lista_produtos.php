<div class="table-rep-plugin">
	<div class="table-responsive" data-pattern="priority-columns">
    	<form method="post" action="produtos/delete" class="listagem-popover" id="FormDeleteProdutos">
        
        <?php
			
			$query_pesquisa = "";
						
			//SE VEM BUSCA
			if(isset($busca)){
				$query_pesquisa = "WHERE (cad_produtos.sku_produto='$busca' OR cad_produtos.nome_produto LIKE '%$busca%')";
			}
						
						
			$sql = $db->select("SELECT cad_produtos.id_produto, cad_produtos.nome_produto, cad_produtos.sku_produto, cad_produtos.preco_normal_produto, cad_produtos.preco_promocional_produto, cad_produtos.quantidade_produto, 
			SUBSTRING_INDEX(GROUP_CONCAT( cad_fotos_produtos.imagem_foto ORDER BY cad_fotos_produtos.principal_foto DESC ),',',1) FOTO_PRODUTO
			FROM cad_produtos 
			LEFT JOIN cad_fotos_produtos ON cad_produtos.id_produto=cad_fotos_produtos.produto_foto
			$query_pesquisa
			GROUP BY cad_produtos.id_produto
			ORDER BY cad_produtos.sku_produto DESC");
		
		?>
        
        <?php if(isset($busca)) { ?>
            <div class="alert alert-info avisos-pesquisa">
                Encontramos <?php echo $db->rows($sql);  ?> resultados para sua busca.
                &nbsp;&nbsp;
                <a href="produtos"><button type="button" class="btn btn-info">Limpar pesquisa</button></a>
            </div>
        <?php } ?>
        
        
    	<table class="table table-striped table-centered table-hover">
        	<thead>
            	<tr >
                    <th data-priority="1"><input type="checkbox" class="select_all_checkbox" data-check="check-all"></th>
                    <th data-priority="3">Foto</th>
                    <th data-priority="3">Cód.</th>
                    <th data-priority="1">Produto</th>
                    <th data-priority="3">Preço</th>
                    <th data-priority="3">Promoção</th>
                    <th data-priority="6">Estoque</th>
                </tr>
            </thead>
            <tbody >
            
                	<?php
						
						if($db->rows($sql)){
							while($row = $db->expand($sql)){
								
								//NENHUMA FOTO ENCONTRADA
								if(empty($row['FOTO_PRODUTO'])){
									$row['FOTO_PRODUTO'] = 'vazio.jpg';
								}
								
								echo '<tr>';
									echo '<td><input type="checkbox" class="selecionavel" data-check="check-single" value="'.$row['id_produto'].'" name="id_produto[]"></td>';
									echo '<td style="padding:0">';
										echo '<div class="img-admin">';
											echo '<a href="'.ADMIN_WORTEX.'produtos/edit/'.$row['id_produto'].'">';
											echo '<img src="'.SITE_WORTEX.PASTA_UPLOAD_IMAGENS_THUMBS.$row['FOTO_PRODUTO'].'">';
											echo '</a>';
										echo '</div>';
									echo '</td>';
									
									echo '<td>';
										echo '<a href="'.ADMIN_WORTEX.'produtos/edit/'.$row['id_produto'].'">';
											echo $row['sku_produto'];
										echo '</a>';	
									echo '</td>';
									
									echo '<td>';
										echo '<a href="'.ADMIN_WORTEX.'produtos/edit/'.$row['id_produto'].'">';
											echo $row['nome_produto'];
										echo '</a>';	
									echo '</td>';
									
									
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
                	
               
            </tbody>
        </table>
		</form>
	</div>
</div>