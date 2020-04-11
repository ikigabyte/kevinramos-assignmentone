<!-- HEADER START -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
  </head>
  <body>
      
    <header class="container border-bottom">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light w-100">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><span class="icon-pacman"></span></a>
                <?php
                    wp_nav_menu(
                      array(
                        'theme_location' => 'header-menu',
                        'container' => false,
                        'fallback_cb' => false,
                        'menu_class' => 'navbar-nav ml-auto mt-2 mt-lg-0 small'
                      )
                    );  
                ?>
              </div>
            </nav>
        </div>
    </header>
<!-- /HEADER END -->