<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto base de datos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b1fb0d435a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
        include("nav.html");
    ?>
    <section id="reg_compl" class="sect_comm">
        <?php
            require_once("conexion.php");
            
            $peticion="SELECT * FROM usuario";

            if($result=$conn->query($peticion)){
                echo "<h2 class='msg_all'>Nº de registros: ".$result->num_rows."</h2>";
                echo "<table>";
                echo "<tr>";
                echo "<th>DNI</th>";
                echo "<th>Nombre</th>";
                echo "<th>1º Apellido</th>";
                echo "<th>2º Apellido</th>";
                echo "<th>Teléfono</th>";
                echo "<th>Rol</th>";
                echo "<th>Correo</th>";
                echo "</tr>";
                while($fila=$result->fetch_assoc()){
                    echo "<tr>";
                    foreach($fila as $elemento){
                        echo "<td>".$elemento."</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }else{
                echo "<h2 class='msg_all'>Algo ha fallado</h2>";
                echo "<img class='bees' src='../img/Bee_Sad_Emote.png' alt=''>";
            }
            
            $conn->close();
        ?>
    </section>
    <?php
        include("footer.html");
    ?>

</body>
</html>