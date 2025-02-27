<?php

/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage cafe_zum_feldblick
 * @since Cafe zum Feldblick 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if (post_password_required()) {
  return;
}
?>

<div id="comments" class="comments-area riss-container">
  <div class="riss-svg"></div>
  <div class="container pt-3">
    <div class="row justify-content-center">

      <?php if (have_comments()) : ?>
        <h2 class="comments-title mb-4">
          <?php
          printf(
            _nx(
              'Ein Kommentar für "%2$s"',
              '%1$s Kommentare für "%2$s"',
              get_comments_number(),
              'comments title',
              'cafe_zum_feldblick'
            ),
            number_format_i18n(get_comments_number()),
            '<span>' . get_the_title() . '</span>'
          );
          ?>
        </h2>
        <div class="col-12">
          <ul class="comment-list">
            <?php
            wp_list_comments(array(
              'short_ping'  => true,
              'avatar_size' => 35,
              'callback' => 'cafe_zum_feldblick_comment',
            ));
            ?>
          </ul><!-- .comment-list -->
        </div>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
          <nav class="navigation comment-navigation" role="navigation">

            <h1 class="screen-reader-text section-heading"><?php _e('Comment navigation', 'cafe_zum_feldblick'); ?></h1>
            <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'cafe_zum_feldblick')); ?></div>
            <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'cafe_zum_feldblick')); ?></div>
          </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation 
        ?>

        <?php if (! comments_open() && get_comments_number()) : ?>
          <p class="no-comments"><?php _e('Comments are closed.', 'cafe_zum_feldblick'); ?></p>
        <?php endif; ?>

      <?php endif; // have_comments() 
      ?>
      <div class="col-12">
        <?php comment_form(); ?>
      </div>
    </div>
  </div>

</div><!-- #comments -->
