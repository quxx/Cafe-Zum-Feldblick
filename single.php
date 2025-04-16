<?php
get_header();
include_once("page-header.php");

if (have_posts()) {
  while (have_posts()) {
    the_post();
    $post_id = get_the_ID();
    $reactions = get_post_meta($post_id, 'post_reactions', true);
    $reactions = is_array($reactions) ? $reactions : ['like' => 0, 'love' => 0, 'haha' => 0, 'wow' => 0, 'sad' => 0, 'angry' => 0];
    $total = array_sum($reactions);
?>

    <section class="container-fluid block block-padding page-height aktuelles">
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
      <div class="container feed">
        <!-- 💬 Reactions -->
        <div class="reaction-container" data-post="<?php echo $post_id; ?>">
          <?php
          $reactions_config = require get_template_directory() . '/inc/reactions-config.php';

          // Prüfe ob mindestens eine Reaction > 0 ist
          $has_reactions = false;
          foreach ($reactions_config as $type => $data) {
            if (!empty($reactions[$type])) {
              $has_reactions = true;
              break;
            }
          }
          ?>
          <div class="reaction-count-container mt-1" style="<?php echo $has_reactions ? 'display: flex;' : 'display: none;'; ?>">
            <?php foreach ($reactions_config as $type => $data) :
              $count = !empty($reactions[$type]) ? $reactions[$type] : 0;
            ?>
              <span class="reaction-count" data-reaction="<?php echo $type; ?>" style="<?php echo $count > 0 ? '' : 'display: none;'; ?>">
                <?php echo $data['emoji']; ?>
                <span class="count"><?php echo $count; ?></span>
              </span>
            <?php endforeach; ?>
          </div>
          <div class="like-btn">

            <button class="btn btn-outline-primary btn-block placeholder-btn" data-post=" <?php echo $post_id; ?>"><i class="fa fa-thumbs-up"></i> Like</button>

            <div class="reaction-box">
              <?php foreach ($reactions_config as $type => $data) : ?>
                <div class="reaction-button reaction-icon <?php echo $type; ?>" data-reaction="<?php echo $type; ?>">
                  <label><?php echo $data['label']; ?></label>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <!-- /Reactions -->
      </div>
    </section>
<?php
  }
}

comments_template();
get_footer();
?>
