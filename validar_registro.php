<?php 
if(isset($_POST["submit"])){
    $nombre= $_POST["nombre"];
    $apellido= $_POST["apellido"];
    $email= $_POST["email"];
    $total= $_POST["total"];
    $regalo= $_POST["regalo"];
    $fecha=date("Y-m-d H:i:s");
    $boletos=$_POST["boletos"];
    $camisas=$_POST["camisas_evento"];
    $etiquetas=$_POST["etiquetas_evento"];
    $registros =$_POST["registro"];
}
include_once "includes/funciones/funciones.php";
    $pedido= productos_json($boletos,$camisas,$etiquetas);
    $eventos=eventos_json($registros);
    try {
        include_once "includes/funciones/bd_conection.php";
        $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado,apellido_registrado,email_registrado,fecha_registro,pases_articulos,talleres_registrados,regalo,total_pagado) values (?,?,?,?,?,?,?,?);");
        $stmt->bind_param("ssssssis",$nombre,$apellido,$email,$fecha,$pedido,$eventos,$regalo,$total);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        if(!isset($_GET["exitoso"]))
            header("Location: validar_registro.php?exitoso=1");
        
        
    } catch (\Throwable $th) {
        echo ("no se pudo");
    }
?>
<?php include_once "includes/templates/header.php" ?>
<h2>Registro Exitoso</h2>
<?php include_once "includes/templates/footer.php" ?>