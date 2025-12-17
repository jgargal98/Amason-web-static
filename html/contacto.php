<?php
include 'config.php';

$idioma = $_GET['lang'] ?? 'en';

$conexion = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Cargar textos según el idioma
$consulta = $conexion->prepare(
    "SELECT clave, contenido FROM textos WHERE idioma = ?"
);
$consulta->bind_param("s", $idioma);
$consulta->execute();
$resultado = $consulta->get_result();

$textos = [];
while ($fila = $resultado->fetch_assoc()) {
    $textos[$fila["clave"]] = $fila["contenido"];
}

// Procesar envío del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';
    $mensaje = $_POST['mensaje'] ?? '';
    $fecha_envio = date('Y-m-d H:i:s');

    $insert = $conexion->prepare(
        "INSERT INTO mensajes_contacto (nombre, email, mensaje, fecha_envio) VALUES (?, ?, ?, ?)"
    );
    $insert->bind_param("ssss", $nombre, $email, $mensaje, $fecha_envio);
    $insert->execute();

    $mensaje_enviado = true;
}
?>
<!DOCTYPE html>
<html lang="<?php echo $idioma; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css_images/style.css">
    <link rel="stylesheet" href="../css_images/fonts.css">
    <link rel="shortcut icon" href="../css_images/favicon.png" type="image/x-icon">
    <title><?php echo $textos['titulo_site']; ?></title>
</head>
<body>
    <header>
        <img src="../css_images/favicon.png" alt="Logo" class="logo">
        <h1><a href="../index.php"><?php echo $textos['titulo_site']; ?></a></h1>
    </header>

    <nav>
        <div class="nav-links">
            <a href="caracteristicas.php"><?php echo $textos['nav_features']; ?></a>
            <a href="sobreNosotros.php"><?php echo $textos['nav_about_us']; ?></a>
            <a href="contacto.php"><?php echo $textos['nav_contact_us']; ?></a>
        </div>
        <div class="lang-buttons">
            <a href="?lang=es">ES</a>
            <a href="?lang=en">EN</a>
        </div>
    </nav>
    
    <div id="main">
        <section id="contacto">
            <h1><?php echo $textos['contact_us_title']; ?></h1>

            <?php if (!empty($mensaje_enviado)): ?>
                <p style="color:green;">Mensaje enviado correctamente.</p>
            <?php endif; ?>
            
            <form action="" method="post">
                <label for="nombre"><?php echo $textos['contact_name']; ?>:</label>
                <input type="text" id="nombre" name="nombre" placeholder="<?php echo $textos['contact_name_placeholder']; ?>" required>

                <label for="email"><?php echo $textos['contact_email']; ?>:</label>
                <input type="email" id="email" name="email" placeholder="<?php echo $textos['contact_email_placeholder']; ?>" required>

                <label for="mensaje"><?php echo $textos['contact_message']; ?>:</label>
                <textarea id="mensaje" name="mensaje" rows="5" placeholder="<?php echo $textos['contact_message_placeholder']; ?>" required></textarea>

                <button class="button" type="submit"><?php echo $textos['contact_send']; ?></button>
            </form>
        </section>
    </div>

    <footer>
        <img src="../css_images/favicon.png" alt="logo">
    </footer>
</body>
</html>