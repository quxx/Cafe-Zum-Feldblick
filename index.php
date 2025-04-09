<?php

/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();

$page_id = get_option('page_for_posts');
?>
<section id="home" class="position-relative overflow-hidden">
	<div class="d-flex min-vh-100" lc-helper="video-bg">
		<video style="object-fit: cover; object-position: 50% 50%;" class="w-100 min-vh-100 parallax-video" autoplay preload="auto" muted loop playsinline>
			<!-- adjust object-position to tweak cropping on mobile -->
			<source src="<?php echo get_template_directory_uri(); ?>/assets/img/header-video.mp4" type="video/mp4">
		</video>
	</div>
</section>
<section class="container-fluid block block-padding ps-5 pe-5 wiese">
	<div editable="rich" class="text-center oeffnungzeiten">
		<p class="h-small text-uppercase">Herzlich Willkommen im</p>
		<!-- <h1 class="text-uppercase">Fahrradcafé zum Feldblick</h1> -->
		<div style="z-index:2;" class="text-light col-12 brand">
			<div class="lc-block mb-4">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_original_mit_rand.svg" alt="logo" />
			</div>
		</div>
		<p class="text-center vorstellung">
			Genieße bei uns eine Pause vom Alltag und lass dich von der Ruhe und Schönheit der Natur verzaubern. Ob auf einer Fahrradtour oder einfach auf der Suche nach einem besonderen Ort – hier findest du genau das Richtige.
			<br>Wir verwöhnen dich mit hausgemachtem Kuchen, frischem Kaffee, kleinen Speisen, Bier und Wein.
			<br>Erlebe einen gemütlichen Ort in der Natur – perfekt für Genuss, Entspannung und schöne Gespräche.
			<br><br>Wir freuen uns auf deinen Besuch!
		</p>
		<br>
		<p class="text-uppercase h-small">
			Öffnungszeiten
		</p>



		<?php
		// Pods-Instanz für den benutzerdefinierten Post-Typ 'oeffnungszeit' abrufen
		$mypod = pods('oeffnungszeit');

		// Überprüfen, ob $mypod erfolgreich initialisiert wurde
		if ($mypod && $mypod->find()) {
			$opening_hours = '';

			// Öffnungszeiten-Daten aus Pods abrufen
			while ($mypod->fetch()) {
				$opening_hours = $mypod->display('text');
			}

			// Gruppierte Öffnungszeiten anzeigen
			if (!empty($opening_hours)) {
				echo '<p class="lead">';
				// Öffnungszeiten in HTML formatieren
				echo str_replace(['<p>', '</p>'], '', $opening_hours);
				echo '</p>';
			} else {
				// Fallback-Text für leere Ergebnisse
				echo '<p class="lead">Keine Öffnungszeiten verfügbar.</p>';
			}
		} else {
			// Fehler-Handling, wenn Pods-Instanz nicht verfügbar ist
			echo '<p class="lead">Fehler: Öffnungszeiten konnten nicht geladen werden.</p>';
		}
		?>
	</div>
</section>

<section class="container-fluid pe-0 ps-0 ms-0 me-0 block riss-container">
	<div class="riss-svg"></div>
	<div class="row pe-0 ps-0 me-0">
		<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-1.jpg" height="auto" alt="Das Fahrradcafe von vorne">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-schild.jpg" height="auto" alt="Fahrradcafe Holzschild">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-garten.jpg" height="auto" alt="Gartenansicht vom Fahrradcafe">
		</div>
	</div>
	<div class="riss-svg bottom"></div>
</section>
<section class="container-fluid pe-0 ps-0 ms-0 me-0 block block-padding">
	<div class="text-center">
		<h1 class="text-uppercase">Aktuelles</h1>
		<p class="text-center ps-5 pe-5">
			Aktuelles zu Events und Veranstaltungen
		</p>
	</div>
	<div class="container px-4 pt-3">
		<div class="row">
			<?php
			query_posts('posts_per_page=4');
			$i = 0;
			while (have_posts()) : the_post(); ?>
				<div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-5<?php if ($i >= 2) echo ' d-none' ?><?php if ($i == 2) echo ' d-lg-flex' ?><?php if ($i == 3) echo ' d-xl-flex' ?>" onclick="document.location='<?php the_permalink(); ?>'">
					<div class="card border-0">
						<?php
						if (has_post_thumbnail()) {
							echo '<img class="card-img-top card-img" src="' . get_the_post_thumbnail_url() . '" alt="Card image cap">';
						} else {
							echo '<img class="card-img-top card-img" src="' . get_template_directory_uri() . '/assets/img/fahrradcafe-schild-2.jpg" alt="Card image cap">';
						}
						?>
						<div class="card-body">
							<h5 class="card-title"><?php echo get_the_title(); ?></h5>
							<p class="card-text"><?php echo get_the_excerpt(); ?></p>
						</div>
						<div class="card-footer">
							<small class="text-muted"><?php echo get_the_date() ?></small>
						</div>
					</div>
				</div>
			<?php
				$i++;
			endwhile;
			wp_reset_query(); ?>
		</div>
		<div class="row justify-content-center">
			<a href="<?php echo site_url('/aktuelles'); ?>" class="btn btn-outline-primary btn-block col-4">Mehr anzeigen</a>
		</div>
	</div>
</section>
<section class="container-fluid pe-0 ps-0 ms-0 me-0 block riss-container">
	<div class="riss-svg"></div>
	<div class="row pe-0 ps-0 me-0">
		<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-getraenk.jpg" height="auto" alt="Das Fahrradcafe von vorne">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-tor.jpg" height="auto" alt="Fahrradcafe Holzschild">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-getraenk2.jpg" height="auto" alt="Gartenansicht vom Fahrradcafe">
		</div>
	</div>
	<div class="riss-svg bottom"></div>
</section>
<section class="container-fluid block block-padding ps-5 pe-5">
	<div editable="rich" class="text-center oeffnungzeiten">
		<p class="h-small text-uppercase">Auszug aus unserer</p>
		<h1 class="text-uppercase">Speisekarte</h1>
		<p class="text-center ps-md-5 pe-md-5 mb-5">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
			<br>invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
			<br>accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
		</p>

		<div class="row pe-0 ps-0 me-0">

			<?php
			// Hol dir das Pods-Objekt für den Custom Post Type "speise"
			$pods = pods('speise');

			if ($pods && $pods->find()) {
				// Speise-Daten aus Pods abrufen
				while ($pods->fetch()) {
					$auszug = $pods->display('in_auszug_aus_der_speisekarte_zeigen');
					if ($auszug == 'Ja') {
						$bezeichnung = $pods->display('bezeichnung');
						$preis = $pods->display('preis');
						$beschreibung = $pods->display('beschreibung');
						if (!empty($bezeichnung)) {
							echo '<div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="mkd-pli-content-holder d-flex flex-column align-items-start">
									<div class="mkd-pli-title-holder d-flex justify-content-between align-items-end w-100">';
							echo '<h5 class="mkd-pli-title entry-title m-0">' . esc_html($bezeichnung) . '</h5>';
							echo '<div class="mkd-pli-dots" style="border-color: rgba(71,71,71,0.2);border-style: dashed"></div>';
							echo '<h5 class="mkd-pli-price m-0" style="color: #ae9974">' . esc_html($preis) . '</h5>';
							echo '</div>
									<div class="mkd-pli-bottom-content">
									<div class="mkd-pli-desc clearfix" style="color: #808285">';
							echo '<p>' . esc_html($beschreibung) . '</p>';
							echo '</div>
									</div>
									</div>
									</div>';
						} else {
							// Fallback-Text für leere Ergebnisse
							echo '<p class="lead">Keine Speisekarte verfügbar.</p>';
						}
					}
				}
			} else {
				// Fehler-Handling, wenn Pods-Instanz nicht verfügbar ist
				echo '<p class="lead">Fehler: Speisekarte konnte nicht geladen werden.</p>';
			}

			?>
		</div>
		<div class="row justify-content-center">
			<a href="" class="btn btn-outline-primary btn-block col-lg-4 col-md-4 col-sm-6 col-xs-6">Zur Speisekarte</a>
		</div>
		<!-- <div class="row pe-0 ps-0 me-0">
			<div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="mkd-pli-content-holder d-flex flex-column align-items-start">
					<div class="mkd-pli-title-holder d-flex justify-content-between align-items-end w-100">
						<h5 itemprop="name" class="mkd-pli-title entry-title m-0" style="color: #1f1f1f">RUCOLA SALAT</h5>
						<div class="mkd-pli-dots" style="border-color: rgba(71,71,71,0.2);border-style: dashed"></div>
						
							<h5 class="mkd-pli-price m-0" style="color: #ae9974">9.9</h5>
						
					</div>
					<div class="mkd-pli-bottom-content">
						<div class="mkd-pli-desc clearfix" style="color: #808285">
							<p>Mit getrockneten Tomaten und Parmesan</p>
						</div>
					</div>
				</div>
			</div>
			<div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="mkd-pli-content-holder d-flex flex-column align-items-start">
					<div class="mkd-pli-title-holder d-flex justify-content-between align-items-end w-100">
						<h5 itemprop="name" class="mkd-pli-title entry-title m-0" style="color: #1f1f1f">RUCOLA SALAT</h5>
						<div class="mkd-pli-dots" style="border-color: rgba(71,71,71,0.2);border-style: dashed"></div>
						
							<h5 class="mkd-pli-price m-0" style="color: #ae9974">9.9</h5>
						
					</div>
					<div class="mkd-pli-bottom-content">
						<div class="mkd-pli-desc clearfix" style="color: #808285">
							<p>Mit getrockneten Tomaten und Parmesan</p>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</section>
<section class="container-fluid pe-0 ps-0 ms-0 me-0 block riss-container">
	<div class="riss-svg"></div>
	<div class="row pe-0 ps-0 me-0">
		<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-fahrrad.jpg" height="auto" alt="Das Fahrradcafe von vorne">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-katze.jpg" height="auto" alt="Fahrradcafe Holzschild">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-ausblick.jpg" height="auto" alt="Gartenansicht vom Fahrradcafe">
		</div>
	</div>
	<div class="riss-svg bottom"></div>
</section>
<section class="container-fluid block block-padding ps-5 pe-5 kontakt" id="kontakt">
	<div class="text-center">
		<h1 class="text-uppercase">Kontakt</h1>
		<p class="text-center ps-md-5 pe-md-5">
			Ihr plant einen Besuch mit einer größeren Gruppe oder habt eine spezielle Anfrage? <br>
			Ihr möchtet eine Feier, einen Brunch oder ein anderes Event bei uns organisieren? <br>
			Wir freuen uns auf eure Nachricht!
		</p>
	</div>
	<div class="row justify-content-center">
		<a href="<?php echo site_url('/kontakt'); ?>" class="btn btn-outline-primary btn-block col-4">Schreib uns</a>
	</div>

</section>
<?php
get_footer();
?>
