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
    <section class="bg-white container-fluid block ps-5 pe-5">
			<div editable="rich" class="text-center oeffnungzeiten">
					<p class="h-small text-uppercase">Herzlich Wilkommen im</p>
					<h1 class="text-uppercase">Fahrradcafé zum Feldblick</h1>
					<p class="text-center ps-5 pe-5">
						Genießen Sie bei uns eine Pause vom Alltag und lassen Sie sich von der Ruhe und Schönheit der Natur verzaubern. Ob auf einer Fahrradtour oder einfach auf der Suche nach einem besonderen Ort – hier finden Sie genau das Richtige. 
						<br>Wir verwöhnen Sie mit hausgemachtem Kuchen, frischem Kaffee, kleinen Speisen, Bier und Wein.
						<br>Erleben Sie einen gemütlichen Ort in der Natur – perfekt für Genuss, Entspannung und schöne Gespräche.
						<br><br>Wir freuen uns auf Ihren Besuch!
					</p>
					<p class="text-uppercase h-small">
						Öffnungszeiten
					</p>
					<?php
							$loop = new WP_Query( // The query
							array( // WP_Query arguments:
							'post_type' => 'opening', // This is the name of your post type
							'posts_per_page' => 1 // This is the amount of posts you want to show
							)
							);
							while ( $loop->have_posts() ) : $loop->the_post(); // The loop
							?>

							<!-- The content you want to display goes here: -->
							<div class="hard">
								<?php
									// $my_content = get_the_content();
									// $clean_content = strip_tags($my_content , '<p>');
									// echo $clean_content;
									the_content();
								?>
							</div>

							<?php endwhile;
							wp_reset_postdata(); // Restore original post data
					?>
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

