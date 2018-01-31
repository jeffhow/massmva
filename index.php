<?php
/**
 * The main template file
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
				while ( have_posts() ) : the_post();
				
					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile;

				get_template_part( 'template-parts/navigation/nav', 'pagination' );

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
