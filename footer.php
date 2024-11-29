</main><!-- /#main -->
<footer id="footer" class="pb-4 pt-4">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-4 text-center d-flex align-items-center">
				<a class="pe-1" href="<?php echo site_url('/impressum'); ?>">Impressum</a> | <a class="ps-1" href="<?php echo site_url('/impressum'); ?>">Datenschutz</a>
			</div>
			<div class="col-12 col-lg-4 text-center d-flex align-items-center justify-content-center">
				<a class="icon" href="https://www.facebook.com/p/Fahrradcaf%C3%A9-Zum-Feldblick-61558062106534" title="Fahrradcafé Facebook"><i class="fa-brands fa-facebook-f"></i></a>
			</div>
			<div class="col-12 col-lg-4 text-center d-flex align-items-center justify-content-end">
				<p class="mb-0 mt-0"><?php printf(esc_html__('&copy; %1$s %2$s', 'cafe-zum-feldblick'), wp_date('Y'), get_bloginfo('name', 'display')); ?></p>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</footer><!-- /#footer -->

<!-- Scroll-to-top button -->
<button id="scrollToTopBtn">&#8593;</button>


<?php
wp_footer();
?>
</body>

</html>
