<?php



/* ------ captura de los campos ------ 
LO QUE VA DESPUÉS EL SIGNO $ ES EL NOMBRE DE LA VARIABLE.
LO QUE VA ENTRE CORCHETES DEBE COINCIDIR CON EL NAME DEL INPUT QUE HICIMOS EN EL FORMULARIO.
*/

//Destinatario (Mi mail)
$destinatario = "consultas@estudiobia.com.ar";



// ** CAMPOS QUE COMPLETAMOS EN EL FORMULARIO **

//Nombre y Apellido
$nombre = $_POST['nombre'];
//Convertimos los caracteres especiales en caracteres adecuados (Ej: Acentos)
$nombre = utf8_decode($nombre); 

//Teléfono
$telefono = $_POST['telefono'];

//Mail
$email = $_POST['email'];

//Asunto
$asunto = $_POST['asunto'];
//Convertimos los caracteres especiales en caracteres adecuados (Ej: Acentos)
$asunto = utf8_decode($asunto); 

//Mensaje
$consulta = $_POST['message'];
//Convertimos los caracteres especiales en caracteres adecuados (Ej: Acentos)
$consulta = utf8_decode($consulta); 



//Cabecera
$cabecera = "From: $nombre <$email>\nReply-To:$email\nContent-Type: text/html; charset=iso-8859-1\n";


// cuerpo del email
$mensaje="
<strong>Nombre y Apellido:</strong> $nombre <br/>
<br />
<strong>Tel&eacute;fono:</strong> $telefono  <br/>
<br/>
<strong>E-Mail:</strong> $email <br/>
<br />
<strong>Mensaje:</strong> <br/>
$consulta <br/>

";

/******* VALIDACIONES SOBRE LOS CAMPOS ******/

/*
//Nombre
if (empty($nombre)) {
	
	$errores['nombre'] = 'El campo Nombre es obligatorio.';
	require "index.php";
	exit;
}


//Teléfono
if (empty(telefono)) {
	
	$errores['telefono'] = 'El campo Tel&eacute;fono es obligatorio.';
	require "index.php";
	exit;
}



//Email
if (empty($email)){ 
		
	$errores['email']  = 'El campo Teléfono es obligatorio.';
	require "index.php";
	exit;

}

if(!filter_var($email,FILTER_VALIDATE_EMAIL )){ 
	$errores['email']  = "El Email no es valido";
	require "index.php";
	exit;
}


if (empty($mensaje)){ 
	
	$errores['message']  = 'El campo Mensaje es obligatorio.';
	require "index.php";	
	exit;
}

	
if (empty($mensaje)){ 
	
	$errores['message']  = 'El campo Mensaje es obligatorio.';
	require "index.php";	
	exit;
}
*/




// envío del email
// Se compone de lo siguiente:
/*

1) Destinatario
2) luego de la "," viene el Asunto
3) "From" es el Remitente
4) el "nReply-to" es el "Responder a..."
*/
//mail("info@daletdesign.com.ar", $asunto, $mensaje, "From: $nombre <$mail>\nReply-To:$mail\nContent-Type: text/html; charset=iso-8859-1\n");
//

         /*include '../index.html';Incluyo la página principal*/
		if (mail($destinatario, $asunto, $mensaje, $cabecera)) { 
		 echo "Success";
		}

	    else{
	    
	     echo "Error";

	    }

?>




