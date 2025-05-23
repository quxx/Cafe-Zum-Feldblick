<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php wp_head(); ?>
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favIcon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CafeOrCoffeeShop",
      "name": "Fahrradcafé Zum Feldblick",
      "image": "https://fahrradcafe-zumfeldblick.de/cp4rjde4/",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Säritzer Hauptstraße 10",
        "addressLocality": "Säritz",
        "postalCode": "03205",
        "addressCountry": "DE"
      },
      "url": "https://fahrradcafe-zumfeldblick.de",
      "telephone": "+491624578244"
    }
  </script>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <a href="#main" class="visually-hidden-focusable"><?php esc_html_e('Skip to main content', 'cafe-zum-feldblick'); ?></a>

  <!-- Navbar  -->

  <nav class="navbar navbar-expand-sm navbar-absolute <?php if (is_front_page()) echo 'isFront' ?>">
    <div class="container-fluid flex">
      <!-- <a id="nav-brand" class="navbar-brand" href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_original.svg" width="200" height="50" class="d-inline-block align-center" alt="">
      </a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <button class="navbar-toggler fullscreen-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-xmark"></i>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(''); ?>">Start</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/ueber-uns'); ?>">Über uns</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/aktuelles'); ?>">Aktuelles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/speisekarte'); ?>">Speisekarte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/kontakt'); ?>">Kontakt</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main id="main">
