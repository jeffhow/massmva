<?php
/**
 * The template for displaying the Eastern Chapter page plus news
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
							<?php get_template_part( 'template-parts/page/content', 'page' ); ?>
						</div>
					</div>
					
				<?php endwhile;
        
        /** No comments on this page
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;**/

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>
			<div class="row">
				<div class="col"><h4>Southeastern Chapter News</h4></div>
			</div>

			<?php
			/**
			 * Eastern News Links
			 */
		  $args = array(
		    'posts_per_page' => '5',
		    'category' => get_cat_ID( 'Southeastern News' ),
		  );
		  $news_posts = get_posts( $args );
		  
	  	if ( $news_posts ):
	    	foreach ( $news_posts as $post ) : setup_postdata( $post ); ?>
	    		<div class="row">
						<div class="col feed-exerpt">
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<small>
								<?php the_time('F j, Y'); ?>
			        	<?php if( has_category() ): echo '| '; the_category(', '); endif; ?>
      				</small>
      				<?php the_content(); ?>
						</div>
					</div>
				<?php endforeach; wp_reset_postdata(); 
			else: ?>
				<div class="row">
					<div class="col"><p>Sorry, no news yet.</p></div>
				</div>
			<?php endif; ?>

		</div><!-- /.col-sm -->
		
		<!-- Sidebar -->
		<div class="col-sm-3 mva-sidebar">
			<?php
			/**
			 * This sidebar will be used for the school links (HTML)
			 * and the calendar feed widget
			 */
			 dynamic_sidebar( 'sidebar-southeastern' );
			 ?>
			<?php get_sidebar(); ?>
		</div><!-- /.col-sm-3 -->
		
	</div><!-- /.row -->
<?php get_footer();
