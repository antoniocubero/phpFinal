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
        if(empty($_POST['rol']) && empty($_POST['nombre']) && empty($_POST['apellid']) && empty($_POST['apellid_']) && empty($_POST['dni']) && empty($_POST['telefono']) && empty($_POST['mail'])){
            echo "<h2 class='msg_all'>Debes rellenar algun campo</h2>";
            echo "<img class='bees' src='../img/Bee_Mad_Emote.png' alt=''>";
        }else{

            $nombre=ucfirst($_POST['nombre']);
            $apellido1=ucfirst($_POST['apellid']);
            $apellido2=ucfirst($_POST['apellid_']);
            $rol=strtolower($_POST['rol']);
            $dni=strtolower($_POST['dni']);
            
            $peticion="SELECT * FROM usuario WHERE ";
            
            if(isset($_POST['rol']) && $_POST['rol'] != null && $_POST['rol'] != ""){
                $peticion.="rol='".$rol."' AND";
            }
            if(isset($_POST['nombre']) && $_POST['nombre'] != null && $_POST['nombre'] != ""){
                $peticion.="nombre='".$nombre."' AND";
            }
            if(isset($_POST['apellid']) && $_POST['apellid'] != null && $_POST['apellid'] != ""){
                $peticion.="apellid='".$apellido1."' AND";
            }
            if(isset($_POST['apellid_']) && $_POST['apellid_'] != null && $_POST['apellid_'] != ""){
                $peticion.="apellid_='".$apellido2."' AND";
            }
            if(isset($_POST['dni']) && $_POST['dni'] != null && $_POST['dni'] != ""){
                $peticion.="dni='".$dni."' AND";
            }
            if(isset($_POST['telefono']) && $_POST['telefono'] != null && $_POST['telefono'] != ""){
                $peticion.="telefono='".$_POST['telefono']."' AND";
            }
            if(isset($_POST['mail']) && $_POST['mail'] != null && $_POST['mail'] != ""){
                $peticion.="mail='".$_POST['mail']."' AND";
            }
            $peticion=substr($peticion,0,-3);
            
            
            if($result=$conn->query($peticion)){
                echo "<h2>Se han devuelto ".$result->num_rows." registros</h2>";
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
                echo "<h2 class='msg_all'>Algo ha fallado, registro/s no encontrado</h2>";
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