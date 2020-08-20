<footer class="">
        <div class="ad container hidden-xs">
            <div class="row">
                <div class="col-md-12">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : endif; ?>
                </div>
            </div>
        </div>
        <nav class="menu bg-dark">
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
        <div class="copyright bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="text-center text-dark">Sitio creado por Angel Zaragoza</p>
                    </div>
                </div>
            </div>
        </div>
        <?php wp_footer(); ?>
    </footer>
    <div class="up d-none d-sm-block"><a href="#">subir</a></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php bloginfo('template_url');?>/js/jquery-3.4.1.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/popper.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
</body>
</html>