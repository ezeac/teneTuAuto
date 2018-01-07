<html>
<?php
error_reporting(0);

$modelo=$_POST["modelo"];
$entrega=$_POST["entrega"];
$modalidad=$_POST["modalidad"];
$cuotas=$_POST["cuotas"];
$tarjeta=$_POST["tarjeta"];
$cajaAhorro=$_POST["cajaAhorro"];
$nombre=$_POST["nombre"];
$telefono=$_POST["telefono"];
$email=$_POST["email"];

$text = "";

switch ($entrega) {
    case "a":
        $entrega = "Mayor a $90.000";
        break;
    case "b":
        $entrega = "Entre $60.000 y $90.000";
        break;
    case "c":
        $entrega = "Entre $45.000 y $60.000";
        break;
	case "d":
        $entrega = "Entre $25.000 y $45.000";
        break;
	case "e":
        $entrega = "Menor o igual a $25.000";
		break;
}

if ($tarjeta == ""){
$tarjeta = "No tiene";
}
if ($email == ""){
$email = "No deja";
}

$text1 .= "Nombre: " .strtoupper($nombre). "\n Teléfono: " .$telefono. "\n Email: " .$email;
$text1 .= "\n Modelo elegido: " .$modelo. "\n Entrega posible: " .$entrega. "\n Modalidad: " .$modalidad. "\n Cuotas: " .$cuotas. "\n Tarjeta disponible: " .strtoupper($tarjeta). "\n Caja ahorro o cuenta sueldo: " .$cajaAhorro;


// mail("fvergara@grupoantun.com.ar", "Contacto desde TUFIATCERCA presupuestOnline", $text1);
mail("gezeac@gmail.com", "Contacto desde TUAUTOAHORA presupuestOnline", $text1);


?>

<!-- <iframe style="display:none" src="http://www.diezweb.com.ar/wp-content/themes/diezweb/cargarEnBBDD.php?nombre=<?php echo $nombre; ?>&email=<?php echo $email; ?>&tel=<?php echo $tel; ?>&mensaje=<?php echo $mensaje; ?>&sitio=tenetuauto.com"></iframe> -->

"Gracias por su mensaje! Ya casi terminamos. Nos comunicaremos con usted a la brevedad para informarle su presupuesto."
</html>