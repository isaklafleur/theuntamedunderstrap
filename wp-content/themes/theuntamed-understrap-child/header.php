<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
    <?php do_action( 'wp_body_open' ); ?>
    <div class="site" id="page">




        <!-- ******************* The Navbar Area ******************* -->

        <div class="navbar smart-scroll d-flex justify-content-between align-items-center bg-primary">
            <div class="p-3"><a href="#" class="primarynavlinks">MENU+</a></div>
            <div class="p-3"><img src="https://uploads-ssl.webflow.com/615b085387c00df1534c8d44/6166e64aed05c62b2e51f093_The_Untamed_Logo_210705_white-p-500.png" alt="The Untamed Logo" width="110"
                    height="46"></div>
            <div class="p-3"><a href="#" class="primarynavlinks">ACCOUNT</a> <a href="#" class="primarynavlinks pl-3">BAG 00</a></div>
        </div>

        <!-- #wrapper-navbar end -->