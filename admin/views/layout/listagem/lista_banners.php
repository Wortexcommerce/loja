<div class="table-rep-plugin">
	<div class="table-responsive" data-pattern="priority-columns">
    
    	<table class="table table-striped table-centered table-hover">
        	<thead>
            	<tr class="no-border">
                    <th width="20"><input type="checkbox"></th>
                    <th width="120">Imagem</th>
                    <th>Título</th>
                    <th>Link</th>
                    <th>Expira em</th> 
                </tr>
            </thead>
            <tbody >
            	
                	<?php
						$x=1;
						while($x<16){
							echo '<tr style="padding:0">';
								echo '<td><input type="checkbox"></td>';
								echo '<td style="padding:0">';
									echo '<div class="img-banner-admin">';
										echo '<img src="'.SITE_WORTEX.'uploads/images/banners/banner.jpg">';
									echo '</div>';
								echo '</td>';
								echo '<td>Banner 00'.$x.'</td>';
								echo '<td>http://www.globo.com</td>';
								echo '<td>30/12/2018</td>';
								
							echo '</tr>';
							$x++;	
						}
					?>
                	
                </tr>
            </tbody>
        </table>

	</div>
</div>