	</section><!-- \.container -->
	<div id="footer-container">
		<footer id="footer">
			<?php do_action( 'wpbootstrap_before_footer' ); ?>
			<?php dynamic_sidebar( 'footer-widgets' ); ?>
			<?php get_template_part( 'template-parts/footer/site', 'info' );?>
			<?php do_action( 'wpbootstrap_after_footer' ); ?>
		</footer>
	</div>		
	<?php wp_footer(); ?>
	<?php do_action( 'wpbootstrap_before_closing_body' ); ?>
</body>
</html>