<?php
    $serverStatus = ( CheckGS('190.102.43.191', 55900) == true ) ? 'Online' : 'Offline';
?>
<aside class="sidebar" aria-label="Barra lateral">
  <div class="server-card">
    <div class="server-row">
      <div class="pill"><?php echo config('server_name'); ?></div>
    </div>
    <div class="status">Version: <b>Season 8 Ep 3</b></div>
    <div class="status">Status: <b><?php echo $serverStatus; ?></b></div>
    <div class="status">Players: <b><?php echo $onlinePlayers; ?>/<?php echo $maxOnline; ?></b></div>

  </div>

  <a class="btn primary" style="width:100%;justify-content:center;margin-top:14px"
     href="<?php echo __BASE_URL__ ?>download">Play now</a>

  <div class="side-menu" role="navigation" aria-label="Secciones">
    <a data-spy-link href="<?php echo __BASE_URL__ ?>#home">Home</a>
    <a data-spy-link href="<?php echo __BASE_URL__ ?>#features">Features</a>
    <a data-spy-link href="<?php echo __BASE_URL__ ?>#about">About</a>
    <a data-spy-link href="<?php echo __BASE_URL__ ?>#gameplay">Gameplay</a>
    <a data-spy-link href="<?php echo __BASE_URL__ ?>#download">Download</a>

    <a href="<?php echo __BASE_URL__ ?>rankings">Rankings</a>
    <a href="<?php echo __BASE_URL__ ?>register">Registration</a>
    <a href="<?php echo __BASE_URL__ ?>download">Client Download</a>
  </div>

  <?php  if(isLoggedIn()) { ?>
  <div class="server-card">
    <?php
      echo '<h3 class="panel-title">'.lang('usercp_menu_title').'</h3>';
      echo '<div class="panel-body">';
          templateBuildUsercp();
      echo '</div>';
    ?>
  </div>
  <?php } ?>
</aside>
