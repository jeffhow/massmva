<?php
/** 
 * This theme uses a model search option. The model itself
 * must be placed first on the page. Nesting the model
 * leads to problems
 */
  get_template_part( 'template-parts/navigation/nav', 'model' );
?>

<style>
  .mva-banner{
    background-image: url( "<?php echo get_theme_file_uri( '/assets/images/mva-header-xs.png' ); ?>" );
    background-repeat:no-repeat;
    background-position-y:bottom;
    height:160px;
    /* animation magic */
    -webkit-transition: height 0.4s ease-in-out;
    -moz-transition: height 0.4s ease-in-out;
    transition: height 0.4s ease-in-out
  }
  @media (min-width: 576px) {
    .mva-banner{
      background-image: url( "<?php echo get_theme_file_uri( '/assets/images/mva-header-sm.png' ); ?>" );
    }
  }
  @media (min-width: 768px) {
    .mva-banner{
      background-image: url( "<?php echo get_theme_file_uri( '/assets/images/mva-header-md.png' ); ?>" );
    }
  }
  @media (min-width: 992px) {
    .mva-banner{
      background-image: url( "<?php echo get_theme_file_uri( '/assets/images/mva-header-lg.png' ); ?>" );
    }
  }
  .shrink{
    height:35px;
  }
</style>
<header id="masthead" class="site-header" role="banner">
  <h1 class="text-hide mva-banner">Massachusetts Vocational Association</h1> 
  <?php // The nav is nested insite the header for positioning.
    get_template_part( 'template-parts/navigation/nav', 'top' ); 
  ?>
</header><!-- #masthead -->