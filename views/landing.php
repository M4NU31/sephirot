<?php if (!defined('access')) die(); ?>
<section id="home" class="section hero section-landing">
	<div class="section-inner hero-inner">
		<div class="heading-container">
			<h1 class="heading">Mu <b>Sephirot</b></h1>
			<p>Season 8 Ep 3</p>
		</div>
		<div class="text-box">
			<p>Mu SephiroT es un servidor pensado para disfrutar el progreso sin prisas ni atajos. Rates balanceados, resets claros, eventos activos y una experiencia clásica con mejoras modernas. Juegas, avanzas y mejoras tu personaje como debe ser.
				Entra, progresa y quédate.
			</p>
		</div>
		<div class="button-row">
			<a class="btn frame" href="<?php echo __BASE_URL__ ?>downloads">Download</a>
			<a class="btn frame" href="<?php echo __BASE_URL__ ?>register">Register</a>
		</div>
	</div>
</section>

<section id="news" class="section section-landing">
	<div class="section-inner">
		<div class="section-row">
			<div class="section-row-inner">
				<div class="section-column">
					<div class="section-column-inner">
						<div class="hero-slider" data-flickity='{ "wrapAround": true, "groupCells": true, "cellAlign": "left", "contain": true, "prevNextButtons": false, "pageDots": true }'>
							<div class="hero-slider-item hero-content">
								<div class="hero-slider-item-inner">
									this is slider item
								</div>
							</div>
							<div class="hero-slider-item hero-content">
								<div class="hero-slider-item-inner">
									this is slider item
								</div>
							</div>
							<div class="hero-slider-item hero-content">
								<div class="hero-slider-item-inner">
									this is slider item
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section-column">
					<div class="section-column-inner">
						<div class="section-news">
							<?php $handler->loadModule($_REQUEST['page'], $_REQUEST['subpage']); ?>
						</div>
					</div>
				</div>
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
			<div class="feature"><b>MU Remastered</b>
				<p>Look oscuro y UI limpia. Moderno sin perder identidad.</p>
			</div>
			<div class="feature"><b>Legend Reborn</b>
				<p>Contenido clásico y estable para largo plazo.</p>
			</div>
			<div class="feature"><b>Endless Progression</b>
				<p>Builds reales. La mejora se gana jugando.</p>
			</div>
			<div class="feature"><b>Epic Events</b>
				<p>Eventos constantes con rewards coherentes.</p>
			</div>
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