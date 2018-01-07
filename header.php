<html>
<title></title>
 <meta name="title" content="">
 <meta name="DC.Title" content="">
 <meta http-equiv="title" content="">
 <meta name="DC.Creator" content="www.diezweb.com.ar">
 <meta name="keywords" content="">
 <meta http-equiv="keywords" content="">
 <meta name="description" content="">
 <meta http-equiv="description" content="">
 <meta http-equiv="DC.Description" content="">
 <meta name="author" content="www.diezweb.com.ar">
 <meta name="DC.Creator" content="www.diezweb.com.ar">
 <meta name="vw96.objectype" content="Document">
 <meta name="resource-type" content="Document">
 <meta http-equiv="Content-Type" content="UTF-8">
 <meta name="distribution" content="all">
 <meta name="robots" content="all">
 <meta name="revisit" content="30 days">
 <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

<?php
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>
<!--Para adaptar a móviles (usar google chrome en ventana incógnito y google nexus4 en emulador para editar css. agregar css responsive al final 
@media screen and (min-width:1px) and (max-width:1000px) {
).-->

<link rel="STYLESHEET" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
<link rel="STYLESHEET" type="text/css" href="<?php bloginfo('template_url'); ?>/complementos/tipografias.css" />
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.0.min.js"></script>

<!--ICONOS GOOGLE-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- INCLUDE SCROLLMAGIC + GSAP -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
<!-- FIN INCLUDE -->
<!-- lightbox -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>

<!-- ------------------------ ANIMACIONES SCROLLMAGIC ------------------------ -->
<script>
$(document).ready(function(){

	//INICIALIZAR CONTROLLER
	var scrollMagicController = new ScrollMagic.Controller();

	$(".parallaxBackground").each(function(index,element){
		// CREANDO ANIMACIÓN
		var parallaxHome3 = new TweenMax.fromTo(element, 0.5, {height:"20%"}, {height:"70%"});
		//ASIGNANDO TRIGGERS
		var sceneparallaxHome3 = new ScrollMagic.Scene({triggerElement: element, offset: -350, duration: 800}).setTween(parallaxHome3).addTo(scrollMagicController);
	})

	$(".fadeInNormal").each(function(index,element){
		// CREANDO ANIMACIÓN
		var fadeInNormal = new TweenMax.fromTo(element, 1, {opacity: 0}, {opacity: 1, ease: Power2.easeIn});
		//ASIGNANDO TRIGGERS
		var scenefadeInNormal = new ScrollMagic.Scene({triggerElement: element, offset: -250}).setTween(fadeInNormal).addTo(scrollMagicController);
	})

	$(".fadeInDelayed").each(function(index,element){
		// CREANDO ANIMACIÓN
		var fadeInNormal = new TweenMax.fromTo(element, 1, {opacity: 0}, {opacity: 1, ease: Power2.easeIn, delay: 0.5});
		//ASIGNANDO TRIGGERS
		var scenefadeInNormal = new ScrollMagic.Scene({triggerElement: element, offset: -250}).setTween(fadeInNormal).addTo(scrollMagicController);
	})
    
	var i = 0;
	var offsetAnterior = 0;
	$(".home4 .cont2").each(function(index,element){
	    var offset = $(element).offset().top;
	    if (offsetAnterior == offset) {
	        i += 0.2;
	    } else {
	        i = 0;
	    }
	    offsetAnterior = $(element).offset().top;
	    // CREANDO ANIMACIÓN
	    var nombreAnimacion = new TweenMax.fromTo(element, 0.5, {opacity:0, y:50},{y: 0, opacity: 1, delay: i});
	    //ASIGNANDO TRIGGERS
	    var scenenombreAnimacion = new ScrollMagic.Scene({triggerElement: element, offset: -200}).setTween(nombreAnimacion).addTo(scrollMagicController);
	})	
});
</script>
<!-- ------------------------ FIN ANIMACIONES SCROLLMAGIC ------------------------ -->


<header class="header">
	<div class='menuInterior hidden-xs'>
		<div class="logo-header"><a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/logo.png" alt=""></a></div>
		<nav id="menu-header-cont">
			<div class="item-menu-header" id="contacto"><a href="javascript:0">Contacto</a></div>
			<div class="item-menu-header" id="presupuestoOnline"><a href="/presupuestoOnline">Presupuesto Online</a></div>
			<div class="item-menu-header" id="modelos"><a href="javascript:0">Modelos</a></div>
		</nav>
	</div>

	<div class='menuInterior menu-movil visible-xs-flex'>
		<div class="logo-header"><a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/logo.png" alt=""></a></div>
		<div class="button-burger">menu</div>
		<nav id="menu-header-cont">
			<div class="item-menu-header" id="contacto"><a href="javascript:0">Contacto</a></div>
			<div class="item-menu-header" id="presupuestoOnline"><a href="/presupuestoOnline">Presupuesto Online</a></div>
			<div class="item-menu-header" id="modelos"><a href="javascript:0">Modelos</a></div>
		</nav>
	</div>
</header>

<script>
	$(document).ready(function(){
		$("#contacto").click(function(){$("html, body").animate({"scrollTop":$(".home5").offset().top-50},1000);});
		$("#modelos").click(function(){$("html, body").animate({"scrollTop":$(".home4").offset().top-50},1000);});

		$(".button-burger").click(function(){
			$(this).next().fadeToggle(100);
			if ($(this).html() == "menu") {
				$(this).html("close");
			} else {
				$(this).html("menu");
			}
		})
	})

</script>

</html>