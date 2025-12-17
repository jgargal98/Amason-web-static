<?php
$DB_HOST = 'sql303.infinityfree.com';
$DB_USER = 'if0_40704204';
$DB_PASS = 'KV0Olnz2QozJHgC';
$DB_NAME = 'if0_40704204_amason_web';

$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if (!$conn) {
    die("Error de conexion: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");

header('Content-Type: text/html; charset=utf-8');
?>