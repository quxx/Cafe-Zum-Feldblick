<?php
/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();

$page_id = get_option( 'page_for_posts' );
?>
    <section class="position-relative overflow-hidden">
        <div class="d-flex min-vh-100" lc-helper="video-bg">
            <video style="object-fit: cover; object-position: 50% 50%;" class="w-100 min-vh-100 parallax-video" autoplay preload muted loop playsinline>
                <!-- adjust object-position to tweak cropping on mobile -->
                <source src="<?php echo get_template_directory_uri(); ?>/assets/img/header-video.mp4" type="video/mp4">
            </video>
            <div style="z-index:2" class="align-self-center text-center text-light col-md-8 offset-md-2">
                <div class="lc-block mb-4">
                    <div editable="rich">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_weiss.svg" alt="logo" style="width:60%;"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="container row flex-lg-row-reverse align-items-center">
            <div class="col">
                <div class="lc-block">
                    <div editable="rich">
                        <h1>Öffnungszeiten</h1>
                        <p class="lead">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type. Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

		<div class="bg-white">
			Bilder
		</div>
		<div class="bg-white">
			Aktuelles
		</div>
		<div class="bg-white">
			Bilder
		</div>
		<div class="bg-white">
			Speisekarte
		</div>
		<div class="bg-white">
			Bilder
		</div>
		<div class="bg-white">
			Kontakt
		</div>
<?php
get_footer();
?>

