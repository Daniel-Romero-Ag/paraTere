<?php include_once "includes/templates/header.php" ?>
    <div class="seccion contenedor descripcion">
        <h2>La mejor conferencia de diseño web en español</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore veniam aliquid, repudiandae consectetur saepe dolore. Quia sapiente inventore, libero quam minus, suscipit provident veritatis nihil iusto officia ad quis eaque?</p>

    </div>
    <div class="seccion contenedor ">
        <div class="programa-evento">
            <div class="imagen-evento">
                <img src="img/mesa.jpg" alt="">
            </div>
            <div class="informacion-programa">
                <h2>Programa del evento</h2>

                <nav class="menu-programa">

                <?php
                    try {
                        require_once("includes/funciones/bd_conection.php");
                        $sql="select * from categoria_evento";
                        $resultado = $conn->query($sql);
                        $categoriasEventos=array();
                        while($categorias =$resultado->fetch_assoc()){
                            $categoria=array(
                                "tipo"=>$categorias["cat_evento"],
                                "icono" => $categorias["icono"]
                            );
                            $categoriasEventos[]=$categoria;
                        }

                    } catch (\Throwable $th) {
                        echo $th->getMessage();
                }
                ?>
                <?php
                    foreach($categoriasEventos as $cat){ ?>
                        <a href="#<?php echo $cat["tipo"] ?>">
                            <i class="fas <?php echo $cat["icono"] ?> "></i> 
                        <?php echo $cat["tipo"] ?></a>

                <?php } ?>
                

                    

                </nav>
                <div class="info-curso ocultar clearfix " id="Talleres">

                <?php 
                
                $tipo_evento ="Talleres";
                $sql= "select cat_evento,nombre_evento,fecha_evento,    
                hora_evento, nombre_invitado, apellido_invitado 
                from eventos inner join categoria_evento on 
                eventos.id_categoria= categoria_evento.id_categoria
                 inner join invitados on eventos.invitado_id=
                 invitados.invitado_id where cat_evento='".$tipo_evento."' limit 2";
                $resultados = $conn->query($sql);
                $Talleres = array();
                while($resultado = $resultados->fetch_assoc()){
                        $Taller=array(
                            "cat_evento"=>$resultado["cat_evento"],
                            "nombre_evento"=>$resultado["nombre_evento"],
                            "fecha_evento"=>$resultado["fecha_evento"],
                            "hora_evento"=>$resultado["hora_evento"],
                            "nombre_invitado"=>$resultado["nombre_invitado"],
                            "apellido_invitado"=>$resultado["apellido_invitado"]
                        );
                        $Talleres[]=$Taller;
                }
                ?>

                <?php foreach($Talleres as $Taller){ ?>
                    <div class="detalle-evento">
                        <h3><?php echo $Taller["nombre_evento"] ?></h3>
                        <p><i class="fas fa-clock"></i><?php echo $Taller["hora_evento"] ?></p>
                        <p><i class="fas fa-calendar"></i><?php echo $Taller["fecha_evento"] ?></p>
                        <p><i class="fas fa-user"></i><?php echo ($Taller["nombre_invitado"] . " " . $Taller["apellido_invitado"]);?></p>
                    </div>
                <?php } ?>

                    <a href="#" class="button float-right">Ver todos</a>
                </div>
                <div class="info-curso ocultar clearfix " id="Conferencias">

                <?php 
                setlocale(LC_TIME,"spanish");
                $tipo_evento ="Conferencias";
                $sql= "select cat_evento,nombre_evento,fecha_evento,    
                hora_evento, nombre_invitado, apellido_invitado 
                from eventos inner join categoria_evento on 
                eventos.id_categoria= categoria_evento.id_categoria
                 inner join invitados on eventos.invitado_id=
                 invitados.invitado_id where cat_evento='".$tipo_evento."' limit 2";
                $resultados = $conn->query($sql);
                $Conferencias = array();
                while($resultado = $resultados->fetch_assoc()){
                        $Conferencia=array(
                            "cat_evento"=>$resultado["cat_evento"],
                            "nombre_evento"=>$resultado["nombre_evento"],
                            "fecha_evento"=>$resultado["fecha_evento"],
                            "hora_evento"=>$resultado["hora_evento"],
                            "nombre_invitado"=>$resultado["nombre_invitado"],
                            "apellido_invitado"=>$resultado["apellido_invitado"]
                        );
                        $Conferencias[]=$Conferencia;
                }
                ?>

                <?php foreach($Conferencias as $Conferencia){ ?>
                    <div class="detalle-evento">
                        <h3><?php echo $Conferencia["nombre_evento"] ?></h3>
                        <p><i class="fas fa-clock"></i><?php echo $Conferencia["hora_evento"] ?></p>
                        <p><i class="fas fa-calendar"></i><?php echo (strftime("%d de %B del %Y",strtotime($Conferencia["fecha_evento"]))) ?></p>
                        <p><i class="fas fa-user"></i><?php echo ($Conferencia["nombre_invitado"] . " " . $Conferencia["apellido_invitado"]);?></p>
                    </div>
                <?php } ?>



                
                    <a href="#" class="button float-right">Ver todos</a>
                </div>
                <div class="info-curso ocultar clearfix " id="Seminario">
                <?php 
                setlocale(LC_TIME,"spanish");
                $tipo_evento ="Seminario";
                $sql= "select cat_evento,nombre_evento,fecha_evento,    
                hora_evento, nombre_invitado, apellido_invitado 
                from eventos inner join categoria_evento on 
                eventos.id_categoria= categoria_evento.id_categoria
                 inner join invitados on eventos.invitado_id=
                 invitados.invitado_id where cat_evento='".$tipo_evento."' limit 2";
                $resultados = $conn->query($sql);
                $Seminarios = array();
                while($resultado = $resultados->fetch_assoc()){
                        $Seminario=array(
                            "cat_evento"=>$resultado["cat_evento"],
                            "nombre_evento"=>$resultado["nombre_evento"],
                            "fecha_evento"=>$resultado["fecha_evento"],
                            "hora_evento"=>$resultado["hora_evento"],
                            "nombre_invitado"=>$resultado["nombre_invitado"],
                            "apellido_invitado"=>$resultado["apellido_invitado"]
                        );
                        $Seminarios[]=$Seminario;
                }
                ?>

                <?php foreach($Seminarios as $Seminario){ ?>
                    <div class="detalle-evento">
                        <h3><?php echo $Seminario["nombre_evento"] ?></h3>
                        <p><i class="fas fa-clock"></i><?php echo $Seminario["hora_evento"] ?></p>
                        <p><i class="fas fa-calendar"></i><?php echo (strftime("%d de %B del %Y",strtotime($Seminario["fecha_evento"]))) ?></p>
                        <p><i class="fas fa-user"></i><?php echo ($Seminario["nombre_invitado"] . " " . $Seminario["apellido_invitado"]);?></p>
                    </div>
                <?php } ?>    



                    <a href="#" class="button float-right">Ver todos</a>
                </div>
            </div>
        </div>
    </div>
    
    <?php include_once "includes/templates/invitados.php" ?>
    <div class="contador parallax clearfix">

        <ul class="resumen-evento contenedor clearfix">
            <li>
                <p class="numero"></p>
                invitados
            </li>
            <li>
                <p class="numero"></p>
                talleres
            </li>
            <li>
                <p class="numero"></p>
                dias
            </li>
            <li>
                <p class="numero"></p>
                conferencias
            </li>

        </ul>

    </div>
    <section class="seccion contenedor precios">

        <h2>precios</h2>
        <ul class="lista-precios clearfix">
            <li>
                <div class="tabla-precio">
                    <h3>Pase por un dia</h3>
                    <p class="numero">$30</p>
                    <ul>
                        <li>Bocadillos gratis</li>
                        <li>Todas las conferencias</li>
                        <li>Todos los talleres</li>
                    </ul>
                    <a href="#" class="button hollow">Comprar</a>
                </div>
            </li>
            <li>
                <div class="tabla-precio">
                    <h3>Pase total</h3>
                    <p class="numero">$50</p>
                    <ul>
                        <li>Bocadillos gratis</li>
                        <li>Todas las conferencias</li>
                        <li>Todos los talleres</li>
                    </ul>
                    <a href="#" class="button ">Comprar</a>
                </div>
            </li>
            <li>
                <div class="tabla-precio">
                    <h3>Pase por 2 dias</h3>
                    <p class="numero">$40</p>
                    <ul>
                        <li>Bocadillos gratis</li>
                        <li>Todas las conferencias</li>
                        <li>Todos los talleres</li>
                    </ul>
                    <a href="#" class="button hollow">Comprar</a>
                </div>
            </li>
        </ul>
    </section>
    <section class="mapa" id="mapa">
        
    </section>
    <section class="seccion ">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ipsam non blanditiis asperiores quia cupiditate voluptatum dolores atque mollitia aperiam. Ad, ipsum! Eligendi perspiciatis nemo, soluta temporibus repudiandae accusantium
                        tenetur!
                    </p>
                    <footer>
                        <img src="img/testimonial.jpg" alt="">
                        <cite>Romero Aguilar Daniel Guillermo <span>@Diseñador de algoritmos</span></cite>
                    </footer>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ipsam non blanditiis asperiores quia cupiditate voluptatum dolores atque mollitia aperiam. Ad, ipsum! Eligendi perspiciatis nemo, soluta temporibus repudiandae accusantium
                        tenetur!
                    </p>
                    <footer>
                        <img src="img/testimonial.jpg" alt="">
                        <cite>Romero Aguilar Daniel Guillermo <span>@Diseñador de algoritmos</span></cite>
                    </footer>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam ipsam non blanditiis asperiores quia cupiditate voluptatum dolores atque mollitia aperiam. Ad, ipsum! Eligendi perspiciatis nemo, soluta temporibus repudiandae accusantium
                        tenetur!
                    </p>
                    <footer>
                        <img src="img/testimonial.jpg" alt="">
                        <cite>Romero Aguilar Daniel Guillermo<span>@Diseñador de algoritmos</span></cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>
    <div class="news">
        <div class="newsletter parallax">
            <div class="contenido contenedor">
                <p>Registrate a Newsletter</p>
                <h3>GLDWebCamp</h3>
                <a href="#" class="button transparente">
                registrate
            </a>
            </div>
        </div>
    </div>
    <section class="seccion">
        <h2>Faltan</h2>

        <ul class="contador-faltante clearfix">
            <li>
                <p class="dias"></p> Dias
            </li>
            <li>
                <p class="horas"></p> Horas
            </li>
            <li>
                <p class="minutos"></p> Minutos
            </li>
            <li>
                <p class="segundos"></p> Segundos
            </li>
        </ul>

    </section>
<?php include_once "includes/templates/footer.php" ?>





