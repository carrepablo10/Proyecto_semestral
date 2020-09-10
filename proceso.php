<?php
    //  recuperar datos
    $rut=$_POST["txtRut"];
    $nombre=$_POST["txtNombre"];
    $edad=$_POST["txtEdad"];
    // crear conexion
    $cone=mysqli_connect("localhost","root","","Lavado_auto");
    // sql de INSERT
    $sql="insert into cliente values('$rut','$nombre',$edad)";
    // ejecutar instruccion
    $reg=mysqli_query($cone, $sql);
    // mostrar mensaje
    echo "Grabado";
?>
