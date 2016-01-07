<?php
    session_start();
    if(!isset($_POST["cedula"])){ 
        $destino = "inicio.php";
    }else{
        $_SESSION["cedula"]=$_POST["cedula"];
        $destino="carrito.php";
    }
    header("location:$destino");
?>