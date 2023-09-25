<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <article class="wrapper u-background--overlay js-toggle">
        <header class="l-header c-background-color--base">
            <div class="l-header__top">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <h1 class="l-header__top__logo c-font-color--base c-font-family--robot c-font-weight--bold">
                        Hamburger
                    </h1>
                </a>
                <h2 class="l-header__top__menu c-font-weight--bold c-font-family--robot">
                    <button class="c-button--menu js-button is-click">Menu</button>
                    <!-- ハンバーガーボタン出現時のMenu -->
                </h2>
            </div>
            <?php get_search_form(); ?>
        </header>