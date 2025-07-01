<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('./img/favicon.ico')) ?>">
    <?php wp_head(); ?>
</head>
<body>
    <div id="menu__overlay" class="menu__overlay"></div>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__title">
                <a class="header__title--link" href="<?php echo esc_url(home_url()) ?>">
                    <img class="header__title--img" src="<?php echo esc_url(get_theme_file_uri('./img/logo.svg')) ?>" alt="">
                </a>
            </h1>
            <span id="header__menu" class="header__menu"></span>
            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container' => 'nav',
                    'container_class' => 'header__nav',
                    'menu_class' => 'header__nav-list',
                ))
            ?>
        </div>
    </header>
    