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

    <section id="insert_form" class="sect_comm">
        <form action="insert.php"method="POST">
            <h2>Agregar registro</h2>
            <h4>Tipo de usuario</h4>
            <select name="rol">
                <option value="usuario">Usuario</option>
                <option value="moderador">Moderador</option>
                <option value="admin">Admin</option>
            </select>
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="apellid" placeholder="Primer Apellido" required>
            <input type="text" name="apellid_" placeholder="Segundo Apellido" required>
            <div id="dni">
                <input type="number" name="dniNum" maxlength="8" placeholder="Número del DNI" required>
                <input type="text" name="dniLet" maxlength="1" placeholder="Letra del DNI" required>
            </div>
            <input type="number" name="telefono" id="" placeholder="Teléfono" required>
            <input type="email" name="mail" placeholder="Correo electrónico" required>

            <input type="reset" value="Limpiar">
            <input type="submit" value="Enviar">
            <!-- incluir input tipo reset y acabao -->
        </form>
    </section>


    <?php
        include("footer.html");
    ?>
</body>
</html>