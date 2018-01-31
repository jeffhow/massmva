<?php
/**
 * Displays top navigation
 *
 * @version 1.2
 */

?>
<nav class="navbar navbar-expand-md navbar-light" id="nav_bar">
  <a class="navbar-toggler" href="#" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars" aria-hidden="true"></i> Menu
  </a>
  <a class="navbar-toggler" href="#" data-toggle="modal" data-target="#searchModal"><i class="fa fa-search" aria-hidden="true"></i> Search</a>

  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo get_site_url(); ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo get_site_url(); ?>/news/">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo get_site_url(); ?>/chapters/">Chapters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo get_site_url(); ?>/awards/">Awards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo get_site_url(); ?>/category/teachers/">Teachers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo get_site_url(); ?>/category/students/">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo get_site_url(); ?>/category/conference">Conferences</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo get_site_url(); ?>/about/">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo get_site_url(); ?>/contact-form/">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo get_site_url(); ?>/Join/">Join</a>
        </li>
        <li class="nav-item nav-search-li">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#searchModal"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
        </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav><!-- #site-navigation -->
