<html>
<head>
<?php get_header(); ?>
<?php wp_head() ?>
</head>
<body>



<section class="home home1 container-fluid no-padding">
	<video width="400" controls autoplay muted>
		<source src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/video.mp4" type="video/mp4">
	</video>
</section>

<div class="central container">

<section class="home home2">
	<div class="texto1 col-xs-12 m-a-regular t35 t-blue no-padding">Renová <b>tu usado</b></div>
	<div class="imagenes-home2 col-xs-12 no-padding">
		<div class="imagen-auto-item-home2 col-xs-12 col-sm-6">
			<div class="imagen-home2"></div>
			<div class="texto2 box-white m-a-regular t21">Presupuesto Online</div>
		</div>
		<div class="imagen-auto-item-home2 col-xs-12 col-sm-6">
			<div class="imagen-home2"></div>
			<div class="texto2 box-white m-a-regular t21">Presupuesto Online</div>
		</div>
	</div>
</section>


<section class="home home3">
	<div class="cont1 col-xs-12 no-padding">
		<div class="cont2 col-xs-12 col-sm-6">
			<img style="width: 100%" src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/palio-attractive.png" alt="">
		</div>
		<div class="cont2 col-xs-12 col-sm-6 color-blue">
			<div class="titulo1 m-a-bold t35">Palio Nuevo</div>
			<div class="titulo2 m-a-light t33">Sólo con $40.000</div>
			<div class="titulo2 box-blue m-a-extraLight t25">Presupuesto Online</div>
		</div>
	</div>
</section>

<section class="home home4">
	<div class="cont1 no-padding">
		<div class="cont2 col-xs-12 col-sm-4">
			<div class="titulo1 m-a-bold t23">Mobi</div>
			<div class="img-auto" style="background: url('<?php echo get_stylesheet_directory_uri() ?>/imagenes/grid/mobi1.png') no-repeat; background-size: contain; background-position: center"></div>
			<div class="texto1 m-a-regular t16 box-blue">Presupuesto Online</div>
		</div>
		<div class="cont2 col-xs-12 col-sm-4">
			<div class="titulo1 m-a-bold t23">Nuevo fiorino</div>
			<div class="img-auto" style="background: url('<?php echo get_stylesheet_directory_uri() ?>/imagenes/grid/fiorino1.png') no-repeat; background-size: contain; background-position: center"></div>
			<div class="texto1 m-a-regular t16 box-blue">Presupuesto Online</div>
		</div>
		<div class="cont2 col-xs-12 col-sm-4 color-blue">
			<div class="titulo1 m-a-bold t23">Siena EL</div>
			<div class="img-auto" style="background: url('<?php echo get_stylesheet_directory_uri() ?>/imagenes/grid/siena-el1.png') no-repeat; background-size: contain; background-position: center"></div>
			<div class="texto1 m-a-regular t16 box-blue">Presupuesto Online</div>
		</div>

		<div class="cont2 col-xs-12 col-sm-4">
			<div class="titulo1 m-a-bold t23">Strada Adventure</div>
			<div class="img-auto" style="background: url('<?php echo get_stylesheet_directory_uri() ?>/imagenes/grid/strada-adventure1.png') no-repeat; background-size: contain; background-position: center"></div>
			<div class="texto1 m-a-regular t16 box-blue">Presupuesto Online</div>
		</div>
		<div class="cont2 col-xs-12 col-sm-4">
			<div class="titulo1 m-a-bold t23">Dobló</div>
			<div class="img-auto" style="background: url('<?php echo get_stylesheet_directory_uri() ?>/imagenes/grid/doblo1.png') no-repeat; background-size: contain; background-position: center"></div>
			<div class="texto1 m-a-regular t16 box-blue">Presupuesto Online</div>
		</div>
		<div class="cont2 col-xs-12 col-sm-4 color-blue">
			<div class="titulo1 m-a-bold t23">Ducato</div>
			<div class="img-auto" style="background: url('<?php echo get_stylesheet_directory_uri() ?>/imagenes/grid/ducato1.png') no-repeat; background-size: contain; background-position: center"></div>
			<div class="texto1 m-a-regular t16 box-blue">Presupuesto Online</div>
		</div>
	</div>
</section>

</div>

<section class="home home5 container-fluid no-padding">
	<div class="hidden-xs col-sm-1">&nbsp;</div>
	<div class="cont1 form-home5 col-xs-12 col-sm-4 color-white">
		<form action="javascript:0">
			<div class="titulo1 m-a-regular t40">CONSULTANOS</div>
			<div class="input-form-home5"><input class="m-a-regular t13" type="text" placeholder="NOMBRE"></div>
			<div class="input-form-home5"><input class="m-a-regular t13" type="text" placeholder="TELÉFONO"></div>
			<div class="input-form-home5"><input class="m-a-regular t13" type="text" placeholder="LOCALIDAD"></div>
			<div class="input-form-home5"><textarea class="m-a-regular t13" placeholder="CONSULTA"></textarea></div>
			<div class="input-form-home5"><input class="m-a-regular t13" type="submit" value="ENVIAR"></div>
		</form>
	</div>
</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>