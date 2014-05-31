<?php
/**
 * Template part file for default sidebar.
 *
 *
 * @package statsocial
 * @since statsocial 0.1
 */
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
global $template;
do_action( 'statsocial_pre_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) );
?>
<<?php statsocial_doctype_elements( 'div', 'nav' ); ?> class="blog-p--sidebar" <?php statsocial_doctype_elements( '', 'role="navigation"' ); ?>>
<h2 class="blog-p--header">What is StatSocial?</h2>
  <p>
    PeekAnalytics delivers enterprise-class 
    Twitter analytics that help marketers
    understand their social consumers.By 
    identifying where Twitter users exist 
    elsewhere on the Web, PeekAnalytics
    offers an unparalleled level of 
    demographic and psychographic 
    insights from consumer data 
    aggregated not just from Twitter,but 
    from over sixty social sites and every 
    major blog platform.
  </p>
  <?php
  if ( !dynamic_sidebar( 'sidebar-1' ) ) {
    statsocial_sidebar_menus( 'default' );
  }

  ?>



	</<?php statsocial_doctype_elements( 'div', 'nav' ); ?>>
	<?php do_action( 'statsocial_after_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) ); ?>
