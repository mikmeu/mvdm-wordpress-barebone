<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <title><?php bloginfo('name') ?> <?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description') ?>">
        <meta property="og:title" content="<?php bloginfo('name') ?>">
        <meta property="og:description" content="<?php bloginfo('description') ?>">
        <meta property="og:image" content="">
        <meta property="og:url" content="<?php bloginfo('url') ?>">
        <meta property="og:site_name" content="<?php bloginfo('name') ?>">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="mobile-menu-container" style="display:none;" id="mobileMenu">
            <nav class="mobile-menu">
                <div class="mobile-menu-close" onclick="CloseMobileMenu()"><img src="<?php echo get_template_directory_uri(); ?>/icons/icons_close.svg" class="mobile-menu-close-icon" /> Close Menu</div>
                <?php wp_nav_menu(['theme_location'=>'mobilemenu','menu_class'=>'mobile-nav-list']); ?>
            </nav>
        </div>
        <header class="top-header">
            <div class="logo-container">
                <div class="logo">
                    <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                        echo '<img class="logo-imaeg" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                    }?>
                </div>
                <h1 class="site-title"><?php bloginfo('name') ?></h1>
            </div>
            <div class="nav-container">
                <nav class="nav">
                    <?php wp_nav_menu(['theme_location'=>'mainmenu','menu_class'=>'nav-list mobile-hide']); ?>
                    <ul class="nav-list mobile-view">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/icons/icons_menu.svg" class="nav-icon" onclick="OpenMobileMenu()" /></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="main-content">
            <div class="page">