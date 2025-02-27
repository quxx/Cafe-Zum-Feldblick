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
    <div class="d-flex justify-content-center">
      <p class="ps-3 pe-3"><i class="fa-solid fa-phone"></i> 0162 4578244</p>
      <p class="ps-3 pe-3"><i class="fa-solid fa-location-dot"></i> Säritzer Hauptstraße 10, 03205 Calau</p>
      <p class="ps-3 pe-3"><i class="fa-solid fa-envelope"></i> admin@admin.com</p>
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
