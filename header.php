<?php
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
global $template, $statsocial_link_unique_text;
do_action( 'statsocial_pre_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
    <!-- <link rel="stylesheet" href="http://dev.statsocial.com/css/main.css"> -->
    <link rel="stylesheet" href="/website/front-end/css/main.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  </head>
  <body <?php body_class(); ?>>
    <?php include 'icons.svg'; ?>
    <div class="blog-p cf">

        <div id="js-header" class="main-header is-static is-closed">
          <a href="http://statsocial.com/" class="sidebar-logo-e is-blue-bg is-hoverable">
            <div id="js-main-icon" title="" class="icon ">
              <svg viewBox="0 0 32 32">
                <use xlink:href="#header-logo-icon"></use>
              </svg>
            </div>
          </a>
          <div id="js-menu-btn" class="page-menu-header">
            <div id="js-menu-launcher" title="" class="icon page-header2--menu-icon">
              <svg viewBox="0 0 32 32">
                <use xlink:href="#menu-icon"></use>
              </svg>
            </div>
            <div class="header-btn-e is-hoverable-blue2 is-check f-l-g"><a href="http://statsocial.com/request-demo/" class="is-hoverable is-checkable">Request Demo</a></div>
            <div id="front-page-header-signup" class="header-btn-e is-hoverable-blue2 f-r-g"><a href="http://statsocial.com/sign-up/" class="is-hoverable is-checkable">Sign Up</a></div>
            <div id="front-page-header-login" class="header-btn-e is-hoverable-blue2 f-r-g"><a href="http://statsocial.com/account/" class="is-hoverable is-checkable">Log In</a></div>
            <div class="main-header-menu">
              <div class="main-header-menu-section-l">
                <a href="http://statsocial.com/about/" class="main-header-menu-item is-hoverable is-checkable">About</a>
                <a href="http://statsocial.com/faq/" class="main-header-menu-item is-hoverable is-checkable">FAQ</a>
                <a href="http://statsocial.com/support/" class="main-header-menu-item is-hoverable is-checkable">Support</a>
                <a href="http://statsocial.com/api/" class="main-header-menu-item is-hoverable is-checkable">API</a></div>
              <div class="main-header-menu-section-l">
                <a href="http://statsocial.com/sample-reports/" class="main-header-menu-item is-hoverable is-checkable">Sample reports</a>
                <a href="http://statsocial.com/top-investors-twitter/" class="main-header-menu-item is-hoverable is-checkable">Top 1,000 investors</a>
              </div>
              <div class="main-header-menu-section-l">
                <a href="http://blog.statsocial.com/category/press/" class="main-header-menu-item is-hoverable is-checkable">Press</a>
                <a href="http://blog.statsocial.com/" class="main-header-menu-item is-hoverable is-checkable">Blog</a>
                <a href="http://statsocial.com/privacy-policy/" class="main-header-menu-item is-hoverable is-checkable">Privacy policy</a>
                <a href="http://statsocial.com/terms-of-service/" class="main-header-menu-item is-hoverable is-checkable">Terms of service</a>
              </div>
            </div>
          </div>
        </div>
        <div class="plog-p--main">


