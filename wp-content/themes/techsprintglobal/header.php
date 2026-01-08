<?php
/**
 * The header for our theme with static mega menu
 *
 * @package techsprintglobal
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header id="mainHeader" class="site-header">
            <div class="site-container header-inner">
                <div class="logo-wrap">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link">
                        <img width="140" height="50" loading="lazy" class="logo-img"
                            src="<?php echo esc_url(get_theme_mod('colored_logo')); ?>" alt="techsprintglobal Logo" />
                    </a>
                </div>
                <nav class="main-nav" aria-label="<?php esc_attr_e('Primary Menu', 'techsprintglobal'); ?>">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'main-menu',
                        'fallback_cb' => false
                    ]);
                    ?>
                </nav>
            </div>
        </header>