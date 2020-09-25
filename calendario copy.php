<?php include_once "includes/templates/header.php" ?>
<h2>Calendario del evento</h2>

<?php
try {
    require_once("includes/funciones/bd_conection.php");
    $sql ="SELECT evento_id,nombre_evento,fecha_evento,hora_evento,clave,
    cat_evento,icono,nombre_invitado,apellido_invitado from eventos INNER JOIN categoria_evento on 
    eventos.id_categoria = categoria_evento.id_categoria inner join
     invitados on eventos.invitado_id= invitados.invitado_id ORDER BY 
     `eventos`.`evento_id` ASC
    ";
    $resultado= $conn->query($sql);
} catch (\Throwable $th) {
    echo $th->getMessage();
}
?>
<div class="calendario">
    <?php
    $calendario=array();
   while( $eventos = $resultado->fetch_assoc()){
       $fecha =$eventos["fecha_evento"];
       $evento=array(
        "titulo"=>$eventos["nombre_evento"],
        "fecha" =>$eventos["fecha_evento"],
        "hora" => $eventos["hora_evento"],
        "categoria"=>$eventos["cat_evento"],
        "invitado"=>$eventos["nombre_invitado"],
        "icono" => $eventos["icono"]
       );
       $calendario[$fecha][]=$evento;
?>





<?php
   } 
    foreach($calendario as $dia=>$eventos){
    setlocale(LC_TIME,"spanish");
    ?>
    
<div class="dia contenedor seccion clearfix">
<h3 class="fecha-calendario">
        <?php
            echo("<i class=\"fas fa-calendar\"></i>".strftime("%d de %B del %Y",strtotime($dia))); 
        ?>
    </h3>
    <?php foreach($eventos as $evento){ ?>  
        <div class="evento-individual ">
            <div class="ayuda">
        <p class="titulo"> <?php echo($evento["titulo"]); ?>  </p>
        <p class="fecha-evento"> <?php echo("<i class=\"fas fa-clock\"></i>" . $evento["fecha"] ." ". $evento["hora"]); ?> </p>
        <p class="categoria"> <?php echo("<i class=\" fas ". $evento["icono"] ."\"></i>" . $evento["categoria"]); ?> </p>
        <p class="invitado-evento"> <?php echo("<i class=\"fas fa-user\"></i>".$evento["invitado"]); ?> </p>
        </div>
    </div>
    <?php } ?>
    </div>
    <?php };?>  
    <?php $conn->close(); ?>
</div>

<?php include_once "includes/templates/footer.php" ?>