<?php
get_header();
include_once("page-header.php");

if (have_posts()) {
  while (have_posts()) {
    the_post();

?>
    <section class="container-fluid block block-padding page-height">
      <div class="container">
        <a class="icon-link icon-link-hover mb-2" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="<?php echo site_url('/aktuelles'); ?>">
          <i class="fa-solid fa-arrow-left"></i>
          Zurück
        </a>
        <div class="row pt-2">
          <div class="col-12">
            <small class="text-muted"><?php echo get_the_date() ?></small>
            <h1 class="title-tag center"><?php echo get_the_title() ?></h1>

            <?php echo apply_filters('the_content', get_the_content()) ?>
          </div>
        </div>
      </div>
    </section>
<?php
  }
}

comments_template();

get_footer();

?>
