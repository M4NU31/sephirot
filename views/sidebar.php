<?php
$serverStatus = (CheckGS('190.102.43.191', 55900) == true) ? 'Online' : 'Offline';
?>
<aside class="sidebar" aria-label="Barra lateral">

  <a class="btn primary" style="width:100%;justify-content:center;"
    href="<?php echo __BASE_URL__ ?>download">Play now</a>

  <div class="side-menu" role="navigation" aria-label="Secciones">
    <a data-spy-link href="<?php echo __BASE_URL__ ?>#home">Home</a>
    <a data-spy-link href="<?php echo __BASE_URL__ ?>rankings">Rankings</a>
    <a data-spy-link href="<?php echo __BASE_URL__ ?>donation">Donation</a>
  </div>

  <div class="server-card" style="margin-bottom: 14px; margin-top: 14px;">
    <div class="server-row">
      <div class="pill">Server Info</div>
    </div>
    <div class="status">Version: <b>Season 8 Ep 3</b></div>
    <div class="status">Exp: <b>500x</b></div>
    <div class="status">Master Exp: <b>250x</b></div>
    <div class="status">Drop: <b>50%</b></div>
    <div class="status">Status: <b><?php echo $serverStatus; ?></b></div>
    <div class="status">Players: <b><?php echo $onlinePlayers; ?>/<?php echo $maxOnline; ?></b></div>
    <a href="<?php echo __BASE_URL__ ?>info"><b>More Info</b></a>

  </div>

  <?php if (isLoggedIn()) { ?>
    <div class="server-card user-panel-card">
      <?php
      echo '<div class="server-row">';
      echo '<div class="pill">' . lang('usercp_menu_title') . '</div>';
      echo '</div>';
      echo '<div class="panel-body">';
      templateBuildUsercp();
      echo '</div>';
      ?>
    </div>
  <?php } ?>
</aside>