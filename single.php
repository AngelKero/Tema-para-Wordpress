<?php get_header();?>
    <main class="container">
        <div class="row">
            <section class="articulos col-lg-8">
                <div class="widget ad d-block d-md-none">
                    <div class="contenedor-ad d-block w-100">
                        <a href="#" class="d-block text-center"><img src="<?php bloginfo('template_url');?>/img/ad2.jpg" alt="ad" class="d-block w-100"></a>
                    </div>
                </div>
                <div class="row posts">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <!-- Aticulos -->
                        <article class="col-md-12 post">
                            <div class="contenedor">
                                <div class="thumb single">
                                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?>
                                </div>
                                <div class="contenedor-info">
                                    <div class="info">
                                        <h2 class="titulo single">
                                            <?php the_title(); ?>
                                        </h2>
                                        <div class="categorias single">
                                            <?php the_category();?>
                                        </div>
                                        <p class="fecha single"><?php echo get_the_date(); ?></p>
                                        <div class="texto">
									        <?php the_content(); ?>
								        </div>
                                        <div class="widget ad">
                                            <div class="contenedor-ad d-block w-100">
                                                <a href="#" class="d-block text-center"><img src="<?php bloginfo('template_url');?>/img/ad2.jpg" alt="ad" class="d-block w-100"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <section class="comentarios col-sm-12">
                            <?php comments_template(); ?> 
                        </section>
                    <?php endwhile; else: ?>
                        <!-- No hay articulos -->
                        <article class="col-md-6 post">
                            <div class="contenedor">
                                <div class="contenedor-info">
                                    <div class="info">
                                        <h2 class="titulo">
                                            El Post que buscas no existe.
                                        </h2>
                                        <div class="extracto"><p>Revisa que la URL que hayas ingresado sea correcta</p></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endif; ?>
                </div>
            </section>

            <?php get_sidebar();?>
        </div>
    </main>
<?php get_footer();?>