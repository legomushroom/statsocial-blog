<?php
/**
 * The template part file for footer.
 *
 *
 * @package statsocial
 * @since statsocial 0.1
 *
 * @uses wp_upload_dir( )
 * @uses statsocial_upload_image_parser( $footer_image_uri, 'inline','#ft' )
 * @uses is_active_sidebar( 'sidebar-4' )
 * @uses get_bloginfo( 'name' )
 * @uses get_bloginfo( 'rss2_url' )
 * @uses ucwords( )
 * @uses wp_footer( )
 * @uses statsocial_prepend_footer( )
 * @uses statsocial_append_footer( )
 * @uses statsocial_append_doc( )
 */
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
global $statsocial_current_theme_name, $statsocial_current_data_theme_uri, $template, $statsocial_accessibility_link;
do_action( 'statsocial_pre_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) );
?>
<div class="footer-l">
        <div class="social-share-b">
          <a href="https://twitter.com/statsocial" class="icon is-white is-hoverable" title="" id="">
            <svg viewBox="0 0 32 32">
               <use xlink:href="#twitter-icon"/>
            </svg>
          </a>
          <a href="https://www.facebook.com/statsocial" class="icon is-white is-hoverable" title="" id="">
            <svg viewBox="0 0 32 32">
              <use xlink:href="#fb-icon"/>
            </svg>
          </a>
          <a href="https://www.linkedin.com/company/3188281?trk=prof-0-ovw-curr_pos" class="icon is-white is-hoverable" title="" id="">
            <svg viewBox="0 0 32 32">
              <use xlink:href="#linkedin2-icon"/>
            </svg>
          </a>
        </div>
        <div class="footer-about-fork-l cf">
          <div class="footer-about-b">
            <div class="header-be">INFO</div>
            <a class="item-be is-hoverable" target="_blank" href="http://statsocial.com/about/">About</a>
            <a class="item-be is-hoverable" target="_blank" href="http://statsocial.com/press/">Press</a>
            <a class="item-be is-hoverable" target="_blank" href="http://statsocial.com/faq/">FAQ</a>
            <a class="item-be is-hoverable" target="_blank" href="http://statsocial.com/support/">Support</a>
          </div>
          <div class="footer-about-b">
            <div class="header-be">PRODUCT DEMOS</div>
            <a class="item-be is-hoverable" target="_blank" href="http://statsocial.com/sample-reports/">Sample Reports</a>
            <a class="item-be is-hoverable" target="_blank" href="http://statsocial.com/request-demo/">Request Demo</a>
          </div>
          <div class="footer-about-b">
            <div class="header-be">LEGAL</div>
            <a class="item-be is-hoverable" target="_blank" href="http://statsocial.com/privacy-policy/">Privacy Policy</a>
            <a class="item-be is-hoverable" target="_blank" href="http://statsocial.com/about/">Terms of Use</a>
          </div>
        </div>
        <div class="footer-copyright-b">&copy; Copyright 2014 StatSocial (owned by PeekAnalytics, Inc). Patent Pending. All Rights Reserved.</div>
      </div>
    <?php wp_footer(); ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/header.js"></script>
</body>
</html><?php do_action( 'statsocial_after_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) ); ?>
