<?php
/* Template Name: Speisekarte */
get_header();
include_once("page-header.php");
?>
<section id="speisekarte" class="container-fluid pe-0 ps-0 ms-0 me-0 block">
	<div class="container px-4">
		<div id="speisen" class="row gx-3 row1 pb-5">
			<div class="text-center mb-5">
				<h1 class="title text-uppercase">Speisekarte</h1>
				<p class="subtitle text-center ps-md-5 pe-md-5">
					Unsere Speisen werden mit viel Liebe und frischen Zutaten zubereitet.
				</p>
			</div>
			<div class="col-12 col-md-6 align-content-top pe-md-4">
				<h2>KUCHEN UND SÜßES</h2>
				<?php
				// Hol dir das Pods-Objekt für den Custom Post Type "speise"
				$pods = pods('kuchen_und_susses');
				if ($pods && $pods->find()) {
					// Speise-Daten aus Pods abrufen
					while ($pods->fetch()) {
						$bezeichnung = $pods->display('bezeichnung');
						$preis1 = $pods->display('preis1');
						$preis2 = $pods->display('preis2');
						$beschreibung = $pods->display('beschreibung');
						if (!empty($bezeichnung)) {
							echo '<div class="col-12">
								<div class="mkd-pli-content-holder d-flex flex-column align-items-start">
								<div class="mkd-pli-title-holder d-flex justify-content-between align-items-end w-100">';
							echo '<h5 class="mkd-pli-title entry-title m-0">' . esc_html($bezeichnung) . '</h5>';
							echo '<div class="mkd-pli-dots" style="border-color: rgba(71,71,71,0.2);border-style: dashed"></div>';
							echo '<h5 class="mkd-pli-price m-0">' . esc_html($preis1) . '';
							if (!empty($preis2)) {
								echo ' / ' . esc_html($preis2) . '</h5>';
							} else {
								echo '</h5>';
							}
							echo '</div>
								<div class="mkd-pli-bottom-content">
								<div class="mkd-pli-desc clearfix">';
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
				} else {
					// Fehler-Handling, wenn Pods-Instanz nicht verfügbar ist
					echo '<p class="lead">Fehler: Speisekarte konnte nicht geladen werden.</p>';
				}
				?>
			</div>
			<div class="col-12 col-md-6 align-content-top ps-md-4">
				<h2 class="text-uppercase">Herzhaftes</h2>
				<?php
				// Hol dir das Pods-Objekt für den Custom Post Type "speise"
				$pods = pods('herzhaftes');
				if ($pods && $pods->find()) {
					// Speise-Daten aus Pods abrufen
					while ($pods->fetch()) {
						$bezeichnung = $pods->display('bezeichnung');
						$preis1 = $pods->display('preis1');
						$preis2 = $pods->display('preis2');
						$beschreibung = $pods->display('beschreibung');
						if (!empty($bezeichnung)) {
							echo '<div class="col-12">
								<div class="mkd-pli-content-holder d-flex flex-column align-items-start">
								<div class="mkd-pli-title-holder d-flex justify-content-between align-items-end w-100">';
							echo '<h5 class="mkd-pli-title entry-title m-0">' . esc_html($bezeichnung) . '</h5>';
							echo '<div class="mkd-pli-dots" style="border-color: rgba(71,71,71,0.2);border-style: dashed"></div>';
							echo '<h5 class="mkd-pli-price m-0">' . esc_html($preis1) . '';
							if (!empty($preis2)) {
								echo ' / ' . esc_html($preis2) . '</h5>';
							} else {
								echo '</h5>';
							}
							echo '</div>
								<div class="mkd-pli-bottom-content">
								<div class="mkd-pli-desc clearfix">';
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
				} else {
					// Fehler-Handling, wenn Pods-Instanz nicht verfügbar ist
					echo '<p class="lead">Fehler: Speisekarte konnte nicht geladen werden.</p>';
				}
				?>
			</div>
		</div>
		<div class="linie"></div>
		<div id="getraenke" class="row gx-3 row2 pb-5">
			<div class="text-center mb-5">
				<h1 class="title text-uppercase">Getränke</h1>
				<p class="subtitle text-center ps-md-5 pe-md-5">
					Genussvolle Vielfalt - ob heiß, kalt oder prickelnd
				</p>
			</div>
			<div class="col-12 col-md-6 align-content-top pe-md-4">
				<h2>HEIßGETRÄNKE</h2>
				<?php
				// Hol dir das Pods-Objekt für den Custom Post Type "speise"
				$pods = pods('heissgetranke');
				if ($pods && $pods->find()) {
					// Speise-Daten aus Pods abrufen
					while ($pods->fetch()) {
						$bezeichnung = $pods->display('bezeichnung');
						$preis1 = $pods->display('preis1');
						$preis2 = $pods->display('preis2');
						$beschreibung = $pods->display('beschreibung');
						if (!empty($bezeichnung)) {
							echo '<div class="col-12">
								<div class="mkd-pli-content-holder d-flex flex-column align-items-start">
								<div class="mkd-pli-title-holder d-flex justify-content-between align-items-end w-100">';
							echo '<h5 class="mkd-pli-title entry-title m-0">' . esc_html($bezeichnung) . '</h5>';
							echo '<div class="mkd-pli-dots" style="border-color: rgba(71,71,71,0.2);border-style: dashed"></div>';
							echo '<h5 class="mkd-pli-price m-0">' . esc_html($preis1) . '';
							if (!empty($preis2)) {
								echo ' / ' . esc_html($preis2) . '</h5>';
							} else {
								echo '</h5>';
							}
							echo '</div>
								<div class="mkd-pli-bottom-content">
								<div class="mkd-pli-desc clearfix">';
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
				} else {
					// Fehler-Handling, wenn Pods-Instanz nicht verfügbar ist
					echo '<p class="lead">Fehler: Speisekarte konnte nicht geladen werden.</p>';
				}
				?>
				<h2 class="text-uppercase pt-3">Alkoholfreie Getränke</h2>
				<?php
				// Hol dir das Pods-Objekt für den Custom Post Type "speise"
				$pods = pods('alkoholfreie_getraen');
				if ($pods && $pods->find()) {
					// Speise-Daten aus Pods abrufen
					while ($pods->fetch()) {
						$bezeichnung = $pods->display('bezeichnung');
						$preis1 = $pods->display('preis1');
						$preis2 = $pods->display('preis2');
						$beschreibung = $pods->display('beschreibung');
						if (!empty($bezeichnung)) {
							echo '<div class="col-12">
								<div class="mkd-pli-content-holder d-flex flex-column align-items-start">
								<div class="mkd-pli-title-holder d-flex justify-content-between align-items-end w-100">
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
								<div class="mkd-pli-bottom-content">
								<div class="mkd-pli-desc clearfix">';
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
				} else {
					// Fehler-Handling, wenn Pods-Instanz nicht verfügbar ist
					echo '<p class="lead">Fehler: Speisekarte konnte nicht geladen werden.</p>';
				}
				?>
			</div>
			<div class="col-12 col-md-6 align-content-top ps-md-4">
				<h2 class="text-uppercase">Alkoholische Getränke</h2>
				<?php
				// Hol dir das Pods-Objekt für den Custom Post Type "speise"
				$pods = pods('alkoholische_getrank');
				if ($pods && $pods->find()) {
					// Speise-Daten aus Pods abrufen
					while ($pods->fetch()) {
						$bezeichnung = $pods->display('bezeichnung');
						$preis1 = $pods->display('preis1');
						$preis2 = $pods->display('preis2');
						$beschreibung = $pods->display('beschreibung');
						if (!empty($bezeichnung)) {
							echo '<div class="col-12">
								<div class="mkd-pli-content-holder d-flex flex-column align-items-start">
								<div class="mkd-pli-title-holder d-flex justify-content-between align-items-end w-100">
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
								<div class="mkd-pli-bottom-content">
								<div class="mkd-pli-desc clearfix">';
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
				} else {
					// Fehler-Handling, wenn Pods-Instanz nicht verfügbar ist
					echo '<p class="lead">Fehler: Speisekarte konnte nicht geladen werden.</p>';
				}
				?>
			</div>
		</div>
		<div class="linie"></div>
		<div id="spezi" class="row gx-3 row3 pb-5">
			<div class="text-center mb-5">
				<h1 class="title text-uppercase">Spezialitäten aus der Region</h1>
				<p class="subtitle text-center ps-md-5 pe-md-5">
					Lausitzer Qualitätsweine für Kenner und Genießer
					<br>Leinöl, Gewürzgurken und Honig
				</p>
			</div>
			<?php
			// Hol dir das Pods-Objekt für den Custom Post Type "speise"
			$pods = pods('spezialitaten_aus_de');
			if ($pods && $pods->find()) {
				// Speise-Daten aus Pods abrufen
				while ($pods->fetch()) {
					$bezeichnung = $pods->display('bezeichnung');
					$preis1 = $pods->display('preis1');
					$preis2 = $pods->display('preis2');
					$beschreibung = $pods->display('beschreibung');
					$beschreibung2 = $pods->display('beschreibung2');
					if (!empty($bezeichnung)) {
						echo '<div class="eintrag col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="mkd-pli-content-holder d-flex flex-column align-items-start">
								<div class="mkd-pli-title-holder d-flex justify-content-between align-items-end w-100">';
						echo '<h5 class="mkd-pli-title entry-title m-0">' . esc_html($bezeichnung) . '</h5>';
						echo '<div class="mkd-pli-dots" style="border-color: rgba(71,71,71,0.2);border-style: dashed"></div>';
						echo '<h5 class="mkd-pli-price m-0">' . esc_html($preis1) . '';
						if (!empty($preis2)) {
							echo ' / ' . esc_html($preis2) . '</h5>';
						} else {
							echo '</h5>';
						}
						echo '</div>
								<div class="mkd-pli-bottom-content">
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
					} else {
						// Fallback-Text für leere Ergebnisse
						echo '<p class="lead">Keine Speisekarte verfügbar.</p>';
					}
				}
			} else {
				// Fehler-Handling, wenn Pods-Instanz nicht verfügbar ist
				echo '<p class="lead">Fehler: Speisekarte konnte nicht geladen werden.</p>';
			}

			?>
		</div>
	</div>
</section>
<?php
get_footer();
?>
