<?php
/**
 * The main blog feed template
 * 
 * @version 1.0
 */

get_header(); ?>
	<div class="row">
		
		<!-- Main Column -->
		<div class="col-sm-9">

			<!-- Page Title -->
			<div class="row">
				<div class="col page-header">	
			  	<h2 id="news">MVA News</h2>
			  	<h4>The latest news from the MVA</h4>
			  </div>
			</div>
		
		<!-- Feed -->

			<?php
			if ( have_posts() ) :
				
				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>
				
					<div class="row">
						<div class="col feed-exerpt">
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<small>
								<?php the_time('F j, Y'); ?>
			        	<?php if( has_category() ): echo '| '; the_category(', '); endif; ?>
      				</small>
      				<?php the_excerpt(); ?>
						</div>
					</div>
					
				<?php endwhile;

			//	get_template_part( 'template-parts/navigation/nav', 'pagination' );
				
			else : ?>
		
			<div class="row">
				<div class="col">
					<?php get_template_part( 'template-parts/post/content', 'none' ); ?>
				</div>
			</div>
			
		<?php endif; ?>

		</div><!-- /.col-sm -->
		
		<!-- Sidebar -->
		<div class="col-sm-3 mva-sidebar">
			<?php get_sidebar(); ?>
		</div><!-- /.col-sm-3 -->
		
	</div><!-- /.row -->
<?php get_footer();
