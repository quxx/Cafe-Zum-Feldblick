</main><!-- /#main -->
<footer id="footer">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-6 text-center">
				<p><?php printf(esc_html__('&copy; %1$s %2$s', 'cafe-zum-feldblick'), wp_date('Y'), get_bloginfo('name', 'display')); ?></p>
				<p>Impressum</p>
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
