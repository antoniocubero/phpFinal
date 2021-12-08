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
    <section id="message" class="sect_comm">
        <?php
            require_once("conexion.php");

            if((strlen($_POST['dniNum'])!=8) || $_POST['dniNum']<0){
                echo "<h2 class='msg_all'>El número del dni no es válido</h2>";
                echo "<a href='javascript:history.back()'><i class='fas fa-chevron-left'></i></a>";
                echo "<img class='bees' src='../img/Bee_Mad_Emote.png' alt=''>";
            }else{
                $dniNum=strval($_POST['dniNum']);
                $nombre=ucfirst($_POST['nombre']);
                $apellido1=ucfirst($_POST['apellid']);
                $apellido2=ucfirst($_POST['apellid_']);
                $dniLet=strtolower($_POST['dniLet']);
                
                $peticion="INSERT INTO usuario VALUES('".($dniNum.$dniLet)."','".$nombre."','".$apellido1."','".$apellido2."','".$_POST['telefono']."','".$_POST['rol']."','".$_POST['mail']."')";
        
                if($conn->query($peticion)){
                    echo "<h2 class='msg_all'>Todo ha ido bien, registro completado</h2>";
                    echo "<img class='bees' src='../img/Bee_Happy_Emote.png' alt=''>";
                }else{
                    echo "<h2 class='msg_all'>Algo ha fallado</h2>";
                    echo "<img class='bees' src='../img/Bee_Sad_Emote.png' alt=''>";
                }

            }
            $conn->close();
        ?>
    </section> 
    <?php
        include("footer.html");
    ?>
</body>
</html>