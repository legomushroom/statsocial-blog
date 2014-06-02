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
    <div class="blog-p">
      <div class="blog-p--core cf">
