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
          <div class="icon is-white is-hoverable" onclick="window.location.href='https://twitter.com/statsocial';" title="" id="">
            <svg viewBox="0 0 32 32">
               <use xlink:href="#twitter-icon"/>
            </svg>
          </div>
          <div class="icon is-white is-hoverable" onclick="window.location.href='https://www.facebook.com/statsocial';"  title="" id="">
            <svg viewBox="0 0 32 32">
              <use xlink:href="#fb-icon"/>
            </svg>
          </div>
          <div class="icon is-white is-hoverable" onclick="window.location.href='https://www.linkedin.com/company/3188281?trk=prof-0-ovw-curr_pos';"title="" id="">
            <svg viewBox="0 0 32 32">
              <use xlink:href="#linkedin2-icon"/>
            </svg>
          </div>
        </div>
        <div class="footer-about-fork-l cf">
          <div class="footer-about-b">
            <div class="header-be">INFO</div>
            <a class="item-be is-hoverable" target="_blank" href="{$smarty.const.STATIC_DIR}/about/">About</a>
            <a class="item-be is-hoverable" target="_blank" href="{$smarty.const.STATIC_DIR}/press/">Press</a>
            <a class="item-be is-hoverable" target="_blank" href="{$smarty.const.STATIC_DIR}/faq/">FAQ</a>
            <a class="item-be is-hoverable" target="_blank" href="{$smarty.const.STATIC_DIR}/support/">Support</a>
          </div>
          <div class="footer-about-b">
            <div class="header-be">PRODUCT DEMOS</div>
            <a class="item-be is-hoverable" target="_blank" href="{$smarty.const.STATIC_DIR}/sample-reports/">Sample Reports</a>
            <a class="item-be is-hoverable" target="_blank" href="{$smarty.const.STATIC_DIR}/request-demo/">Request Demo</a>
          </div>
          <div class="footer-about-b">
            <div class="header-be">LEGAL</div>
            <a class="item-be is-hoverable" target="_blank" href="{$smarty.const.STATIC_DIR}/privacy-policy/">Privacy Policy</a>
            <a class="item-be is-hoverable" target="_blank" href="{$smarty.const.STATIC_DIR}/about/">Terms of Use</a>
          </div>
        </div>
        <div class="footer-copyright-b">&copy;Copyright 2014 StatSocial (owned by PeekAnalytics, Inc). Patent Pending. All Rights Reserved.</div>
      </div>
</body>
</html><?php do_action( 'statsocial_after_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) ); ?>
