<?php

/**

 * The Header template for our theme

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package WordPress

 * @subpackage Twenty_Twelve

 * @since Twenty Twelve 1.0

 * Template Name: Главная*/

?>
<!DOCTYPE html>

<!--[if IE 7]>

<html class="ie ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html class="ie ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 7) | !(IE 8)  ]><!-->

<html <?php language_attributes(); ?>>

<!--<![endif]-->

<head>

    <link rel="shortcut icon" href="http://blog.1-mok.ru/favicon.ico" type="image/x-icon">

    <meta charset="<?php bloginfo('charset'); ?>" />

    <!--<meta name="viewport" content="width=device-width"/>-->
    <meta name="viewport" content="width=1300" />

    <title>Новости Первого Московского Образовательного Комплекса
        <?php wp_title( '|', true, 'right' ); ?>
    </title>

    <link href="http://allfont.ru/allfont.css?fonts=open-sans" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript"></script>

    <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <div class="header">

        <div class="wrapper">

            <div class="left logo">

                <a href="http://www.1-mok.ru"><img src="https://static.tildacdn.com/tild6466-3662-4439-b564-613333353635/logo_1_mok_horiz-02-.svg"
                        style="width: 100px"></a>

                <div class="text">

                    <span class="text-top">

                        Государственное бюджетное профессиональное образовательное учреждение

                    </span><br />

                    <span class="text-bottom">

                        Первый Московский Образовательный Комплекс

                    </span>

                </div>

            </div>

            <div class="right contacts">

            <div class="tell">
            <a href="tel:+7(495)120-13-02" target="_self" class="tell">+7 (495) 120-13-02</a>
                </div>

            </div>

            <div class="clear-fix"></div>

        </div>

    </div>

    <div id="header-menu" class="header-menu">

        <div class="wrapper">



            <div class="right menu-list">

                <ul>

                    <a id="menu-toggler" href="javascript:void(0);"><span></span></a>

                    </li>



                    <?php $args = array(

                    'menu' => 'Main_menu',

                    'container' => 'div',

                    'container_class' => '',

                    'theme_location' => $menu,

                    'menu_id' => '',

                    'echo' => true,

                    'fallback_cb' => 'wp_page_menu',

                    'before' => '',

                    'after' => '',

                    'link_before' => '',

                    'link_after' => '',

                    'items_wrap' => '%3$s',

                    'depth' => 0

                );

                wp_nav_menu($args); ?>

                </ul>

            </div>


            <div class="clear-fix"></div>



        </div>

        <div class="inner">

            <div class="inner-menu-list">

                <ul>

                    <?php $args = array(

                    'menu' => 'Main_menu',

                    'container' => 'div',

                    'container_class' => '',

                    'theme_location' => $menu,

                    'menu_id' => '',

                    'echo' => true,

                    'fallback_cb' => 'wp_page_menu',

                    'before' => '',

                    'after' => '',

                    'link_before' => '',

                    'link_after' => '',

                    'items_wrap' => '<ul>%3$s</ul>',

                    'depth' => 0

                );

                wp_nav_menu($args); ?>

                </ul>

            </div>


        </div>

    </div>