<html>
<head>
<?php get_header(); ?>
<?php wp_head() ?>
</head>
<body>
<div class="central2 container-fluid no-padding">

	<section class="home home1">
		<video width="400" autoplay muted>
			<source src="<?php echo get_stylesheet_directory_uri() ?>/imagenes/video.mp4" type="video/mp4">
		</video>
		<div class="cont1 form-home5 fadeInDelayed hidden-xs col-xs-12 col-sm-4 color-white">
			<form action="javascript:0">
				<div class="titulo1 m-a-regular t38">CONSULTANOS</div>
				<div class="input-form-home5"><input class="m-a-regular t13" type="text" name="nombre" placeholder="NOMBRE" required></div>
				<div class="input-form-home5"><input class="m-a-regular t13" type="text" name="tel" placeholder="TELÉFONO" required></div>
				<div class="input-form-home5"><input class="m-a-regular t13" type="text" name="localidad" placeholder="LOCALIDAD"></div>
				<div class="input-form-home5"><textarea class="m-a-regular t13" name="mensaje" placeholder="CONSULTA"></textarea></div>
				<div class="input-form-home5"><input class="m-a-regular t13" type="submit" value="ENVIAR"></div>
			</form>
		</div>
	</section>

	<section class="home home2">
		<div class="texto1 col-xs-12 m-a-regular t35 t-blue no-padding">Renová <b>tu usado</b></div>
		<div class="imagenes-home2 col-xs-12 no-padding">
			<?php
			query_posts('post_type=auto&posts_per_page=99');
			if(have_posts()) : while (have_posts()) : the_post();
				if(types_render_field("destacado", array("row"=>true)) == "true, false") {
			?>
				<div class="imagen-auto-item-home2 col-xs-12 col-sm-6">
					<div class="imagen-home2" onclick="abrirModal1('<?php echo get_the_ID() ?>', event)" style='background: url(<?php echo types_render_field("imagenprincipal", array("url"=>true)); ?>) no-repeat; background-size: contain; background-position: 50%; cursor: pointer'></div>
					<div class="texto2 box-white m-a-regular t21"><a href="/presupuestoOnline" style="color: inherit; text-decoration: none">Presupuesto Online</a></div>
					<div class="parallaxBackground"></div>
				</div>
			<?php } $f++; endwhile; else: ?>
			<?php endif; ?>
		</div>
	</section>


	<section class="home home3">
		<?php
		query_posts('post_type=auto&posts_per_page=99');
		if(have_posts()) : while (have_posts()) : the_post();
			if(types_render_field("destacado", array("row"=>true)) == "false, true") {
		?>
			<div class="cont1 col-xs-12 no-padding">
				<div class="hidden-xs col-sm-1 col-md-2 ">&nbsp;</div>
				<div class="cont2 col-xs-12 col-sm-5 col-md-4 color-blue">
					<div class="titulo1 m-a-bold t35"><?php the_title(); ?></div>
					<div class="titulo2 m-a-light t33">Sólo con $<?php echo types_render_field("precio", array("row"=>true)); ?></div>
					<div class="titulo2 box-blue m-a-extraLight t25"><a href="/presupuestoOnline" style="color: inherit; text-decoration: none">Presupuesto Online</a></div>
				</div>
				<div class="cont2 col-xs-12 col-sm-5" style="cursor: pointer" onclick="abrirModal1('<?php echo get_the_ID() ?>', event)">
					<img style="width: 100%" src="<?php echo types_render_field("imagenprincipal", array("url"=>true)); ?>" alt="">
				</div>
				<div class="hidden-xs col-sm-1">&nbsp;</div>
			</div>
		<?php } $f++; endwhile; else: ?>
		<?php endif; ?>
	</section>

</div>


<div class="central container">

	<section class="home home4">
		<div class="cont1 no-padding">

			<?php
			query_posts('post_type=auto&posts_per_page=99');
			if(have_posts()) : while (have_posts()) : the_post();
				if(types_render_field("destacado", array("row"=>true)) == "" || types_render_field("destacado", array("row"=>true)) == "false, false") {
			?>
			<div class="cont2 col-xs-12 col-sm-4" style="cursor: pointer" onclick="abrirModal1('<?php echo get_the_ID() ?>', event)">
				<div class="titulo1 m-a-bold t23"><?php the_title(); ?></div>
				<div class="img-auto" style="background: url('<?php echo types_render_field("imagenprincipal", array("url"=>true)); ?>') no-repeat; background-size: contain; background-position: center"></div>
				<div class="texto1 m-a-regular t16 box-blue"><a href="/presupuestoOnline" style="color: inherit; text-decoration: none">Presupuesto Online</a></div>
			</div>
			<?php } $f++; endwhile; else: ?>
				<h1>No se encontraron autos.</h1>
			<?php endif; ?>

		</div>
	</section>

</div>

<div class="central2 container-fluid no-padding">

	<section class="home home5 container-fluid no-padding">
		<div class="hidden-xs col-sm-1">&nbsp;</div>
		<div class="cont1 form-home5 fadeInNormal col-xs-12 col-sm-4 color-white">
			<form action="javascript:0">
				<div class="titulo1 m-a-regular t38">CONSULTANOS</div>
				<div class="input-form-home5"><input class="m-a-regular t13" type="text" name="nombre" placeholder="NOMBRE" required></div>
				<div class="input-form-home5"><input class="m-a-regular t13" type="text" name="tel" placeholder="TELÉFONO" required></div>
				<div class="input-form-home5"><input class="m-a-regular t13" type="text" name="localidad" placeholder="LOCALIDAD"></div>
				<div class="input-form-home5"><textarea class="m-a-regular t13" name="mensaje" placeholder="CONSULTA"></textarea></div>
				<div class="input-form-home5"><input class="m-a-regular t13" type="submit" value="ENVIAR"></div>
			</form>
		</div>
	</section>

</div>

<div class="modal-outer" style="display: none">
	<div class="modal-close">close</div>
	<div class="modal1"></div>
	<div class="visible-xs-inline-block modal-close">close</div>
</div>

<div class="modal1-html" style="display: none">
	<?php
	query_posts('post_type=auto&posts_per_page=99');
	if(have_posts()) : while (have_posts()) : the_post();
	?>
			<div id="<?php echo get_the_ID(); ?>">
				<div class='modal-car-cont'>
					<div class='modal-cont1 col-xs-12 no-padding'>
						<a href="<?php echo types_render_field("imagen1", array("url"=>true)); ?>" data-lightbox="imagen<?php echo get_the_ID(); ?>" data-title="Foto <?php the_title(); ?> 1" class='item-img-car img-car1 col-xs-6 col-sm-4' style='background: url(<?php echo types_render_field("imagen1", array("url"=>true)); ?>) no-repeat; background-size: cover; background-position: 100% 100%'></a>
						<a href="<?php echo types_render_field("imagen2", array("url"=>true)); ?>" data-lightbox="imagen<?php echo get_the_ID(); ?>" data-title="Foto <?php the_title(); ?> 2" class='item-img-car img-car2 col-xs-6 col-sm-4' style='background: url(<?php echo types_render_field("imagen2", array("url"=>true)); ?>) no-repeat; background-size: cover; background-position: 100% 100%'></a>
						<a href="<?php echo types_render_field("imagen3", array("url"=>true)); ?>" data-lightbox="imagen<?php echo get_the_ID(); ?>" data-title="Foto <?php the_title(); ?> 3" class='item-img-car img-car3 col-xs-6 col-sm-4' style='background: url(<?php echo types_render_field("imagen3", array("url"=>true)); ?>) no-repeat; background-size: cover; background-position: 100% 100%'></a>
						<a href="<?php echo types_render_field("imagen4", array("url"=>true)); ?>" data-lightbox="imagen<?php echo get_the_ID(); ?>" data-title="Foto <?php the_title(); ?> 4" class='item-img-car img-car4 col-xs-6 col-sm-4' style='background: url(<?php echo types_render_field("imagen4", array("url"=>true)); ?>) no-repeat; background-size: cover; background-position: 100% 100%'></a>
						<a href="<?php echo types_render_field("imagen5", array("url"=>true)); ?>" data-lightbox="imagen<?php echo get_the_ID(); ?>" data-title="Foto <?php the_title(); ?> 5" class='item-img-car img-car5 col-xs-6 col-sm-4' style='background: url(<?php echo types_render_field("imagen5", array("url"=>true)); ?>) no-repeat; background-size: cover; background-position: 100% 100%'></a>
						<a href="<?php echo types_render_field("imagen6", array("url"=>true)); ?>" data-lightbox="imagen<?php echo get_the_ID(); ?>" data-title="Foto <?php the_title(); ?> 6" class='item-img-car img-car6 col-xs-6 col-sm-4' style='background: url(<?php echo types_render_field("imagen6", array("url"=>true)); ?>) no-repeat; background-size: cover; background-position: 100% 100%'></a>
					</div>
					<div class='modal-cont2 col-xs-12 no-padding color-blue'>
						<div class='titulo1 m-a-bold t38'>Fiat <?php the_title(); ?></div>
						<div class='texto1 m-a-light t25'>Cuota mensual $<?php echo types_render_field("precio", array("row"=>true)); ?></div>
						<div class='texto2 box-blue m-a-extraLight t23'><a href="/presupuestoOnline" style="color: inherit; text-decoration: none">Presupuesto Online</a></div>
					</div>
				</div>
			</div>
	<?php 
		$f++; endwhile; else: ?>
		<h1>No se encontraron autos.</h1>
	<?php endif; ?>
</div>

<div id="modalContacto"></div>


<script>
	function abrirModal1(name, e){
		e.preventDefault();

		$(".modal1").html($("#"+name).html());
		$(".modal-outer").fadeIn();
	}

	$(".central, .central2, .modal-close").click(function(){
		if ($(".modal-outer").css("opacity") != 0){
			$(".modal-outer").fadeOut();	
		}
	})

	//CONSULTA AJAX
	$("form").submit(function(e){
		e.stopPropagation();
		e.preventDefault();
		$.ajax({
			url: "<?php echo get_stylesheet_directory_uri() ?>/enviarContacto.php", 
			data: $(this).serialize(),
		    error: function(xhr){
		        console.log("Ocurrió un error: " + xhr.status + " " + xhr.statusText);
		    },
			success: function(result){
		        $("#modalContacto").html(result);
		        $("#modalContacto").fadeIn();
		        setTimeout(function(){
		        	$("#modalContacto").fadeOut();
		        },3000);
		    },
		    dataType: "text"
		});
	});
</script>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>