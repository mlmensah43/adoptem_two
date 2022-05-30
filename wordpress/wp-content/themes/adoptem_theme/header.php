<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<header class="site-header">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="logo navbar-brand fw-bold">
      <i class="fa-solid fa-paw"></i>
      <a href="<?php echo site_url() ?>" class="logo-text"><?php echo get_bloginfo( 'name' ); ?></a>
    </div> 
    <div class="site-header__menu group ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars menu-icon"></i>
      </button>
      <div class="main-navigation collapse navbar-collapse navbarNav">
      <!-- <?php wp_nav_menu(array(
        'theme_location' => 'MainSiteMenuLocation')); ?> -->
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active" <?php if(is_page('pets')) echo 'id="current-page"'?>><a class="nav-link" href="<?php echo site_url('/pets') ?>">available pets</a></li>
          <li class="nav-item active" <?php if(is_page('about-us')) echo 'id="current-page"'?>><a class="nav-link" href="<?php echo site_url('/about-us') ?>">about us</a></li>
          <li class="nav-item active" <?php if(get_post_type() == 'post') echo 'id="current-page"'?>><a class="nav-link" href="<?php echo site_url('/blog') ?>">blog</a></li>
        </ul>
      </div>
    </div> 
    <!-- <div class="navbar-icons navbarNav">
      <i class="fa-solid fa-heart"></i>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
    </div> -->

  </nav>
</header>