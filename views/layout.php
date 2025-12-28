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

      if($is_home){
        include(__PATH_TEMPLATE_ROOT__ . 'views/landing.php');
      } else {
        echo '<section class="section"><div class="section-inner">';

        // WebEngine: el contenido del módulo suele venir en alguna variable.
        if(isset($module_content) && $module_content){
          echo $module_content;
        } elseif(isset($content) && $content){
          echo $content;
        } else {
          echo '<div class="card"><h3>Module</h3><p>No se encontró la variable de contenido del módulo. Busca en tu core qué variable imprime el módulo y colócala aquí.</p></div>';
        }

        echo '</div></section>';
      }
    ?>

  </div>
</div>

<?php include(__PATH_TEMPLATE_ROOT__ . 'views/footer.php'); ?>
