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
    
    <section class="sect_comm">
        <?php
        	require_once("conexion.php");

            if($_POST['dniBuscado']!="" && ($_POST['dni']!="" || $_POST['nombre']!="" || $_POST['apellid1']!="" || $_POST['apellid2']!="" || $_POST['rol']!="" || $_POST['telefono']!="" || $_POST['mail']!="")){
                
                $nombre=ucfirst($_POST['nombre']);
                $apellido1=ucfirst($_POST['apellid1']);
                $apellido2=ucfirst($_POST['apellid2']);
                $dni=strtolower($_POST['dni']);
                
                $peticion="UPDATE usuario SET ";
                
                if(isset($_POST['dni']) && $_POST['dni'] != null && $_POST['dni'] != ""){
                    $peticion.="dni='".$dni."',";
                }
	            if(isset($_POST['nombre']) && $_POST['nombre'] != null && $_POST['nombre'] != ""){
                    $peticion.="nombre='".$nombre."',";
                }
                if(isset($_POST['apellid1']) && $_POST['apellid1'] != null && $_POST['apellid1'] != ""){
                    $peticion.="apellido1='".$apellido1."',";
                }
                if(isset($_POST['apellid2']) && $_POST['apellid2'] != null && $_POST['apellid2'] != ""){
                    $peticion.="apellido2='".$apellido2."',";
                }
                if($_POST['rol']=='admin' || $_POST['rol']=='moderador' || $_POST['rol']=='usuario'){
                    $peticion.="rol='".$_POST['rol']."',";
                }
                if(isset($_POST['telefono']) && $_POST['telefono'] != null && $_POST['telefono'] != ""){
                    $peticion.="telefono='".$_POST['telefono']."',";
                }
                if(isset($_POST['mail']) && $_POST['mail'] != null && $_POST['mail'] != ""){
                    $peticion.="mail='".$_POST['mail']."',";
                }
                
                $peticion=substr($peticion,0,-1);

                $dniBusq=strtolower($_POST['dniBuscado']);
                
                $peticion.="WHERE DNI='".$dniBusq."'";

                if($conn->query($peticion)){
                    if($conn->affected_rows>0){
                        echo "<h2>Al dni ".$_POST['dniBuscado']." se ha actualizado:</h2><br><p>";
                            if($_POST['rol']=='admin' || $_POST['rol']=='moderador' || $_POST['rol']=='usuario'){
                                echo "El rol a ".$_POST['rol']."<br>";
                            }
                            if(isset($_POST['nombre']) && $_POST['nombre'] != null && $_POST['nombre'] != ""){
                                echo "El nombre a ".$nombre."<br>";
                            }
                            if(isset($_POST['apellid1']) && $_POST['apellid1'] != null && $_POST['apellid1'] != ""){
                                echo "El primer apellido a ".$apellido1."<br>";
                            }
                            if(isset($_POST['apellid2']) && $_POST['apellid2'] != null && $_POST['apellid2'] != ""){
                                echo "El segundo apellido a ".$apellido2."<br>";
                            }
                            if(isset($_POST['dni']) && $_POST['dni'] != null && $_POST['dni'] != ""){
                                echo "El dni a ".$_POST['nombre']."<br>";
                            }
                            if(isset($_POST['telefono']) && $_POST['telefono'] != null && $_POST['telefono'] != ""){
                                echo "El teléfono a ".$_POST['nombre']."<br>";
                            }
                            if(isset($_POST['mail']) && $_POST['mail'] != null && $_POST['mail'] != ""){
                                echo "El correo a ".$_POST['nombre']."<br>";
                            }
                        echo "</p>";
                        echo "<img class='bees' src='../img/Bee_Happy_Emote.png' alt=''>";
                    }else{
                        echo "<h2 class='msg_all'>Error, registro no actualizado</h2>";
                        echo "<img class='bees' src='../img/Bee_Sad_Emote.png' alt=''>";

                    }
                }

            }else{
                echo "<h2 class='msg_all'>Debes introducir algún dato nuevo y un dni registrado</h2>";
                echo "<img class='bees' src='../img/Bee_Mad_Emote.png' alt=''>";

            }


        	$conn->close();
        ?>
    </section>
    <?php
        include("footer.html");
    ?>


</body>
</html>