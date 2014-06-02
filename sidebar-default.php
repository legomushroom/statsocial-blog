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

  <h2>StatSocial</h2>
  <ul class="">
    <li class=""><a href="http://statsocial.com">Stat Social</a></li>
    <li class=""><a href="http://statsocial.com/sample-reports/">Stat Social Demo</a></li>
    <li class=""><a href="#">Stat Social Pricing</a></li>
    <li class=""><a href="http://statsocialblog.disqus.com/latest.rss">Comments RSS</a></li>
    <li class=""><a href="?feed=rss2">Posts RSS</a></li>
    <li class=""><a href="https://twitter.com/statsocial">Twitter</a></li>
    <li class=""><a href="https://www.facebook.com/statsocial">Facebook</a></li>
    <li class=""><a href="https://www.linkedin.com/company/3188281?trk=prof-0-ovw-curr_pos">LinkedIn</a></li>
  </ul>



	</<?php statsocial_doctype_elements( 'div', 'nav' ); ?>>
	<?php do_action( 'statsocial_after_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) ); ?>
