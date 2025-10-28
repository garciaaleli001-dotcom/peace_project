<?php
// index.php
$page = $_GET['page'] ?? 'home';

// Páginas permitidas
$allowed_pages = ['home', 'biblioteca', 'frases', 'login', 'register'];
if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

// Incluir la página solicitada desde la carpeta view
include 'view/' . $page . '.php';
?>