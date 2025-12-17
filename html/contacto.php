<?php
$idioma = $_GET['lang'] ?? 'en';

$conexion = new mysqli("localhost", "usuario", "password", "textos_web");

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
        <a href="caracteristicas.php"><?php echo $textos['nav_features']; ?></a>
        <a href="sobreNosotros.php"><?php echo $textos['nav_about_us']; ?></a>
        <a href="contacto.php"><?php echo $textos['nav_contact_us']; ?></a>
        <a href="?lang=es">ES</a>
        <a href="?lang=en">EN</a>
    </nav>
    
    <div id="main">
        <section id="contacto">
            <h1><?php echo $textos['contact_us_title']; ?></h1>
            
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