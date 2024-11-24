<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favIcon.png">
 
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'cafe-zum-feldblick' ); ?></a>

	<!-- Navbar  -->

<nav class="navbar navbar-expand-lg fixed-top nav-color-white">
  <div class="container-fluid flex">
    <a id="nav-brand" class="navbar-brand hide" href="#">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_original.svg" width="200" height="50" class="d-inline-block align-center" alt="">
		</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Aktuelles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Speisekarte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kontakt</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

	<main id="main">
