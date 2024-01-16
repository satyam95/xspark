<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
</head>
<body <?php body_class(); ?>>
   <header>
      <div class="container">
        <div class="header-inner-container">
          <div class="main-logo">
            <?php if(has_custom_logo()): ?>
                <?php the_custom_logo(); ?>
            <?php else:?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo-text">
                  <?php bloginfo('name') ?>
                </a>
            <?php endif; ?>
          </div>
          <div class="header-menu">
            <?php wp_nav_menu(array('theme_location'  => 'primary', 'menu_class' => 'primary-menu')); ?>
          </div>
          <div class="ham-mobile">
            <image onclick="openNav()" src="<?php echo get_theme_file_uri('img/hamburger.png')?>" alt="hamburger menu icon" />
          </div>
          <div class="mobile-sidebar" id="mySidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
              <image src="<?php echo get_theme_file_uri('img/close.png')?>" alt="close icon" />
            </a>
            <div class="header-menu-mobile">
              <?php wp_nav_menu(array('theme_location'  => 'primary', 'menu_class' => 'primary-menu')); ?>
            </div>
          </div>
        </div>
      </div>
   </header>