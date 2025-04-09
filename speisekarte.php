<?php
/* Template Name: Speisekarte */
get_header();
include_once("page-header.php");
?>
<section id="speisekarte" class="container-fluid pe-0 ps-0 ms-0 me-0 block">
  <div class="container px-4">
    <div class="row gx-3 row1 pb-5">
        <div class="text-center mb-5">
            <h1 class="title text-uppercase">Speisekarte</h1>
            <p class="subtitle text-center ps-md-5 pe-md-5">
                Unsere Speisen werden mit viel Liebe und frischen Zutaten zubereitet.
            </p>
        </div>
      <div class="col-12 col-md-6 align-content-top pe-4">
        <h2 class="text-uppercase">Herzhaftes</h2>
        <?php
			// Hol dir das Pods-Objekt für den Custom Post Type "speise"
			$pods = pods('speise');
			if ($pods && $pods->find()) {
				// Speise-Daten aus Pods abrufen
				while ($pods->fetch()) {
					$gruppe = $pods->display('gruppe');
					if ($gruppe == 'Herzhaftes') {
						$bezeichnung = $pods->display('bezeichnung');
						$preis = $pods->display('preis');
						$beschreibung = $pods->display('beschreibung');
						if (!empty($bezeichnung)) {
							echo '<div class="col-12">
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
      <div class="col-12 col-md-6 align-content-top ps-4">
        <h2>KUCHEN UND SÜßES</h2>
        <?php
			// Hol dir das Pods-Objekt für den Custom Post Type "speise"
			$pods = pods('speise');
			if ($pods && $pods->find()) {
				// Speise-Daten aus Pods abrufen
				while ($pods->fetch()) {
					$gruppe = $pods->display('gruppe');
					if ($gruppe == 'Kuchen und Süßes') {
						$bezeichnung = $pods->display('bezeichnung');
						$preis = $pods->display('preis');
						$beschreibung = $pods->display('beschreibung');
						if (!empty($bezeichnung)) {
							echo '<div class="col-12">
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
    </div>
    <div class="row gx-3 row2 pb-5">
        <div class="text-center mb-5">
            <h1 class="title text-uppercase">Getränke</h1>
            <p class="subtitle text-center ps-md-5 pe-md-5">
                Genussvolle Vielfalt - ob heiß, kalt oder prickelnd
            </p>
        </div>
      <div class="col-12 col-md-6 align-content-top pe-4">
        <h2 class="text-uppercase">Alkoholfreie Getränke</h2>
        <?php
			// Hol dir das Pods-Objekt für den Custom Post Type "speise"
			$pods = pods('speise');
			if ($pods && $pods->find()) {
				// Speise-Daten aus Pods abrufen
				while ($pods->fetch()) {
					$gruppe = $pods->display('gruppe');
					if ($gruppe == 'Alkoholfreie Getränke') {
						$bezeichnung = $pods->display('bezeichnung');
						$preis = $pods->display('preis');
						$beschreibung = $pods->display('beschreibung');
						if (!empty($bezeichnung)) {
							echo '<div class="col-12">
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
      <div class="col-12 col-md-6 align-content-top ps-4">
        <h2 class="text-uppercase">Alkoholische Getränke</h2>
        <?php
			// Hol dir das Pods-Objekt für den Custom Post Type "speise"
			$pods = pods('speise');
			if ($pods && $pods->find()) {
				// Speise-Daten aus Pods abrufen
				while ($pods->fetch()) {
					$gruppe = $pods->display('gruppe');
					if ($gruppe == 'Alkoholische Getränke') {
						$bezeichnung = $pods->display('bezeichnung');
						$preis = $pods->display('preis');
						$beschreibung = $pods->display('beschreibung');
						if (!empty($bezeichnung)) {
							echo '<div class="col-12">
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
    </div>
    <div class="row gx-3 row3 pb-5">
        <div class="text-center mb-5">
            <h1 class="title text-uppercase">Spezialitäten aus der Region</h1>
            <p class="subtitle text-center ps-md-5 pe-md-5">
                Lausitzer Qualitätsweine für Kenner und Genießer
                <br>Leinöl, Gewürzgurken und Honig
            </p>
        </div>
        <?php
            // Hol dir das Pods-Objekt für den Custom Post Type "speise"
            $pods = pods('speise');
            if ($pods && $pods->find()) {
                // Speise-Daten aus Pods abrufen
                while ($pods->fetch()) {
                    $gruppe = $pods->display('gruppe');
                    if ($gruppe == 'Spezialitäten aus der Region') {
                        $bezeichnung = $pods->display('bezeichnung');
                        $preis = $pods->display('preis');
                        $beschreibung = $pods->display('beschreibung');
                        if (!empty($bezeichnung)) {
                            echo '<div class="eintrag col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
  </div>
</section>
<?php
get_footer();
?>
