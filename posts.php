<?php
/* Template Name: Aktuelles */

get_header();

include_once("page-header.php");
?>
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
      query_posts('');
      while (have_posts()) : the_post(); ?>
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-5">
          <div class="card border-0 ">
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
      endwhile;
      wp_reset_query(); ?>
    </div>
  </div>
</section>


<?php
get_footer();
?>
