<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@0,600;1,600&display=swap" rel="stylesheet"> 
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body>
<div class="site-wrap">
    <nav class="main-nav-wrap">
        <a href="<?php bloginfo( 'url' ); ?>" class="main-nav__logo main-nav__logo_mobile"><span>JeNeSuisPASunCV</span></a>
        <input type="checkbox" id="main-nav__toggler">
        <div id="main-nav__hamburger" class="button-primary"><div id="main-nav__hamburger__line"></div></div>
        <div id="main-nav__splash">
            <div id="main-nav__splash_1">
                <div id="main-nav__splash_2">
                    <div class="main-nav__container">
                        <a href="<?php bloginfo( 'url' ); ?>" class="main-nav__logo main-nav__logo_desktop"><span>ProfilScan</span></a>
                        <?php
							if ( has_nav_menu( 'principal' ) ) : ?>
								<?php wp_nav_menu(array(
									'menu' => 'Principal', 
									'menu_class' => 'main-menu',
									'walker' => new CSS_Menu_Walker()
								)); ?>
							<?php endif;
						?>
                    </div>
                </div>
            </div>    
        </div>
    </nav>