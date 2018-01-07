<html>
<?php
error_reporting(0);

$text = "";
foreach ($_POST as $key => $value) {
	$text .= "<b>$key</b>: $value<br>";
	if ($key == "nombre") {
		$nombre = $value;
	}
	if ($key == "email") {
		$email = $value;
	}
	if ($key == "mensaje") {
		$mensaje = $value;
	}
	if ($key == "tel") {
		$tel = $value;
	}
}

$to = "gezeac@gmail.com";
$subject = "Contacto desde TUAUTOAHORA";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($to,$subject,$text,$headers);

?>

<!-- <iframe style="display:none" src="http://www.diezweb.com.ar/wp-content/themes/diezweb/cargarEnBBDD.php?nombre=<?php echo $nombre; ?>&email=<?php echo $email; ?>&tel=<?php echo $tel; ?>&mensaje=<?php echo $mensaje; ?>&sitio=tenetuauto.com"></iframe> -->

¡GRACIAS POR ESCRIBIRNOS!
En breve estaremos respondiendo tu consulta.

</html>
