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
	<div class="d-flex video-height" lc-helper="video-bg">
		<video id="hero-video"
			style="object-fit: cover; object-position: 50% 50%;"
			class="w-100 video-height parallax-video"
			autoplay
			preload="auto"
			muted
			loop
			playsinline>
		</video>
	</div>
</section>
<section class="container-fluid block block-padding ps-5 pe-5 wiese">
	<div editable="rich" class="text-center oeffnungzeiten">
		<p class="h-small text-uppercase">Herzlich Willkommen im</p>
		<!-- <h1 class="text-uppercase">Fahrradcafé zum Feldblick</h1> -->
		<div style="z-index:2;" class="text-light col-12 brand">
			<div class="lc-block mb-4">
				<img loading="lazy" decoding="async" class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_original.svg" alt="logo" />
			</div>
		</div>
		<p class="text-center vorstellung">
			Genießt bei uns eine Pause vom Alltag und lasst euch von der Ruhe und Schönheit der Natur verzaubern. Ob auf einer Fahrradtour oder einfach auf der Suche nach einem besonderen Ort – hier findet ihr genau das Richtige.
			<br>Wir verwöhnen euch mit hausgemachtem Kuchen, frischem Kaffee, kleinen Speisen, Bier und Wein.
			<br>Erlebt einen gemütlichen Ort in der Natur – perfekt für Genuss, Entspannung und schöne Gespräche.
			<br><br>Wir freuen uns auf euren Besuch!
		</p>
		<br>
		<p class="text-uppercase h1 h-small">
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
				$info = $mypod->display('info');
			}

			if (!empty($info)) {
				echo '<p class="h2 h-small">';
				echo str_replace(['<p>', '</p>'], '', $info);
				echo '</p>';
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
			<img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-1.jpg" height="auto" alt="Fahrradcafe Scheune und außenbereich">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-schild.jpg" height="auto" alt="Fahrradcafe Holzschild">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-garten.jpg" height="auto" alt="Gartenansicht vom Fahrradcafe">
		</div>
	</div>
	<div class="riss-svg bottom"></div>
</section>
<section class="container-fluid pe-0 ps-0 ms-0 me-0 block block-padding">
	<div class="text-center">
		<h1 class="text-uppercase">Aktuelles</h1>
		<p class="text-center ps-5 pe-5">
			Hier erfahrt ihr, was bei uns los ist – aktuelle Events, besondere Tage und alles, was ihr nicht verpassen solltet.
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
						<div class="card-body position-relative">
							<h5 class="card-title"><?php echo get_the_title(); ?></h5>
							<p class="card-text"><?php echo get_the_excerpt(); ?></p>
							<u class="position-absolute bottom-0 readMore text-muted mb-0">Weiterlesen</u>
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
			<a href="<?php echo site_url('/aktuelles'); ?>" class="btn btn-outline-primary btn-block col-lg-4 col-md-4 col-sm-6 col-xs-6">Mehr anzeigen</a>
		</div>
	</div>
</section>
<section class="container-fluid pe-0 ps-0 ms-0 me-0 block riss-container">
	<div class="riss-svg"></div>
	<div class="row pe-0 ps-0 me-0">
		<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-getraenk.jpg" height="auto" alt="Das Fahrradcafe von vorne">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-tor.jpg" height="auto" alt="Fahrradcafe Holzschild">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-getraenk2.jpg" height="auto" alt="Gartenansicht vom Fahrradcafe">
		</div>
	</div>
	<div class="riss-svg bottom"></div>
</section>
<section class="container-fluid block block-padding ps-5 pe-5 speisen">
	<div editable="rich" class="text-center container">
		<p class="h-small text-uppercase">Auszug aus unserer</p>
		<h1 class="text-uppercase">Speisekarte</h1>
		<p class="text-center ps-md-5 pe-md-5 mb-5">
			Bei uns erwartet euch eine köstliche Auswahl an frisch gebackenen Waffeln, hausgemachten Kuchen,
			<br>original DDR-Softeis, kleinen Speisen sowie aromatischem Kaffee und erfrischenden
			<br>Getränken – wir freuen uns darauf, euch bei uns verwöhnen zu dürfen.
		</p>

		<div class="row pe-0 ps-0 me-0 text-start">
			<?php
			function zeige_speisekarte_auszug($pods_instance, &$counter, $max = 8)
			{
				if ($pods_instance && $pods_instance->find()) {
					while ($pods_instance->fetch() && $counter < $max) {
						$auszug = $pods_instance->display('in_auszug_aus_der_speisekarte_zeigen');
						if ($auszug == 'Ja') {
							$bezeichnung = useNonBreakingSpace($pods_instance->display('bezeichnung'));
							$preis1 = $pods_instance->display('preis1');
							$preis2 = $pods_instance->display('preis2');
							$beschreibung = useNonBreakingSpace($pods_instance->display('beschreibung'));
							$beschreibung2 = useNonBreakingSpace($pods_instance->display('beschreibung2'));

							if (!empty($bezeichnung)) {
								echo '<div class="eintrag col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="d-flex flex-column align-items-start">
									<div class="d-flex justify-content-between align-items-end w-100">
									<div class="dots-container">';
								echo '<h5 class="entry-title m-0"><span>' . esc_html($bezeichnung) . '</span></h5>';
								echo '<div class="mkd-pli-dots" style="border-color: rgba(71,71,71,0.2);border-style: dashed"></div>
									</div>';
								echo '<h5 class="mkd-pli-price m-0">' . esc_html($preis1) . '';
								if (!empty($preis2)) {
									echo ' / ' . esc_html($preis2) . '</h5>';
								} else {
									echo '</h5>';
								}
								echo '</div>
									<div>
									<div class="mkd-pli-desc clearfix">';
								echo '<p>' . esc_html($beschreibung) . '';
								if (!empty($beschreibung2)) {
									echo '<br>' . esc_html($beschreibung2) . '</p>';
								} else {
									echo '</p>';
								}
								echo '</div>
									</div>
									</div>
									</div>';
								$counter++; // Eintrag zählt mit
							}
						}
					}
				} else {
					// Fehler-Handling, wenn Pods-Instanz nicht verfügbar ist
					echo '<p class="lead">Fehler: Speisekarte konnte nicht geladen werden.</p>';
				}
			}

			// Zähler-Variable initialisieren
			$eintrags_zaehler = 0;
			$max_eintraege = 8;

			// Pods-Instanzen
			$heiss = pods('heissgetranke');
			$nonalk = pods('alkoholfreie_getraen');
			$alk = pods('alkoholische_getrank');
			$kuchen = pods('kuchen_und_susses');
			$herzhaft = pods('herzhaftes');
			$spezi = pods('spezialitaten_aus_de');

			// Auszug anzeigen – in Reihenfolge prüfen, bis 8 erreicht sind
			zeige_speisekarte_auszug($herzhaft, $eintrags_zaehler, $max_eintraege);
			zeige_speisekarte_auszug($kuchen, $eintrags_zaehler, $max_eintraege);
			zeige_speisekarte_auszug($heiss, $eintrags_zaehler, $max_eintraege);
			zeige_speisekarte_auszug($nonalk, $eintrags_zaehler, $max_eintraege);
			zeige_speisekarte_auszug($alk, $eintrags_zaehler, $max_eintraege);
			zeige_speisekarte_auszug($spezi, $eintrags_zaehler, $max_eintraege);
			?>
		</div>
		<div class="row justify-content-center">
			<a href="<?php echo site_url('/speisekarte'); ?>" class="btn btn-outline-primary btn-block col-lg-4 col-md-4 col-sm-6 col-xs-6">Zur Speisekarte</a>
		</div>
	</div>
</section>
<section class="container-fluid pe-0 ps-0 ms-0 me-0 block riss-container">
	<div class="riss-svg"></div>
	<div class="row pe-0 ps-0 me-0">
		<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-fahrrad.jpg" height="auto" alt="Das Fahrradcafe von vorne">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-katze.jpg" height="auto" alt="Fahrradcafe Holzschild">
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 imagetiles pe-0 ps-0">
			<img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/img/fahrradcafe-ausblick.jpg" height="auto" alt="Gartenansicht vom Fahrradcafe">
		</div>
	</div>
	<div class="riss-svg bottom"></div>
</section>
<section class="container-fluid block block-padding ps-5 pe-5 kontakt" id="kontakt">
	<div class="text-center">
		<h1 class="text-uppercase">Kontakt</h1>
		<p class="text-center ps-md-5 pe-md-5">
			Ihr plant einen Besuch mit einer größeren Gruppe oder habt eine spezielle Anfrage?<br>
			Oder möchtet ihr eine Feier oder ein Event bei uns organisieren?<br>
			Dann schreibt uns – wir freuen uns auf eure Nachricht!
		</p>
	</div>
	<div class="row justify-content-center">
		<a href="<?php echo site_url('/kontakt'); ?>" class="btn btn-outline-primary btn-block col-lg-4 col-md-4 col-sm-6 col-xs-6">Schreibt uns</a>
	</div>

</section>
<?php
get_footer();
?>
