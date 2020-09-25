
    <footer class="site-footer">
        <div class="contenedor clearfix">
            <div class="footer-informacion">
                <h3>Sobre <span>nosotros</span></h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet omnis exercitationem a tempore fugiat at aspernatur harum, repellat eaque debitis dolores facere autem quam officiis minus aut vero architecto nesciunt.</p>
            </div>
            <div class="ultimos-tweets">
                <h3>Ultimos <span>Tweets</span></h3>
                <ul>
                    <li>ga quisquam quitecto pariatur harum iure culpa modi. Culpa, id aliquam quos error debitis aliquid adipisci.</li>
                    <li>ga quisquam quitecto pariatur harum iure culpa modi. Culpa, id aliquam quos error debitis aliquid adipisci.</li>
                    <li>ga quisquam quitecto pariatur harum iure culpa modi. Culpa, id aliquam quos error debitis aliquid adipisci.</li>

                </ul>
            </div>
            <div class="menu">
                <h3>Redes <span>Sociales</span></h3>
                <nav class="redes-sociales">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </nav>
            </div>

        </div>
        <div class="copyright">
            Todos los derechos reservados
        </div>
    </footer>
    <!-- Add your site or application content here -->
    
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
   
    <?php 
    $paginaActual = basename($_SERVER["PHP_SELF"]);
    if($paginaActual=="index.php"||$paginaActual=="invitados.php"){
        echo("<script src=\"js/jquery.colorbox-min.js\"></script>");
    }elseif($paginaActual=="conferencias.php"){
        echo ("<script src=\"js/lightbox-plus-jquery.min.js\"></script>");
    }
    ?>
    <script src="js/jquery.lettering.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    
    <script src="js/main.js"></script>
    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('set', 'anonymizeIp', true);
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>