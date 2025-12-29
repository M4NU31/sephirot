<aside class="sidebar" aria-label="Barra lateral">
  <div class="server-card">
    <div class="server-row">
      <div class="pill"><?php echo config('server_name'); ?></div>
      <div class="pill">Online</div>
    </div>
    <div class="status">Version: <b>Season 8 Ep 3</b></div>
    <div class="status">Status: <b>Online</b></div>
  </div>

  <div class="side-menu" role="navigation" aria-label="Secciones">
    <a data-spy-link href="#home">Home</a>
    <a data-spy-link href="#features">Features</a>
    <a data-spy-link href="#about">About</a>
    <a data-spy-link href="#gameplay">Gameplay</a>
    <a data-spy-link href="#download">Download</a>

    <a href="<?php echo __BASE_URL__ ?>rankings">Rankings</a>
    <a href="<?php echo __BASE_URL__ ?>register">Registration</a>
    <a href="<?php echo __BASE_URL__ ?>download">Client Download</a>
  </div>

  <a class="btn primary" style="width:100%;justify-content:center;margin-top:14px"
     href="<?php echo __BASE_URL__ ?>download">Play now</a>
</aside>
