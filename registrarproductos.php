<?php

include('Basedatos.php');

if (isset($_POST["btnRegistrar"])){

    $nombreProducto=$_POST['Nombreplato'];
    $precioProducto=$_POST['precioPlato'];
    $descripcionProducto=$_POST['Descripcion'];

    

    
    if  ){
        $transaccion= new Basedatos();
        $consultaSQL="INSERT INTO menu(nProducto, precioP, descripcion) VALUES ('$nombreplato', '$precioPlato','$descripcionProducto')";
        $transaccion->agregarDatos($consultaSQL);
    } else {
       echo "<b>Ocurrio un error: ", ['error'];
    }
    
    




}

?>