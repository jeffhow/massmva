<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * 
 * 1) News Feed: 1 Major / 3 Minor / Button to News category
 * 2) Chapters Feed: 4 chapters (latest article per chapter) / Links to chapter full article and category
 * 3) Teachers Feed: 3 articles / Button to Teachers category
 * 4) Students Feed: 4 articles about students / Button to Student category
 * 5) About / minutes feed / button to about category
 * 6) Contact Info / Button to contact form
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
	<style type="text/css">
		@media (max-width: 576px) {
	    .features-news{
	      padding:5px;
	    }
	  }
	</style>
    
  <div class="row">
		<div class="col front-page-header">	
    	<h2>MVA News</h2>
    	<h4>The latest news from the MVA</h4>
    </div>
  </div>
  
  
  <div class="row"><div class="col">
		<?php
			/**
			 * Featured News
			 */
	  $args = array(
	    'posts_per_page' => '1',
	    'category__and' => array( get_cat_ID( 'featured' ), get_cat_ID( 'news' ) )
	  );
	  $front_page_posts = get_posts( $args );
		  if ( $front_page_posts ):
		    foreach ( $front_page_posts as $post ) : setup_postdata( $post ); ?>
		    <?php 
		    
		    	/** I took out the whole small excerpt thing.
            	 * Instead I've replaced this with "the content".
             	 * It should display the whole post
             	 */
	  
	  			the_content();
	  			
	  			/** Below this is all the old content
		    
		    	<?php if( has_post_thumbnail($post->ID) ){
		    		$thumb = get_the_post_thumbnail_url( $post->ID, 'full' );
		    	}else{
		    		$thumb = $thumbnails[mt_rand($min,$max)];
		    	} ?>
		      <div class="panel-lg panel-lg-img featured-news" 
		      		 style="background-image: url('<?php echo $thumb; ?>'); 
		      		        background-position: cover; 
		      		        background-size:cover;">
		    		<div class="panel-lg-text">
			      	<h3><?php the_title(); ?></h3>
			      	<div class="row">
			      		<div class="col-md-4">
					      	<div style="background-color:white; padding: 5px;">
					      		<img class="img-fluid" src="<?php echo $thumb; ?>" alt="featured image">
					      	</div>
				      	</div>
				      	<div class="col-md-8">
			      			<?php the_excerpt(); **/ ?>
			      		</div>
		      		</div>
		      		<div class="row">
			      		<div class="col">
				      		<div class="text-center">
				      			<a class="btn btn-primary" href="<?php the_permalink(); ?>">Continue Reading</a>
				      		</div>
				      	</div>
				      </div>
	      		</div><!-- /.panel-lg-text -->
		      </div><!-- /.panel-lg-img -->
	  		<?php endforeach; 
	  	wp_reset_postdata(); 
	  endif; ?>
	</div></div><!-- /.col /.row -->
		
	<div class="row news-row">
		<?php
		/**
		 * News Links
		 */
	  $args = array(
	    'posts_per_page' => '3',
	    'category' => get_cat_ID( 'news' ),
	    'category__not_in' => get_cat_ID( 'featured' )
	  );
	  $front_page_posts = get_posts( $args );
	  
  	if ( $front_page_posts ):
    	foreach ( $front_page_posts as $post ) : setup_postdata( $post ); ?>
    		<?php if( has_post_thumbnail($post->ID) ){
	    		$thumb = get_the_post_thumbnail_url( $post->ID, 'full' );
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
	    				<a class="panel-sm-link" href="<?php the_permalink(); ?>">
	    					<?php the_title(); ?>
	    				</a>
	    			</h4>
	    			<?php echo wp_trim_excerpt(); ?>
	      	</div><!-- /.panel-sm-text -->
    		</div><!-- /.col-sm -->
		<?php endforeach; wp_reset_postdata(); endif; ?>
	</div><!-- /.row -->

	<div class="row"><div class="col cta">
		<a class="btn btn-primary" href="<?php echo get_site_url(); ?>/news/">More News &hellip; </a>
	</div></div><!-- /.col /.row -->
	
	<div class="chapter-wrap">
		<div class="row"><div class="col front-page-header">
			<h2>MVA Chapters</h2>
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
	</div><!-- /.chapter-wrap -->
	
	<?php /**
	<div class="about-wrap">
		<div class="row"><div class="col front-page-header">
			<h2>About the MVA</h2>
			<h4>Your Teacher's Association</h4>
		</div></div><!-- /.col /.row -->
	
		<div class="row">
		<?php 
			/**
			 * About Panel
			 *
		 $about = get_page_by_path('about'); ?>
		 <div class="col panel-lg panel-lg-img about-panel" 
		      		 style="background-image: url('<?php echo get_the_post_thumbnail_url( $about->ID, 'full' ); ?>'); 
		      		        background-position: center; 
		      		        background-size:cover;">
	  		<div class="panel-lg-text">
	    		<?php echo $about->post_content; wp_reset_postdata(); ?>
	  		</div><!-- /.panel-lg-text -->
	    </div><!-- /.col /.panel-lg-img -->
    	
		</div><!-- /.row -->
	</div><!-- /.about-wrap -->
	
	<div class="row"><div class="col front-page-header">
			<h2 id="chapters">Contact us</h2>
			<h4>Use the info below or our contact form.</h4>
		</div></div><!-- /.col /.row -->
	**/
	?>
	<?php 
	/**
	 * Contact us page
	 */
	
	$contact = get_page_by_path('contact-us'); ?>
 	<div class="col panel-contact" >
			<?php echo $contact->post_content; ?>
  </div><!-- /.col-->
  
	<div class="row"><div class="col cta">
			<a class="btn btn-primary" href="<?php echo get_site_url(); ?>/contact-form/">Contact Form &hellip; </a>
	</div></div><!-- /.col /.row -->
	<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
