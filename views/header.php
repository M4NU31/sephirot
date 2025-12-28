<?php if(!defined('access')) die(); ?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?php echo config('server_name'); ?></title>

  <!-- Performance: no external fonts (system font stack). -->
  <link rel="stylesheet" href="<?php echo __PATH_TEMPLATE__ ?>assets/css/styles.css" />
</head>
<body>

<header class="topbar">
  <div class="topbar-inner">
    <button class="burger" data-burger aria-label="Abrir menú">☰</button>

    <div class="brand">
      <div class="brand-mark" aria-hidden="true"></div>
      <div class="brand-title">
        <b><?php echo config('server_name'); ?></b>
        <small>Season 8 • Episode 3</small>
      </div>
    </div>

    <!-- Landing anchors (Home) -->
    <nav class="nav" aria-label="Navegación principal">
      <a data-spy-link href="#home">Home</a>
      <a data-spy-link href="#features">Features</a>
      <a data-spy-link href="#about">About</a>
      <a data-spy-link href="#gameplay">Gameplay</a>
      <a data-spy-link href="#download">Download</a>
    </nav>

    <div class="actions">
      <!-- WebEngine modules -->
      <a class="btn ghost" href="<?php echo __PATH_URL__ ?>login">Account</a>
      <a class="btn primary" href="<?php echo __PATH_URL__ ?>register">Register</a>
    </div>
  </div>
</header>
