<?php
/**
 * Custom Chapter-page template
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
		<?php /**
		<!-- Main Loop for page -->
			<?php
			if ( have_posts() ) :
				
				// Start the Loop
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

			endif;
			*/
			?>
			
			<!-- Chapter sublinks -->
			<div class="row"><div class="col front-page-header">
				<h2 id="chapters">MVA Chapters</h2>
				<h4>Explore the latest events from your local chapter</h4>
			</div></div><!-- /.col /.row -->
		
			<div class="row">
			<?php 
				/**
				 * Chapter Page Links
				 */
				 $chapters = array( get_page_by_path('eastern-chapter'), 
														get_page_by_path('southeastern-chapter'),
														get_page_by_path('western-chapter'),
														get_page_by_path('central-chapter') );
			 
			foreach($chapters as $page): ?>
			<?php if( has_post_thumbnail($page->ID) ){
    		$thumb = get_the_post_thumbnail_url( $page->ID, 'full' );
    	}else{
    		$thumb = $thumbnails[mt_rand($min,$max)];
    	} ?>
		 	<div class="col-sm panel-sm" >
		 		<div class="panel-sm-img"
		 				 style="background-image: url('<?php echo $thumb; ?>'); 
	      		          background-position: center; 
	      		          background-size:cover;">
		 		</div><!-- /.sm-panel-img-->
	    	<div class="panel-sm-text">
	      	<h4 class="panel-sm-title">
	      		<a class="panel-sm-link" href="<?php echo get_page_link( $page->ID ); ?>">
	      			<?php echo $page->post_title; ?>
  					</a>
  				</h4>
	    		<?php echo get_the_excerpt($page->ID); ?>
    		</div><!-- /.panel-sm-text -->
    	</div><!-- /.col-sm -->
	    	
			 <?php endforeach; wp_reset_postdata(); ?>
			</div><!-- /.row -->
		
		
		</div><!-- /.col-sm -->
		
		<!-- Sidebar -->
		<div class="col-sm-3 mva-sidebar">
			<?php get_sidebar(); ?>
		</div><!-- /.col-sm-3 -->
		
	</div><!-- /.row -->
<?php get_footer(); ?>