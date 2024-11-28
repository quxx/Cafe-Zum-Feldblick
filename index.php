<?php

/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();

$page_id = get_option('page_for_posts');
?>
<section class="position-relative overflow-hidden">
	<div class="d-flex min-vh-100" lc-helper="video-bg">
		<video style="object-fit: cover; object-position: 50% 50%;" class="w-100 min-vh-100 parallax-video" autoplay preload muted loop playsinline>
			<!-- adjust object-position to tweak cropping on mobile -->
			<source src="<?php echo get_template_directory_uri(); ?>/assets/img/header-video.mp4" type="video/mp4">
		</video>
		<div style="z-index:2" class="align-self-center text-center text-light col-md-8 offset-md-2">
			<div class="lc-block mb-4">
				<div editable="rich">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_weiss.svg" alt="logo" style="width:60%;" />
				</div>
			</div>
		</div>
	</div>
</section>
<section class="container-fluid block block-padding ps-5 pe-5">
	<div editable="rich" class="text-center oeffnungzeiten">
		<p class="h-small text-uppercase">Herzlich Wilkommen im</p>
		<h1 class="text-uppercase">Fahrradcafé zum Feldblick</h1>
		<p class="text-center ps-5 pe-5">
			Genießen Sie bei uns eine Pause vom Alltag und lassen Sie sich von der Ruhe und Schönheit der Natur verzaubern. Ob auf einer Fahrradtour oder einfach auf der Suche nach einem besonderen Ort – hier finden Sie genau das Richtige.
			<br>Wir verwöhnen Sie mit hausgemachtem Kuchen, frischem Kaffee, kleinen Speisen, Bier und Wein.
			<br>Erleben Sie einen gemütlichen Ort in der Natur – perfekt für Genuss, Entspannung und schöne Gespräche.
			<br><br>Wir freuen uns auf Ihren Besuch!
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

<section class="container-fluid pe-0 ps-0 ms-0 me-0 block">
	<div class="row pe-0 ps-0 me-0">
		<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-1.jpeg" height="auto" alt="Das Fahrradcafe von vorne">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-schild.jpg" height="auto" alt="Fahrradcafe Holzschild">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-garten.jpg" height="auto" alt="Gartenansicht vom Fahrradcafe">
		</div>
	</div>
</section>
<section class="container-fluid pe-0 ps-0 ms-0 me-0 block block-padding">
	Aktuelles
	<div class="container">
		<div class="card-deck row gx-5">
			<?php
			query_posts('posts_per_page=4');
			while (have_posts()) : the_post(); ?>
				<div class="card col-3 border-0">
					<img class="card-img-top card-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title"><?php echo get_the_title(); ?></h5>
						<p class="card-text"><?php echo get_the_excerpt(); ?></p>
					</div>
					<div class="card-footer">
						<small class="text-muted"><?php echo get_the_date() ?></small>
					</div>
				</div>
			<?php endwhile;
			wp_reset_query(); ?>
		</div>
	</div>
</section>
<section class="container-fluid pe-0 ps-0 ms-0 me-0 block">
	<div class="row pe-0 ps-0 me-0">
		<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-getraenk.jpeg" height="auto" alt="Das Fahrradcafe von vorne">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-tor.jpg" height="auto" alt="Fahrradcafe Holzschild">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-getraenk2.jpeg" height="auto" alt="Gartenansicht vom Fahrradcafe">
		</div>
	</div>
</section>
<div class="bg-white">
	Speisekarte
</div>
<section class="container-fluid pe-0 ps-0 ms-0 me-0 block">
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
</section>
<section class="container-fluid block block-padding kontakt">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-8">
				<?php
				echo do_shortcode(
					'[contact-form-7 title="Kontakt"]'
				);
				?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>
