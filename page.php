<?php get_header();?>
    <main class="container">
        <div class="row">
            <section class="articulos col-lg-8">
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
                                        <p class="fecha single"><?php echo get_the_date(); ?></p>
                                        <div class="texto">
									        <?php the_content(); ?>
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