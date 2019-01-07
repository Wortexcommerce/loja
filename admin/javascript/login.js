// JavaScript Document

$(document).ready(function(){
	
	//ESQUECI A SENHA - CLICK LINK
	$(".esqueci-senha").click(function () {
		  
		  var tipo = $(this).attr('data-type');
		 
		  if(tipo=='recuperar'){	  
			  $("#recolhe-esqueci-senha01").slideUp(300);	
			  $("#recolhe-esqueci-senha02").slideUp(300);	
			  $("#email-login-admin").focus();
			  $("#button-login-adm").html('REDEFINIR SENHA');
			  $(".retorno-senha").slideDown(300)
		  } else {
			  $("#recolhe-esqueci-senha01").slideDown(300);	
			  $("#recolhe-esqueci-senha02").slideDown(300);	
			  $("#email-login-admin").focus();
			  $("#button-login-adm").html('LOGIN');
			   $(".retorno-senha").slideUp(300)
		  }
    });
	
	
	
	$("#FormLogin").submit(function(){	
		
		$(".error-login").slideUp(200);	
		
		$("#button-login-adm").html('<i class="fa fa-spin fa-circle-o-notch"></i>');
		
		var formdata = $(this).serialize();
		
		
		$.ajax({type: "POST", url:$(this).attr('action'), data:formdata, success: function(msg){
		
			$("#button-login-adm").html('LOGIN');
			
			if(msg==1){
				location.reload();		
			} else {
				$(".error-login").slideDown(200);
			}
				
		}
		});
		
		return false;
		
	});
	
	
});