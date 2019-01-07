<?php

	///CAMINHOS DO DOMINIO
	define("PATH", "http://".$_SERVER['HTTP_HOST']."/bravus/");	
	define("PATH_IMAGES", PATH.'imagens/produtos/'); //NÃO MECHER	
	define("REPOSITORY", "repository/"); //NÃO MECHER
	
	///META TAGS PADRÕES DO SITE
	define("TITULO_SITE", "Bravus Cosméticos");
	define("DESCRICAO_SITE", "Site especializado em produtos para barba masculina");	
	define("PALAVRAS_CHAVE", 'barba, bravus, cosmeticos, modeladora, barba aparada, corte, bravus cosméticos, bravus cosmeticos, bigode'); //NÃO MECHER	

	///CEP ORIGEM///
	define("CEP_ORIGEM", "18300385"); /// NAO COLOCAR PONTOS OU TRAÇOS
	
	///MERCADO PAGO///
	define("CLIENT_ID_MP", "8979255824272756");
	define("CLIENT_SECRET_MP", "X1mR5rcY6FXjT1PwRoR5t3sqJp034uyf");
	define("RETORNO_MP", PATH."meus_pedidos");
	define("NOTIFICACAO_MP", PATH."libs/mercad_pago/notificacao.php");
	
		
	///LOGIN GOOGLE///
	define("CLIENT_ID", "98690577218-dqbppl3upabnuvgrlpu8k71t7mgd104d.apps.googleusercontent.com");//NÃO MECHER
	define("CLIENT_SECRET", "J5pzIQSclM5rJ7idH6wRoZMD");//NÃO MECHER
	define("CLIENT_REDIRECT_URL", PATH."login/SDK/google/recebe_dados_user_google.php");//NÃO MECHER
	
	
	///LOGIN FACEBOOK///
	define("APP_ID", "369850733483559");//NÃO MECHER
	define("APP_SECRET", "1f955f3303f2ac9f9e31f8487372c6e7");//NÃO MECHER
	define("APP_REDIRECT_URL", PATH."login/SDK/facebook/recebe_dados_user_facebook.php");
	
	
	///DEFINIÇÕES///
	define("GERENCIA_ESTOQUE", "1"); 



$db = new DB();
foreach($_POST as $nome_campo => $valor){	
		$valor =$db->escape(addslashes($valor));			
		$comando = "$" . $nome_campo . '="' . $valor . '";';
		eval($comando);		
}

//Recebe as variaveis do GET - PERMITINDO APENAS NUMEROS
	foreach($_GET as $nome_campo => $valor){	
		$comando = "\$" . $nome_campo . "='" . $valor . "';";
		eval($comando);
	}



function contem_palavra($frase,$palavra){
	if(strpos("[".$frase."]", "$palavra")){
		$return =1;
    } else {
    	$return =0;
    }	
	
	return $return;
}

function limpa_cep($cep){
	$cep = str_replace('-','',$cep);
	$cep = str_replace('.','',$cep);
	$cep = str_replace(' ','',$cep);	
	return $cep;
}


function valores($valor){
	return number_format($valor,2,",",".")	;	
}

function preco_final_produto($preco,$quantidade){
	$valor = ($preco*$quantidade);
	return $valor;
}

function user_logado(){
	if(isset($_SESSION['loja_modelo_sis'])){		
		return 1;
	} else {
		return 0;
	}
}


function foto_produto($arquivo){
	if(!empty($arquivo)){
		$foto = $arquivo;
	} else {
		$foto = 'vazio.jpg';	
	}	
	
	return $foto;
}

function horarios($hora){
	return substr($hora,0,5);
}


function name_pagina($pagina){
	$pagina = str_replace('-',' ',$pagina);
	$pagina = str_replace('.html','',$pagina);
	return $pagina;
}


function aplica_desconto($val,$desconto){
	$desconto = (($val*$desconto)/100);
	$val = ($val-$desconto);
	return $val;	
}

function valor_desconto($val,$desconto){
	$desconto = (($val*$desconto)/100);
	return number_format($desconto,2,",",".");	
}

function aplica_parcelamento($preco,$parcelas){
	$final = ($preco/$parcelas);
	return number_format($final,2,",",".");	
}

function aplica_desconto_boleto($preco,$porcentagem){
	$desconto = (($preco*$porcentagem)/100);
	$val = ($preco-$desconto);
	return number_format($val,2,",",".");	
}

function data_mysql_para_user($y){
	if ($y != ''){
		$data_inverter = explode("-",$y);
		$x = $data_inverter[2].'/'. $data_inverter[1].'/'. $data_inverter[0];
		return $x;
	}else{
		return '';
}
}


function data_user_para_mysql($y){
	if ($y != ''){
		$data_inverter = explode("/",$y);
		$x = $data_inverter[2].'-'. $data_inverter[1].'-'. $data_inverter[0];
		return $x;
	}else{
		return '';
}
}



function envia_email($email,$mensagem){
				
	$mail = new PHPMailer;	
	$mail->SMTPDebug =0;                 	
	$mail->isSMTP();                    
	$mail->Host = 'srv74.prodns.com.br';  
	$mail->SMTPAuth = true;                             
	$mail->Username = 'site@serradefitas.com.br';
	$mail->Password = 'n.z}HiT4qxXR';                      
	$mail->SMTPSecure = 'tls';                         
	$mail->Port = 587;                                 
	
	$mail->setFrom('site@serradefitas.com.br', 'SITE SERRA FITAS');
	$mail->addAddress($email);     
	$mail->addReplyTo('serrafita@serrafita.com.br', 'SERRA FITAS');
	
	$mail->isHTML(true);                              
	
	$mail->Subject = 'CONTATO ENVIADO PELO SITE';
	$mail->Body    = $mensagem;
	
	if(!$mail->send()) {
			//echo 'Mailer Error: ' . $mail->ErrorInfo;
			return 0;
	} else {
			return 1;
	}
				
}

function normaliza($str){	
	$str = preg_replace('/[áàãâä]/ui', 'a', $str);
    $str = preg_replace('/[éèêë]/ui', 'e', $str);
    $str = preg_replace('/[íìîï]/ui', 'i', $str);
    $str = preg_replace('/[óòõôö]/ui', 'o', $str);
    $str = preg_replace('/[úùûü]/ui', 'u', $str);
    $str = preg_replace('/[ç]/ui', 'c', $str);
    $str = preg_replace('/[,(),;:|!"#$%&=?~^><ªº-]/', '-', $str);
    $str = preg_replace('/[^a-z0-9]/i', '-', $str);
    $str = preg_replace('/_+/', '-', $str); // ideia do Bacco :)
	$str = strtolower($str);
		
	$string = $str.'.html';		

	return $string; //finaliza, gerando uma saída para a funcao
}
	
	
	
	function Mask($mask,$str){

    $str = str_replace(" ","",$str);

    for($i=0;$i<strlen($str);$i++){
        $mask[strpos($mask,"#")] = $str[$i];
    }

    echo $mask;

}
	
?>