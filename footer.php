<?php
/**
 * The template for displaying the footer
 *
 * @version 1.0
 */

?>

		</main>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php /** No Navlinks yet
			
			<div class="row footer-widgets">
				<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
			</div><!-- /.row -->
			
			<div class="row footer-nav">
				<div class="col">
					<?php get_template_part( 'template-parts/footer/footer-nav', 'secondary' ); ?>
				</div>
			</div><!-- /.row -->
			
			<div class="row footer-nav">
				<div class="col">
					<?php get_template_part( 'template-parts/footer/footer-nav', 'social' ); ?>
				</div>
			</div><!-- /.row -->
			**/
			?>
			<div class="row footer-info">
				<div class="col">
					<?php get_template_part( 'template-parts/footer/footer-site', 'info' ); ?>
				</div>
			</div><!-- /.row -->
			
		</footer><!-- #colophon -->
</div><!-- /#page /.site /.container-fluid -->

<?php wp_footer(); ?>
<!-- Popper CDN JS (required for Bootstrap 4.0 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<!-- Bootstrap CDN JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
