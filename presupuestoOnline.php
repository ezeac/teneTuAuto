<!-- 
Template Name: Presupuesto Online 
-->
<?php
//VARIABLES AUTOS PRECIOS
//nacionales
$precioPalio = "$2450"; $precioPalio7030 = "$2099";
$precioSiena = "$2790"; $precioSiena7030 = "$2299";
$precioNuevoPalio = "$2790"; $precioNuevoPalio7030 = "$2299";

//importados
$precioGrandSiena = "$3150";
$precioPunto = "$3299";
$precioStrada = "$3670";
$precioIdea = "$2.651";
$precioMobi = "$2070"; $precioMobi7030 = "$1599";
$precioPalioWeekendAdventure = "$3699";

//comerciales
$precioFiorino = "$2599";
$precioQubo = "$2.651";
$precioUnoCargo = "$1.794";
$precioDucato = "$5350";

//OTROS
$linkBotonPresupuestoOnline = "presupuestoOnline.php#infoGeneral1";

?>

<html>
<head>
	<?php get_header(); ?>
</head>
<body>
	<?php wp_head() ?>
	<style>
		header .button-burger,header nav {
			display: none;
		}
	</style>

	<div class="central2 container-fluid no-padding">
		<div class="cont-presupuesto-online">
			<div class="presupuestoDiv" id="infoGeneral1">PRESUPUESTO ONLINE</div>
			<div class="presupuestoDiv" id="infoGeneral2">

				<form id="form2" action="javascript:0">
					<label>Elegí tu próximo modelo:</label>
					<select name="modelo" id="modelo">
						<option value="">- Seleccione un modelo -</option>
						<optgroup label="Nacionales">
							<option value="palio">- Palio -</option>
							<option value="siena">- Siena -</option>
							<option value="nuevoPalio">- Nuevo Palio -</option>
						</optgroup>
						
						<optgroup label="Importados">
							<option value="mobi">- Mobi -</option>
							<option value="grandSiena">- Grand Siena -</option>
							<option value="punto">- Punto -</option>
							<option value="strada">- Strada -</option>
							<option value="palioWeekendAdventure">- Palio Wk. Adventure -</option>
						</optgroup>

						<optgroup label="Comerciales">
							<option value="fiorino">- Fiorino -</option>
							<option value="ducato">- Ducato -</option>
						</optgroup>
					</select>
					<br><br>

					<label>Valor de vehículo usado o ahorro para entregar:</label>
					<select name="entrega" id="entrega">
						<option value="">- Seleccione un monto -</option>

						<option value="a">- Mayor a $90.000 -</option>
						<option value="b">- Entre $60.000 y $90.000 -</option>
						<option value="c">- Entre $45.000 y $60.000 -</option>
						<option value="d">- Entre $25.000 y $45.000 -</option>
						<option value="e">- Menor o igual a $25.000 -</option>
					</select>
					<br><br>

					<label>Elegí la modalidad:</label>
					<select name="modalidad" id="modalidad">
						<option value=''>- Por favor, seleccione un modelo y la entrega -</option>
					</select>
					<br><br>

					<label>Elegí tu cuota mensual:</label>
					<select name="cuotas" id="cuotas">
						<option value=''>- Por favor, seleccione un modelo y la entrega -</option>
					</select>
					<br><br>

					<div class="formPromociones">Promociones vigentes</div>
					<div class="inputCajaAhorro">¿Sos cliente de alguna tarjeta de crédito? ¿Cuál?</div>
					<input type="text" name="tarjeta" id="tarjeta"></input><br><br>
					<div class="inputCajaAhorro">¿Tenés caja de ahorro o cuenta sueldo?</div>
					<select name="cajaAhorro" id="cajaAhorro">
						<option value=''>- Seleccione una opción -</option>
						<option value='si'>- Si -</option>
						<option value='no'>- No -</option>
					</select><br><br>
					<!-- <button type="button" id="botonPromociones">Click Para Ver Promociones Vigentes</button><br> -->
					<div id="divCajaAhorro"></div><br>
					<label class="titulo-obtene-descuentos">Obtené ahora tus descuentos: </label>
					<label style="margin: 0px; padding: 0px; border: 0px;">Nombre: </label>
					<input style="margin: 0px; height: 30px" type="text" name="nombre" required></input><br><br>
					<label style="margin: 0px; padding: 0px; border: 0px;">Teléfono: </label>
					<input style="margin: 0px; height: 30px" type="text" name="telefono" pattern=".{6,}" title="Ingrese un teléfono válido" required></input><br><br>
					<label style="margin: 0px; padding: 0px; border: 0px;">E-mail: </label>
					<input style="margin: 0px; height: 30px" type="mail" name="email"></input><br><br>
					<input class="botonEnviarForm2" name="enviar" type="submit" value="Ver Presupuesto Online"><br>
				</form>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>

<div id="modalContacto"></div>

</body>
</html>

<script>
	$("#modelo").on("change", buscarModalidad);
	$("#entrega").on("change", buscarModalidad);

	$("#entrega").on("change", buscarCuotas);

	$("#botonPromociones").on("click", cambiarPromociones);


	function buscarModalidad(){

		$modelo = $("#modelo").val();
		$entrega = $("#entrega").val();

		if($entrega == "" || $modelo == ""){
			$("#modalidad").html("<option value=''>- primero seleccione un modelo y la entrega -</option>");
			$("#cuotas").html("<option value=''>- Por favor, seleccione un modelo y la entrega -</option>");
		}
		else if($modelo == "palio" || $modelo == "siena" || $modelo == "nuevoPalio" || $modelo == "fiorino"){
			if ($entrega == "a" || $entrega == "b" || $entrega == "c"){
				$("#modalidad").html("<option value='preAdjudicacionPactada'>- Pre adjudicación pactada -</option> <option value='ahorro'>- Ahorro -</option>");
			} else if ($entrega == "d"){
				$("#modalidad").html("<option value='minimaEntrega'>- Mínima entrega -</option> <option value='ahorro'>- Ahorro -</option>");
			} else {
				$("#modalidad").html("<option value='preAdjudicacionPactada'>- Pre adjudicación pactada -</option> <option value='minimaEntrega'>- Mínima entrega -</option> <option value='ahorro'>- Ahorro -</option>");
			}
		} else {
			if ($entrega == "a" || $entrega == "b"){
				$("#modalidad").html("<option value='preAdjudicacionPactada'>- Pre adjudicación pactada -</option> <option value='ahorro'>- Ahorro -</option>");
			} else if ($entrega == "c" || $entrega == "d"){
				$("#modalidad").html("<option value='minimaEntrega'>- Mínima entrega -</option> <option value='ahorro'>- Ahorro -</option>");
			} else {
				$("#modalidad").html("<option value='preAdjudicacionPactada'>- Pre adjudicación pactada -</option> <option value='minimaEntrega'>- Mínima entrega -</option> <option value='ahorro'>- Ahorro -</option>");
			}
		}
	}



	function buscarCuotas(){

		$modelo = $("#modelo").val();
		$entrega = $("#entrega").val();
		$precio = "-";

	//VARIABLES AUTOS PRECIOS
	//nacionales
	$palio = "<?php echo $precioPalio; ?>"; $palio7030 = "<?php echo $precioPalio7030; ?>";
	$siena = "<?php echo $precioSiena; ?>"; $siena7030 = "<?php echo $precioSiena7030; ?>";
	$nuevoPalio = "<?php echo $precioNuevoPalio; ?>"; $nuevoPalio7030 = "<?php echo $precioNuevoPalio7030; ?>";	

	//importados
	$grandSiena = "<?php echo $precioGrandSiena; ?>";
	$punto = "<?php echo $precioPunto; ?>";
	$strada = "<?php echo $precioStrada; ?>";
	$idea = "<?php echo $precioIdea; ?>";
	$mobi = "<?php echo $precioMobi; ?>"; $mobi7030 = "<?php echo $precioMobi7030; ?>";
	$palioWeekendAdventure = "<?php echo $precioPalioWeekendAdventure; ?>";	

	//comerciales
	$fiorino = "<?php echo $precioFiorino; ?>";
	$qubo = "<?php echo $precioQubo; ?>";
	$unoCargo = "<?php echo $precioUnoCargo; ?>";
	$ducato = "<?php echo $precioDucato; ?>";

	switch($modelo) {
		case "palio":
		$precio = $palio;
		$precio70 = $palio7030;
		break;
		case "siena":
		$precio = $siena;
		$precio70 = $siena7030;
		break;
		case "nuevoPalio":
		$precio = $nuevoPalio;
		$precio70 = $nuevoPalio7030;
		break;
		case "grandSiena":
		$precio = $grandSiena;
		break;
		case "punto":
		$precio = $punto;
		break;
		case "strada":
		$precio = $strada;
		break;
		case "mobi":
		$precio = $mobi;
		$precio70 = $mobi7030;
		break;
		case "palioWeekendAdventure":
		$precio = $palioWeekendAdventure;
		break;
		case "fiorino":
		$precio = $fiorino;
		break;
		case "unoCargo":
		$precio = $unoCargo;
		break;
		case "ducato":
		$precio = $ducato;
		break;
		default:
		alert("Llego al default");
	}

	if($entrega == "" || $modelo == ""){
		$("#modalidad").html("<option value=''>- primero seleccione un modelo y la entrega -</option>");
		$("#cuotas").html("<option value=''>- Por favor, seleccione un modelo y la entrega -</option>");
	} else if ($modelo == "palio" || $modelo == "siena" || $modelo == "nuevoPalio"){
		if ($entrega == "a" || $entrega == "b"){
			$("#cuotas").html("<option value='100'>- "+$precio+" -</option> <option value='7030'>- "+$precio70+" -</option>");
		} else {
			$("#cuotas").html("<option value='100'>- "+$precio+" -</option>");
		}
	} else {
		$("#cuotas").html("<option value='100'>- "+$precio+"-</option>");
	}
}


function cambiarPromociones(){
	
	$cajaAhorro = $("#cajaAhorro").val();
	
	if($cajaAhorro == "no"){
		$("#divCajaAhorro").html("¡14% de descuento por compra directa de fábrica!");
		alert("¡14% de descuento por compra directa de fábrica!");
	}else if ($cajaAhorro == "si"){
		$("#divCajaAhorro").html("¡14% de descuento y primer cuota de regalo!");
		alert("¡14% de descuento y primer cuota de regalo!");
	} else {
		$("#divCajaAhorro").html("Seleccione una opción para ver promociones vigentes.");
	}
	
}

//CONSULTA AJAX
	$("#form2").submit(function(e){
		e.stopPropagation();
		e.preventDefault();
		$.ajax({
			url: "<?php echo get_stylesheet_directory_uri() ?>/complementos/enviarPresupuesto.php", 
			data: $(this).serialize(),
			method: "POST",
		    error: function(xhr){
		        console.log("Ocurrió un error: " + xhr.status + " " + xhr.statusText);
		    },
			success: function(result){
		        $("#modalContacto").html(result);
		        $("#modalContacto").fadeIn();
		        setTimeout(function(){
		        	$("#modalContacto").fadeOut();
		        },5000);
		    },
		    dataType: "text"
		});
	});
</script>
