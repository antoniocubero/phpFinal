

<?php
    $conn=mysqli_connect("localhost","root","","proyectophpfinal");

    if($conn->connect_errno){
        echo "<h1>Error al conectar a la base de datos</h1>";
        exit;
    }

    //web navegable y poder insertar, actualizar, eliminar y mostrar datos
?>