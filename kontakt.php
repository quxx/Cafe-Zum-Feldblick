<?php
/* Template Name: Kontakt */

get_header();

include_once("page-header.php");
?>

<section class="container-fluid pe-0 ps-0 ms-0 me-0 block block-padding page-height">
  <div class="text-center">
    <h1 class="text-uppercase">Kontakt</h1>
    <p class="text-center ps-5 pe-5">
      Wir freuen uns über Eure Nachricht. Gerne könnt Ihr uns auch direkt anrufen.
    </p>
    <p class="text-center ps-5 pe-5">
      Reservierungen bitte nur telefonisch!
    </p>
    <div class="container">
      <div class="row justify-content-center">
        <p class="ps-3 pe-3 col-12 col-md-4 col-lg-3"><i class="fa-solid fa-phone"></i><a href="tel:+491624578244"> 0162 4578244</a></p>
        <p class="ps-3 pe-3 col-12 col-md-4 col-lg-3"><i class="fa-solid fa-location-dot"></i><a target="_blank" rel="noopener noreferrer" href='https://www.google.com/maps/search/?api=1&query=Fahrradcafé+"Zum+Feldblick"'> Säritzer Hauptstraße 10, 03205 Calau</a></p>
        <p class=" ps-3 pe-3 col-12 col-md-4 col-lg-3"><i class="fa-solid fa-envelope"></i><a href="mailto:info@fahrradcafe-zumfeldblick.de"> info@fahrradcafe-zumfeldblick.de</a></p>
      </div>
    </div>
  </div>
  <div class="container pt-3">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10">
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
