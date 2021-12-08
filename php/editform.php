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
    <section class="sect_comm" id="editform">
        <form action="edit.php" method="post">
            <h2>Editar registro</h2>
            <input type="text" placeholder="Introduce el DNI para editar datos" name="dniBuscado" id="dni_enter">
            <input type="text" name="rol" placeholder="Rol">
            <input type="text" name="nombre" placeholder="Nombre" >
            <input type="text" name="apellid1" placeholder="Primer Apellido" >
            <input type="text" name="apellid2" placeholder="Segundo Apellido" >
            <input type="number" name="dni" maxlength="8" placeholder="DNI" >
            <input type="number" name="telefono" id="" placeholder="Teléfono" >
            <input type="email" name="mail" placeholder="Correo electrónico" >
            <input type="submit" value="Cambiar datos">
        </form>
    </section>
    <?php
        include("footer.html");
    ?>
</body>
</html>