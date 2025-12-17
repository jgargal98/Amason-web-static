<?php
include 'html/config.php';

$idioma = $_GET['lang'] ?? 'en';

$conexion = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

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
    <link rel="stylesheet" href="css_images/style.css">
    <link rel="stylesheet" href="css_images/fonts.css">
    <link rel="shortcut icon" href="css_images/favicon.png" type="image/x-icon">
    <title><?php echo $textos['titulo_site']; ?></title>
</head>
<body>
    <header>
        <img src="css_images/favicon.png" alt="Logo" class="logo">
        <h1><a href="#inicio"><?php echo $textos['titulo_site']; ?></a></h1>
    </header>
    <nav>
        <a href="html/caracteristicas.php"><?php echo $textos['nav_features']; ?></a>
        <a href="html/sobreNosotros.php"><?php echo $textos['nav_about_us']; ?></a>
        <a href="html/contacto.php"><?php echo $textos['nav_contact_us']; ?></a>
        <a href="?lang=es">ES</a>
        <a href="?lang=en">EN</a>
    </nav>

    <section id="inicio">
        <div>
            <h1><a href="html/caracteristicas.php"><?php echo $textos['see_our_features']; ?></a></h1>
        </div>
    </section>

    <footer>
        <img src="css_images/favicon.png" alt="logo">
    </footer>
</body>
</html>