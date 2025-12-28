<?php if(!defined('access')) die(); ?>
<?php include(__PATH_TEMPLATE_ROOT__ . 'views/header.php'); ?>
<?php include(__PATH_TEMPLATE_ROOT__ . 'views/sidebar.php'); ?>

<div class="main">
  <div class="wrap">

    <?php
      /**
       * HOME/LANDING
       * Si WebEngine no está renderizando un módulo específico, mostramos la landing.
       */
      $is_home = true;

      // Algunos cores setean un módulo actual. Si existe y no es home, no mostramos landing.
      if(isset($module) && $module && $module !== 'home') $is_home = false;
      if(isset($_GET['module']) && $_GET['module'] && $_GET['module'] !== 'home') $is_home = false;

      if($is_home){
        include(__PATH_TEMPLATE_ROOT__ . 'views/landing.php');
      } else {
        // MODULE WRAPPER (Register/Login/Rankings/etc)
        echo '<section class="section"><div class="section-inner">';
        // WebEngine suele exponer el HTML del módulo en alguna variable.
        // Si tu base usa otro nombre, reemplaza SOLO estas líneas.
        if(isset($module_content)){
          echo $module_content;
        } elseif(isset($content)){
          echo $content;
        } else {
          echo '<div class="card"><h3>Module</h3><p>No module content variable found. Ajusta <code>$module_content</code> o <code>$content</code> según tu core.</p></div>';
        }
        echo '</div></section>';
      }
    ?>

  </div>
</div>

<?php include(__PATH_TEMPLATE_ROOT__ . 'views/footer.php'); ?>
