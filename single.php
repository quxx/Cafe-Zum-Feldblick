<?php
get_header();
include_once("page-header.php");

if (have_posts()) {
  while (have_posts()) {
    the_post();

?>
    <section class="container-fluid block block-padding page-height">
      <div class="container">
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
