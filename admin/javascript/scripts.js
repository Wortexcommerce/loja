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
	
	
	//EXIBE OPÇÕES AO MARCAR/DESMARCAR O CHECKBOX//
	$(".selecionavel, .select_all_checkbox").click(function(){
		
		var conteudo = $(this).attr('data-check');   		
		if(conteudo=='check-all'){
			$('.selecionavel').not(this).prop('checked', this.checked);		
		} 
		
		$(".select_all_checkbox").popover('hide')
		$(".selecionavel").popover('hide')
		var numberOfChecked = $('.selecionavel:checkbox:checked').length;		
			
			$(this).popover({
				container: '.listagem-popover',
				html: true,
				trigger: 'manual',
				template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
				content: function(){
					return '<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="action-text">'+$('.selecionavel:checkbox:checked').length+' itens selectionados</span><span class="caret"></span></a><div class="dropdown-menu"><a href="meus-dados" class="dropdown-item itens-lista-checkbox"><i class="fa fa-bars fa-fw"></i> <span>Adicionar a uma categoria</span></a><div class="espacador-lista-checkbox"></div><button type="submit" class="dropdown-item itens-lista-checkbox text-danger"><i class="fa fa-trash-o fa-fw"></i> Excluir</button></div>';	
				},
			})
			
		if(numberOfChecked>0){
			$(this).popover('show')			
		} else {			
			$(this).popover('hide')	
		}		
		
	});
	

	//ENVIA O FORMULARIO COM OS CHECKBOX
	$('#FormDeleteProdutos').submit(function() {
    	var continua = confirm("Deseja excluir este ítem?");
   	 	return continua;
	});

});





