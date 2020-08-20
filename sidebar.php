<aside class="widgets col-lg-4">
    <div class="widget redes-sociales">
                    <div class="seccion-titulo">
                        <h3 class="titulo">Siguenos</h3>
                    </div>
                    <div class="redes-sociales">
                        <a href="#" class="youtube">
                            <i class="fab fa-youtube icono"></i>
                            <span class="seguidores">12</span>
                        </a>
                        <a href="#" class="instagram">
                            <i class="fab fa-instagram icono"></i>
                            <span class="seguidores">159</span>
                        </a>
                        <a href="#" class="facebook">
                            <i class="fab fa-facebook-f icono"></i>
                            <span class="seguidores">234</span>
                        </a>
                    </div>
    </div>
    <div class="widget boletin">
                    <div class="seccion-titulo">
                        <h3 class="titulo">No te pierdas de nuestras noticias</h3>
                    </div>
                    <form class="formulario" action="">
                        <label for="email">Suscribete a nuestro boletin</label>
                        <input type="email" name="email" id="email" placeholder="Correo Electronico:" required>
                        <input type="submit" value="Enviar">
                    </form>
    </div>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : endif; ?>
</aside>