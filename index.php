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
            <video style="z-index:1;object-fit: cover; object-position: 50% 50%;" class="position-absolute w-100 min-vh-100" autoplay preload muted loop playsinline>
                <!-- adjust object-position to tweak cropping on mobile -->
                <source src="https://cdn.livecanvas.com/media/nature/video.mp4" type="video/mp4">
            </video>
            <div style="z-index:2" class="align-self-center text-center text-light col-md-8 offset-md-2">
                <div class="lc-block mb-4">
                    <div editable="rich">
                        <h1 class="display-1 fw-bolder">Cafe zum Feldblick</h1>
                    </div>
                </div>

                <div class="lc-block">
                    <div editable="rich">
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus porttitor dui.</p>

                        <p class="lead">Sim in vestibulum metus pulvinar sit amet.

                        </p>

                    </div>
                </div>

                <div class="lc-block">
                    <svg onclick="this.closest('section').nextElementSibling.scrollIntoView({ behavior: 'smooth'  });" width="4em" height="4em" viewBox="0 0 16 16" lc-helper="svg-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"></path>
                    </svg>

                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row flex-lg-row-reverse align-items-center">
            <div class="col-lg-6">
                <div class="lc-block">
                    <div editable="rich">
                        <h1>Öffnungszeiten</h1>
                        <p class="lead">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type. Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

		<div>
			Bilder
		</div>
		<div>
			Aktuelles
		</div>
		<div>
			Bilder
		</div>
		<div>
			Speisekarte
		</div>
		<div>
			Bilder
		</div>
		<div>
			Kontakt
		</div>
<?php
get_footer();
?>

