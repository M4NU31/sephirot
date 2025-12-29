<?php if(!defined('access')) die(); ?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?php echo config('server_name'); ?></title>

  <!-- Performance: no external fonts (system font stack). -->
  <link href="<?php echo __PATH_TEMPLATE_CSS__; ?>style.css" rel="stylesheet" media="screen">
  <link href="<?php echo __PATH_TEMPLATE_CSS__; ?>profiles.css" rel="stylesheet" media="screen">
  <link href="<?php echo __PATH_TEMPLATE_CSS__; ?>castle-siege.css" rel="stylesheet" media="screen">
  <link href="<?php echo __PATH_TEMPLATE_CSS__; ?>override.css" rel="stylesheet" media="screen">
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
      <a data-spy-link href="<?php echo __BASE_URL__ ?>#home">Home</a>
      <a data-spy-link href="<?php echo __BASE_URL__ ?>#features">Features</a>
      <a data-spy-link href="<?php echo __BASE_URL__ ?>#about">About</a>
      <a data-spy-link href="<?php echo __BASE_URL__ ?>#gameplay">Gameplay</a>
      <a data-spy-link href="<?php echo __BASE_URL__ ?>#download">Download</a>
    </nav>

    <div class="actions">
      <?php if(isLoggedIn()): ?>
        
        <a class="btn ghost" href="<?php echo __BASE_URL__ ?>usercp">Account</a>
        <a class="btn primary" href="<?php echo __BASE_URL__ ?>logout">Logout</a>

      <?php else: ?>

        <a class="btn ghost" href="<?php echo __BASE_URL__ ?>login">Login</a>
        <a class="btn primary" href="<?php echo __BASE_URL__ ?>register">Register</a>

      <?php endif; ?>
    </div>
  </div>
</header>
