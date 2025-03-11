<?php
include 'db/conexion.php';

$nss = $_POST['nss'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$servicio = $_POST['servicio'];
$cama = $_POST['cama'];
$sala = $_POST['sala'];
//$fechaIn = $_POST['fechaIn'];
$sitioInfeccion = $_POST['sitioInfeccion'];
$diagnostico = $_POST['diagnostico'];
$fechaNoti = $_POST['fechaNoti'];
$medico = $_POST['medico'];
//$enfermera = $_POST['enfermera'];

$sql = "INSERT INTO datos (nss,nombre,edad,sexo,servicio,cama,sala,sitioInfeccion,diagnostico,fechaNoti,medico) 
VALUES (:nss,:nombre,:edad,:sexo,:servicio,:cama,:sala,:sitioInfeccion,:diagnostico,:fechaNoti,:medico)";

    try{
        $db = new db();
        $db = $db->conectDB();
        $resultado = $db->prepare($sql);

        $resultado->bindParam(':nss',$nss);
        $resultado->bindParam(':nombre',$nombre);
        $resultado->bindParam(':edad',$edad);
        $resultado->bindParam(':sexo',$sexo);
        $resultado->bindParam(':servicio',$servicio);
        $resultado->bindParam(':cama',$cama);
        $resultado->bindParam(':sala',$sala);
        //$resultado->bindParam(':fechaIn',$fechaIn);
        $resultado->bindParam(':sitioInfeccion',$sitioInfeccion);
        $resultado->bindParam(':diagnostico',$diagnostico);
        $resultado->bindParam(':fechaNoti',$fechaNoti);
        $resultado->bindParam(':medico',$medico);
        //$resultado->bindParam(':enfermera',$enfermera);

        $resultado->execute();

        $resultado = null;
        $db = null;
    }catch(PDOException $e){
        echo '{"error" : {"text":'.$e->getMessage().'}';
    }

?>