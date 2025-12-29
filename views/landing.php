<?php if(!defined('access')) die(); ?>
<section id="home" class="section hero">
  <div class="hero-bg" aria-hidden="true"></div>
  <div class="section-inner hero-inner">
    <div class="hero-content">
      <div class="kicker"><span class="dot"></span> MU Online • Custom Server</div>
      <h1>Step into darkness,<br><span>embrace the power</span> of MU</h1>
      <p class="lead">
        Bienvenido a <b><?php echo config('server_name'); ?></b> — Season 8 Episode 3.
        Progresión clásica, economía controlada y eventos que realmente importan.
      </p>
      <div class="hero-actions">
        <a class="btn frame" href="#download">Play now</a>
        <a class="btn ghost" href="#features">View features</a>
        <a class="btn ghost" href="<?php echo __BASE_URL__ ?>rankings">Rankings</a>
      </div>
    </div>

    <div class="hero-side">
      <div class="card">
        <h3>Progression</h3>
        <p>Spots definidos y rutas claras. Nada de “full de regalo” que mata el server en 1 semana.</p>
      </div>
      <div class="card">
        <h3>Events</h3>
        <p>Blood Castle, Devil Square e invasiones con propósito (XP / jewels / competencia).</p>
      </div>
      <div class="card">
        <h3>Economy</h3>
        <p>Jewels por mapa y control de drops para evitar inflación absurda.</p>
      </div>
    </div>
  </div>
</section>

<section id="features" class="section section-landing">
  <div class="section-inner">
    <div class="section-title">
      <h2>Features</h2>
      <div class="sub">Cyan + negro. Tradición MU, con futuro.</div>
    </div>
    <div class="grid-4">
      <div class="feature"><b>MU Remastered</b><p>Look oscuro y UI limpia. Moderno sin perder identidad.</p></div>
      <div class="feature"><b>Legend Reborn</b><p>Contenido clásico y estable para largo plazo.</p></div>
      <div class="feature"><b>Endless Progression</b><p>Builds reales. La mejora se gana jugando.</p></div>
      <div class="feature"><b>Epic Events</b><p>Eventos constantes con rewards coherentes.</p></div>
    </div>
  </div>
</section>

<section id="about" class="section section-landing">
  <div class="section-inner">
    <div class="section-title">
      <h2>About</h2>
      <div class="sub">Información clara, sin humo.</div>
    </div>

    <div class="two-col">
      <div class="card">
        <h3>Enter the legendary world</h3>
        <p>
          <?php echo config('server_name'); ?> está diseñado para durar: balance, progresión y comunidad.
          Si algo rompe la economía, se corrige. Si algo es divertido, se potencia.
        </p>
        <div style="margin-top:12px;display:flex;gap:10px;flex-wrap:wrap">
          <a class="btn frame" href="<?php echo __BASE_URL__ ?>register">Register</a>
          <a class="btn ghost" href="<?php echo __BASE_URL__ ?>rankings">Rankings</a>
        </div>
      </div>
      <div class="media" aria-hidden="true"></div>
    </div>
  </div>
</section>

<section id="gameplay" class="section section-landing">
  <div class="section-inner">
    <div class="section-title">
      <h2>Gameplay</h2>
      <div class="sub">Cambia esto por screenshots reales.</div>
    </div>

    <div class="grid-3">
      <div class="thumb"></div>
      <div class="thumb"></div>
      <div class="thumb"></div>
    </div>

    <div style="margin-top:14px;text-align:center">
      <p class="lead" style="max-width:none">
        Discover epic gameplay and challenging dungeons.
      </p>
    </div>
  </div>
</section>