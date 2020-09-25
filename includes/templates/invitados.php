<?php
try {
    require_once("includes/funciones/bd_conection.php");
    $sql="select * from invitados";
    $resultado = $conn->query($sql);
    $invitadosEvento=array();
    while($invitados =$resultado->fetch_assoc()){
        $invitado=array(
            "nombre"=>$invitados["nombre_invitado"],
            "apellido"=>$invitados["apellido_invitado"],
            "descripcion"=>$invitados["descripcion"],
            "urlImagen"=>$invitados["url_imagen"],
            "id" => $invitados["invitado_id"]
        );
        $invitadosEvento[]=$invitado;
    }
} catch (\Throwable $th) {
    echo $th->getMessage();
}
?>

<div class="seccion contenedor invitados clearfix">
        <h2>Nuestros invitados</h2>
        <ul>

        <?php foreach($invitadosEvento as $invitado){ ?>
            <li class="invitado ">
                <a class="invitado-info" href="#invitado<?php echo $invitado["id"]?>" >
                    <img src="img/<?php echo $invitado["urlImagen"]; ?>" alt="">
                </a>

                <p><?php echo ($invitado["nombre"]. " " . $invitado["apellido"] ) ?></p>
            </li>
            <div style="display:none;">
                <div class="invitado-info" id="invitado<?php echo $invitado["id"]?>">
                    <h2><?php echo ($invitado["nombre"]. " " . $invitado["apellido"] ) ?></h2>
                    <p><?php echo($invitado["descripcion"]) ?></p>
                    <img src="img/<?php echo $invitado["urlImagen"]; ?>" alt="">    

                </div>
            </div>
        <?php } ?>   
        </ul>
    </div>
