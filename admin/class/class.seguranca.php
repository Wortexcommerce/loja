<?php

$db = new DB();
foreach($_POST as $nome_campo => $valor){	
	
	if(!is_array($valor)){
	
		$valor =$db->escape(addslashes($valor));			
		$comando = "$" . $nome_campo . '="' . $valor . '";';
		eval($comando);		
	
	} 
	
}

//Recebe as variaveis do GET - PERMITINDO APENAS NUMEROS
	foreach($_GET as $nome_campo => $valor){	
	    $valor =$db->escape(addslashes($valor));	
		$comando = "\$" . $nome_campo . "='" . $valor . "';";
		eval($comando);
	}



function valores($valor){
	return number_format($valor,2,",",".")	;	
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


function Nome_Arquivo_Upload($str){
	
 	$extensao = substr($str, -4);
 	if($extensao[0] == '.'){
 		$extensao = substr($extensao, -3);
 	}
	
	$str = preg_replace('/[áàãâä]/ui', 'a', $str);
    $str = preg_replace('/[éèêë]/ui', 'e', $str);
    $str = preg_replace('/[íìîï]/ui', 'i', $str);
    $str = preg_replace('/[óòõôö]/ui', 'o', $str);
    $str = preg_replace('/[úùûü]/ui', 'u', $str);
    $str = preg_replace('/[ç]/ui', 'c', $str);
    $str = preg_replace('/[,(),;:|!"#$%&=?~^><ªº-]/', '_', $str);
    $str = preg_replace('/ /', '_', $str); 
	$str = ucfirst($str);

	return $str; 
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
    $str = preg_replace('/_+/', '-', $str); 
	$str = strtolower($str);
		
	$string = $str.'.html';		

	return $string; 
}
	
	
?>