<?php if(!defined('access')) die(); ?>
<?php include(__PATH_TEMPLATE_ROOT__ . 'views/header.php'); ?>
<?php include(__PATH_TEMPLATE_ROOT__ . 'views/sidebar.php'); ?>

<div class="main">
  <div class="wrap">

    <?php
      // WebEngine default routing uses page/subpage
      if(!isset($_REQUEST['page'])) $_REQUEST['page'] = '';
      if(!isset($_REQUEST['subpage'])) $_REQUEST['subpage'] = '';

      $is_home = ($_REQUEST['page'] === '' || $_REQUEST['page'] === 'home');

      if($is_home){
        include(__PATH_TEMPLATE_ROOT__ . 'views/landing.php');
      } else {
        echo '<section class="section"><div class="section-inner">';

        // Render the actual WebEngine module exactly like default template.
        if(isset($handler) && is_object($handler) && method_exists($handler, 'loadModule')){
          $handler->loadModule($_REQUEST['page'], $_REQUEST['subpage']);
        } else {
          echo '<div class="card"><h3>Module</h3><p>No se encontró <code>$handler->loadModule()</code>. Esto indica que el core no inyectó el handler en el template. Confirma que WebEngine está cargando este template como el default.</p></div>';
        }

        echo '</div></section>';
      }
    ?>

  </div>
</div>

<?php include(__PATH_TEMPLATE_ROOT__ . 'views/footer.php'); ?>
