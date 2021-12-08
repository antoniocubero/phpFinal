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

    <section id="borrar_form" class="sect_comm">
        <form action="borrar.php" method="POST">
            <h2>Borrar registro</h2>
            <input placeholder="Introduce el DNI sin espacios" type="text" name="dni" id="">
            <input type="submit" value="Borrar">
        </form>
    </section>
    <?php
        include("footer.html");
    ?>

</body>
</html>