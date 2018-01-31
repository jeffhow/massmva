<?php
/**
 * The template for displaying 404 pages (not found)
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
					<h2>404</h2>
					<h4 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'massmvacom' ); ?></h4>
			  </div>
			</div>
			<!-- Content -->
			<div class="row">
				<div class="col">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'massmvacom' ); ?></p>

					<?php get_search_form(); ?>

				</div>
			</div>
		
		</div><!-- /.col-sm -->
		
		<!-- Sidebar -->
		<div class="col-sm-3 mva-sidebar">
			<?php get_sidebar(); ?>
		</div><!-- /.col-sm-3 -->
		
	</div><!-- /.row --
<?php get_footer();
