<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> <?php if(ale_get_option('sitecustomscrollbar') == 1) { echo 'style="overflow:hidden;" data-scroll="scroll" '; } else { echo 'data-scroll="hidescroll"';} ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="top"></div>
    <div class="wrapper">
    <header id="topheader" class="cf">
        <div class="lefthead">
            <div class="leftnav">
                <nav id="leftnav" role="navigation">
                    <?php
                    if ( has_nav_menu( 'left_menu' ) ) {
                        wp_nav_menu(array(
                            'theme_location'=> 'left_menu',
                            'menu'			=> 'Left Menu',
                            'menu_class'	=> 'leftmenu cf',
                            'walker'		=> new Aletheme_Nav_Walker(),
                            'container'		=> '',
                        ));
                    }
                    ?>
                </nav>
                <nav id="leftmobilenav" role="navigation">
                    <?php
                    if ( has_nav_menu( 'left_menu' ) ) {
                        wp_nav_menu(array(
                            'theme_location'=> 'left_menu',
                            'menu'   => 'Left Menu',
                            'menu_class' => 'mobilemenu',
                            'container'  => '',
                            'items_wrap' => '<select id="%1$s" class="%2$s drop headerfont">%3$s</select>',
                            'indent_string' => '&ndash;&nbsp;',
                            'indent_after' => '',
                            'walker' => new Aletheme_Dropdown_Nav_Walker(),
                        ));
                    } ?>
                </nav>
            </div>
        </div>
        <div class="righthead">
            <div class="rightnav">
                <nav id="rightnav" role="navigation">
                    <?php
                    if ( has_nav_menu( 'right_menu' ) ) {
                        wp_nav_menu(array(
                            'theme_location'=> 'right_menu',
                            'menu'			=> 'Right Menu',
                            'menu_class'	=> 'rightmenu cf',
                            'walker'		=> new Aletheme_Nav_Walker(),
                            'container'		=> '',
                        ));
                    }
                    ?>
                </nav>
                <nav id="rightmobilenav" role="navigation">
                    <?php
                    if ( has_nav_menu( 'right_menu' ) ) {
                        wp_nav_menu(array(
                            'theme_location'=> 'right_menu',
                            'menu'   => 'Right Menu',
                            'menu_class' => 'mobilemenu',
                            'container'  => '',
                            'items_wrap' => '<select id="%1$s" class="%2$s drop headerfont">%3$s</select>',
                            'indent_string' => '&ndash;&nbsp;',
                            'indent_after' => '',
                            'walker' => new Aletheme_Dropdown_Nav_Walker(),
                        ));
                    } ?>
                </nav>
            </div>
        </div>
        <div class="logo">
            <h1>
                <?php if(ale_get_option('sitelogo')){ ?>
                <a href="<?php echo home_url(); ?>/" class="customlogo logolinkurl"><img src="<?php echo ale_get_option('sitelogo'); ?>" /></a>
                <?php } else { ?>
                <a href="<?php echo home_url(); ?>/" class="alelogo logolinkurl"><?php echo bloginfo('name'); ?></a>
                <?php } ?>
            </h1>
        </div>

    </header>
    <div id="content-main" role="main" class="cf">
        <div class="padding">