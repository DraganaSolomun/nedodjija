<!doctype html>
<html lang="<?php language_attributes();?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>


  </head>
  <body>
 <!-- nav -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top blog_nav">
        <div class="container">
        <a class="navbar-brand " href="<?php echo esc_url(home_url()); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/logooo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarNav',
            'menu_class'        => 'navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        </div>    
    </nav>
