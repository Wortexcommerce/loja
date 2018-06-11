<?php
	if(isset($_GET['reload'])){
		require("../../../config.php");	
	}

	$sql = $db-> select("SELECT id_foto, imagem_foto, principal_foto FROM cad_fotos_produtos WHERE produto_foto='$id' ORDER BY id_foto DESC");
	if($db->rows($sql)){
		
		echo '<div class="col-md-12">';
		echo '<div class="row">';
		
		while($row = $db->expand($sql)){
			
			//FOTO PRINCIPAL//
			$principal = ($row['principal_foto']==1) ? 'checked="checked"' : ''; 
			//if($row['principal_foto']==1){$principal = 'checked="checked"';}
			
			echo '<div class="miniatura-upload" id="box-miniatura-foto-produto'.$row['id_foto'].'">';
					
					echo '<div class="col-md-12 text-center miniatura-upload-foto">';
						echo '<img src="'.SITE_WORTEX.PASTA_UPLOAD_IMAGENS_GRANDE.$row['imagem_foto'].'" class="img-responsive img-miniatura-upload-foto-produto">';
					echo '</div>';
					
					echo '<div class="row">';
					
						echo '<div class="col-md-9 text-left">';
							echo '<div class="radio radio-success">';
                            	echo '<input '.$principal.' type="radio" value="'.$row['id_foto'].'" name="foto_principal">';
								echo '<label>Principal</label>';
                            echo '</div>';										
						echo '</div>';
						
						echo '<div class="col-md-3 text-right">';
							echo '<a href="javascript:void(0);" class="delete-foto-produto" data-id="'.$row['id_foto'].'">';
                            	echo '<i class="fa fa-trash-o icon-danger" aria-hidden="true"></i>';	
                            echo '</a>';										
						echo '</div>';
					
					echo '</div>';
				
			echo '</div>';
		}
		
		echo '</div>';
		echo '</div>';
		
	}
?>

<script src="javascript/scripts.js"></script>