<?php
    require 'conexion.php';

    session_start();

    if(isset($_SESSION['correo']))
    {
        $id_fab = $_POST['id_fab'];
        $nombre_fab = $_POST['nombre_fab'];

        $query = "INSERT INTO Fabricante(id_fabricante, nombre_fabricante) VALUES ('$id_fab','$nombre_fab')";

        $insercion = mysqli_query($conexion, $query) or trigger_error("Error en la inserción de los datos: ".mysqli_error($conexion));

        if($insercion)
        {
            echo '<script type="text/javascript">alert("Fabricante registrado"); window.location.href="../registrar_fabricante.php";</script>';
        }
    }
    else
    {
        header('location: ../pagina_principal.php');
    }
?>