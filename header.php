<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if (is_home()){
			// Si estamos en la pagina de Inicio obtenemos el nombre del Blog
			echo get_bloginfo('name');
		} else if (is_single()){
			// Si es un post mostramos el titulo
			echo the_title();
		} else {
			// De otra forma obtenemos el titulo del post
			echo get_bloginfo('name');
		}?>
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
    <!-- Fontasome 5 JS -->
    <script src="<?php bloginfo('template_url');?>/js/all.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Oxanium:300,500,700&display=swap" rel="stylesheet"> 
    <!-- CSS Styles -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/master.css">

    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="logo-redes">
            <div class="container">
                <div class="row">
                    <div class="d-flex col-xs-12 col-sm-6 justify-content-center justify-content-sm-start logo">
                        <a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url');?>/img/logo.png" alt="Existence Creations logo" height="50px"></a>
                    </div>
                    <div class="d-sm-flex col-xs-12 col-sm-6 justify-content-center justify-content-sm-end redes">
                        <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <nav class="menu position-sticky sticky-top">
            <div class="container">
                <div class="row">
                    <?php wp_nav_menu(array(
						'container' => false,
						'menu_class' => '',
						'items_wrap' => '<ul class="col-md-12 m-0 text-center text-md-left">%3$s</ul>',
						'theme_location' => 'menu-top'
					));	?>
                </div>
            </div>
        </nav>
        <div class="ad container hidden-xs">
			<div class="row">
				<div class="col-md-12">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header') ) : endif; ?>
				</div>
			</div>
		</div>
    </header>