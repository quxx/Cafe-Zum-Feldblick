<?php
/* Template Name: Kontakt */

get_header();

include_once("page-header.php");
?>

<section class="container-fluid pe-0 ps-0 ms-0 me-0 block block-padding">
  <div class="text-center">
    <h1 class="text-uppercase">Kontakt</h1>
    <p class="text-center ps-5 pe-5">
      Kontaktiere Uns
    </p>
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
