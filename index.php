<?php get_header();?>
    <main class="container">
        <div class="row">
            <section class="articulos col-lg-8">
                <div class="widget ad d-block d-md-none">
                    <div class="contenedor-ad d-block w-100">
                        <a href="#" class="d-block text-center"><img src="<?php bloginfo('template_url');?>/img/ad2.jpg" alt="ad" class="d-block w-100"></a>
                    </div>
                </div>
                <div class="row seccion-titulo">
                    <div class="col-md-12">
                        <h3 class="titulo">Lo mas reciente</h3>
                    </div>
                </div>
                <div class="row posts">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <!-- Aticulos -->
                        <article class="col-md-6 post">
                            <div class="contenedor">
                                <div class="thumb">
                                    <a href="<?php the_permalink();?>">
                                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?>
                                    </a>
                                </div>
                                <div class="contenedor-info">
                                    <div class="info">
                                        <h2 class="titulo">
                                            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                                        </h2>
                                        <p class="fecha"><?php echo get_the_date(); ?></p>
                                        <div class="extracto"><?php the_excerpt(); ?></div>
                                        <div class="categorias">
                                            <?php the_category();?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; else: ?>
                        <!-- No hay articulos -->
                        <article class="col-md-6 post">
                            <div class="contenedor">
                                <div class="contenedor-info">
                                    <div class="info">
                                        <h2 class="titulo">
                                            El Post que buscas no existe
                                        </h2>
                                        <div class="extracto"><p>Revisa que la URL que hayas ingresado sea correcta</p></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endif; ?>
                </div>
                <div class="row paginacion">
                    <div class="col-md-12">
                        <div class="pagination"><?php wp_pagenavi(); ?></div>
                    </div>
                </div>
            </section>

            <?php get_sidebar();?>
        </div>
    </main>
<?php get_footer();?>