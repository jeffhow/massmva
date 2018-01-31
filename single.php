<?php
/**
 * The template for displaying all single posts
 *
 * @version 1.0
 */

get_header(); ?>

	<div class="row">
		
		<!-- Main Column -->
		<div class="col-sm-9">
		
		<!-- Feed -->
			<?php
			if ( have_posts() ) :
				
				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>
				
					<div class="row">
						<div class="col">
							<?php get_template_part( 'template-parts/post/content', get_post_format() ); ?>
						</div>
					</div>
					
				<?php endwhile;
        
        // If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>

		</div><!-- /.col-sm -->
		
		<!-- Sidebar -->
		<div class="col-sm-3 mva-sidebar">
			<?php get_sidebar(); ?>
		</div><!-- /.col-sm-3 -->
		
	</div><!-- /.row -->

<?php get_footer();
