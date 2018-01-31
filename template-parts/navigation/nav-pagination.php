<?php
/**
 * The pagination file
 * 
 * @version 1.0
 */

$arg = array(
	'prev_text' => '<span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span>',
	'next_text' => '<span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span>',
	'before_page_number' => '<span class="meta-nav sr-only">Page </span>',
	'type' => 'list',
	);
	
$pagination = paginate_links( $arg );
$pagination = str_replace( "<ul class='page-numbers'>", '<ul class="pagination justify-content-center">', $pagination );
$pagination = str_replace( '<li>', '<li class="page-item">', $pagination );
$pagination = str_replace( 'page-numbers', 'page-link', $pagination );

echo '<nav aria-label="Pagination navigation">'.$pagination.'</nav>';

/**
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
**/
?>