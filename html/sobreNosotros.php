<?php
include 'config.php';

session_start(); // iniciar sesión

if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

$idioma = $_SESSION['lang'] ?? 'en';

$conexion = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");

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
        <div class="nav-links">
            <a href="caracteristicas.php"><?php echo $textos['nav_features']; ?></a>
            <a href="sobreNosotros.php"><?php echo $textos['nav_about_us']; ?></a>
            <a href="contacto.php"><?php echo $textos['nav_contact_us']; ?></a>
            <a href="developers.php"><?php echo $textos['nav_developers']; ?></a>
            
        </div>
        <div class="lang-buttons">
            <a href="?lang=es">ES</a>
            <a href="?lang=en">EN</a>
        </div>
    </nav>
    <div id="main">
        <section id="sobreNosotros">
            <h1><?php echo $textos['about_us_title'];?></h1>
            <h3>
                <?php echo $textos['about_us_text'];?>
            </h3>
        </section>
    </div>

    <footer>
        <img src="../css_images/favicon.png" alt="logo">
        <p>&copy; <?php echo date("Y"); ?> CigaSoft. Todos los derechos reservados.</p>
    </footer>
</body>
</html>