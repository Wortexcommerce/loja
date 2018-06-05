// JavaScript Document

$(function  () {
  $("ol.sorter").sortable();

//Mascara de dinheiro
$('.mascara-dinheiro').maskMoney();


	//DELETA FOTOS DE PRODUTOS//
	$(".delete-foto-produto").click(function () {		  
		var id_foto = $(this).attr('data-id'); 
		$("#box-miniatura-foto-produto"+id_foto).hide();
			 
    });



});





