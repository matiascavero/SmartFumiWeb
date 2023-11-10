<?php
	$destino = "smartfumigaciones@gmail.com";
	$nombre = $_POST["name"]; 
	$correo = $_POST["email"];
	$asunto = $_POST["subject"];
	$mensaje = $_POST["comments"];
	
	$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
	
	mail($destino, "WEB SMARTFUMIGACIONES", $contenido);
	
	if(mail($correo, $asunto, $mensaje, $nombre)) {
	
 	echo "<fieldset>";
	echo "<div id='success_page'>";
	echo "<h1>Correo electrónico enviado con éxito.</h1>";
	echo "<p>Gracias <strong>$name</strong>, su mensaje ha sido enviado a nosotros.</p>";
	echo "</div>";
	echo "</fieldset>";

	} else {

	echo '<h1>ERROR! POR FAVOR COMPLETE LOS CAMPOS</h1>';

}
	
?> 