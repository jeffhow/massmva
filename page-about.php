<?php
/**
 * Custom About-page template
 *
 * @version 1.0
 */

get_header(); ?>
<?php
// Default Thumbnail Array
$thumbnails = array( get_theme_file_uri( '/assets/images/default-1.jpg' ),
										 get_theme_file_uri( '/assets/images/default-2.jpg' ),
										 get_theme_file_uri( '/assets/images/default-3.jpg' ),
										 get_theme_file_uri( '/assets/images/default-4.jpg' ),
										 get_theme_file_uri( '/assets/images/default-5.jpg' ),
										 get_theme_file_uri( '/assets/images/default-6.jpg' ),
										 get_theme_file_uri( '/assets/images/default-7.jpg' ),
										 get_theme_file_uri( '/assets/images/default-8.jpg' ),
										 get_theme_file_uri( '/assets/images/default-9.jpg' ),);
$min = 0;
$max = count( $thumbnails ) - 1;
?>
	<div class="row">
		
		<!-- Main Column -->
		<div class="col-sm-9">
		
		<!-- Main Loop for page -->
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
        
        // If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif; wp_reset_postdata();
			?>
			
			<!-- Executive Board Page -->
			<div class="row"><div class="col">
				<?php
					
			  $args = array(
			    'posts_per_page' => '1',
			    'category' => get_cat_ID( 'Exec Board' )
			  );
			  $exec_post = get_posts( $args );
				  if ( $exec_post ):
				    foreach ( $exec_post as $post ) : setup_postdata( $post ); ?>
			      	<h3><?php the_title(); ?></h3>
		      		<?php the_content(); ?>
			  		<?php endforeach; 
			  	wp_reset_postdata(); 
			  endif; ?>
			</div></div><!-- /.col /.row -->
			
			
			<!-- Administrative News Feed  -->
			<div class="row"><div class="col front-page-header">
				<h2 id="chapters">Latest Administrative News</h2>
				<h4>Explore the latest news from the executive board</h4>
			</div></div><!-- /.col /.row -->
		
			<div class="row">
			<?php 
			/**
			 * Latest Admin News Args
			 */
			$args = array(
				    'posts_per_page' => '4',
				    'category' => get_cat_ID( 'administration' ),
				    'category__not_in' => get_cat_ID( 'exec-board' )
				  );
			$admin_posts = get_posts( $args );	
			//print_r($admin_posts);
			foreach($admin_posts as $post): setup_postdata( $post ); ?>
			
			<?php if( has_post_thumbnail($page->ID) ){
    		$thumb = get_the_post_thumbnail_url( $page->ID, 'full' );
    	}else{
    		$thumb = $thumbnails[mt_rand($min,$max)];
    	} 
    	?>
		 	<div class="col-sm panel-sm" >
		 		<div class="panel-sm-img"
		 				 style="background-image: url('<?php echo $thumb; ?>'); 
	      		          background-position: center; 
	      		          background-size:cover;">
		 		</div><!-- /.sm-panel-img-->
	    	<div class="panel-sm-text">
	      	<h4 class="panel-sm-title">
	      		<a class="panel-sm-link" href="<?php the_permalink();//echo get_page_link( $page->ID ); ?>">
	      			<?php the_title();//echo $page->post_title; ?>
  					</a>
  				</h4>
	    		<?php the_excerpt();//echo $page->post_content;
	    		/**
		    		$text = strip_shortcodes( $page->post_content );
						$text = apply_filters( 'the_content', $text );
						$text = str_replace(']]>', ']]&gt;', $text);
						$excerpt_length = apply_filters( 'excerpt_length', 55 );
						$excerpt_more = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );
						$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
						echo $text;**/
	    		?>
    		</div><!-- /.panel-sm-text -->
    	</div><!-- /.col-sm -->
	    	
			 <?php endforeach; wp_reset_postdata(); ?>
			</div><!-- /.row -->
			
			<div class="row"><div class="col cta">
				<a class="btn btn-primary" href="<?php echo get_site_url(); ?>/category/administration/">More Admin News &hellip; </a>
			</div></div><!-- /.col /.row -->
		
		</div><!-- /.col-sm -->
		
		<!-- Sidebar -->
		<div class="col-sm-3 mva-sidebar">
			<?php get_sidebar(); ?>
		</div><!-- /.col-sm-3 -->
		
	</div><!-- /.row -->
<?php get_footer(); ?>
