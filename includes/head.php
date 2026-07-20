<?php
$basePath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/'));
$basePath = $basePath === '/' ? '' : $basePath;
$baseUrl = $basePath;
$siteBaseUrl = $baseUrl;
if (!defined('SITE_BASE_URL')) {
    define('SITE_BASE_URL', $siteBaseUrl);
}
$pageTitle = $pageTitle ?? 'R. Baidón';
$pageDescription = $pageDescription ?? 'Sitio institucional de R. Baidón.';
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="theme-color" content="#0c3259">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhj6uW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= htmlspecialchars(SITE_BASE_URL, ENT_QUOTES, 'UTF-8') ?>/assets/css/main.css">
</head>
<body class="rb-page">
<a class="visually-hidden-focusable rb-skip-link" href="#main-content">Saltar al contenido principal</a>
