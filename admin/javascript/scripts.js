// JavaScript Document

$(document).ready(function(){
	
//$("ol.sorter").sortable();

//Mascara de dinheiro
$('.mascara-dinheiro').maskMoney();


	//DELETA FOTOS DE PRODUTOS//
	$(".delete-foto-produto").click(function () {		  
		var id_foto = $(this).attr('data-id'); 
		$("#box-miniatura-foto-produto"+id_foto).hide();
		$.post('controlers/catalogo/apaga_foto_produto.php',{id_foto:id_foto});			 
    });
	


});





