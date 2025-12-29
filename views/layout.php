<?php if(!defined('access')) die(); ?>
<?php include(__PATH_TEMPLATE_ROOT__ . 'views/header.php'); ?>
<?php include(__PATH_TEMPLATE_ROOT__ . 'views/sidebar.php'); ?>

<div class="main">
  <div class="wrap">

    <?php
      // Ruta actual (sin querystring)
      $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $uri = rtrim($uri, '/');

      // Base URL por si tu sitio está en subcarpeta (normalmente __PATH_URL__ ya lo maneja)
      $base = rtrim(parse_url(__PATH_URL__, PHP_URL_PATH) ?? '', '/');

      // Normaliza: quita la base del URI si aplica
      if($base && strpos($uri, $base) === 0) {
        $uri = substr($uri, strlen($base));
        $uri = $uri ?: '/';
      }

      // Consideramos home si es "/" o vacío
      $is_home = ($uri === '' || $uri === '/');

      echo '<section class="section"><div class="section-inner">';

      // 1) Si es home, tu landing
      if($is_home){
        include(__PATH_TEMPLATE_ROOT__ . 'views/landing.php');
      } else {
        // 2) Si no es home, que WebEngine imprima el módulo real
        if(function_exists('loadModule')){
          loadModule();
        } else {
          echo '<div class="card"><h3>Module</h3><p>No encuentro la función que imprime módulos. Revisa default/index.php y dime qué función/include usa.</p></div>';
        }
      }

      echo '</div></section>';
    ?>

  </div>
</div>

<?php include(__PATH_TEMPLATE_ROOT__ . 'views/footer.php'); ?>
