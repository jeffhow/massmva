<?php
/**
 * Template for displaying search forms in Mass MVA com
 *
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
<form role="search" method="get"  class="form-inline my-2 my-lg-0" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="form-row">
    <div class="col-auto">
      <input id="searchInput" type="text" class="form-control" placeholder="Search for..." aria-label="Search for..." value="<?php echo get_search_query(); ?>" name="s">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary">Search</button>
    </div>
  </div><!-- /.form-row -->
</form>
