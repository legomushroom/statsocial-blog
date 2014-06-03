<?php
/**
 * Template part file part
 *
 * @package statsocial
 * @since statsocial 0.940
 *
 */
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
global $template;
do_action( 'statsocial_pre_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) );
$format = get_post_format();

if ( false === $format ) {

    $statsocial_entry_meta_class = 'post--date entry-meta-default';
} else {

    $statsocial_entry_meta_class = 'entry-meta-' . $format;
}
        statsocial_entry_title();
?>

<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>



        <div class="<?php echo $statsocial_entry_meta_class; ?>" style="font-weight: normal;" >
            </a>
            Posted on 
            <?php
            statsocial_posted_on(true);
            ?>
        </div>

        <div class="entry-content clearfix">
            <?php
            statsocial_prepend_entry_content();

            statsocial_entry_content();

            wp_link_pages( 'before=<p class="pagenate clearfix">&after=</p>&next_or_number=number&pagelink=<span>%</span>' );
            ?>
            <br class="clear" />
            <?php
            statsocial_append_entry_content();
            ?>
        </div>

        <div class="share cf">
            <div id="" title="" class="icon ">
              <a href="https://twitter.com/share" class="twitter-share-button" data-via="statsocial">Tweet</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
              <svg viewBox="0 0 32 32">
                <use xlink:href="#twitter-icon"></use>
              </svg>
            </div>
            <div id="" title="" class="icon ">
              <div id="fb-root"></div>
              <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.0";
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script>
              <div class="fb-share-button" data-href="<?php echo curPageURL(); ?>" data-type="icon"></div>
              <svg viewBox="0 0 32 32">
                <use xlink:href="#fb-icon"></use>
              </svg>
            </div>
            <div id="" title="" class="icon ">
              <script src="//platform.linkedin.com/in.js" type="text/javascript">
                lang: en_US
              </script>
              <script type="IN/Share"></script>
              <svg viewBox="0 0 32 32">
                <use xlink:href="#linkedin-icon"></use>
              </svg>
            </div>
            <div id="" title="" class="icon">
              <!-- Place this tag where you want the share button to render. -->
              <div class="g-plus" data-google-plus data-action="share" data-annotation="none" data-height="15"></div>

              <!-- Place this tag after the last share tag. -->
              <script type="text/javascript">
                (function() {
                  var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                  po.src = 'https://apis.google.com/js/platform.js';
                  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                })();
              </script>
              <svg viewBox="0 0 32 32">
                <use xlink:href="#google-plus-icon"></use>
              </svg>
            </div>
        </div>
        <div class="post--footer">
          <div class="post--footer--section"> 
            <div class="post--footer--section--content"><?php echo statsocial_posted_in(); ?></div>
          </div>
          <div class="post--footer--section">
            <div class="post--footer--section--content"><?php echo statsocial_tagged(); ?></div>
          </div>
          <div class="post--footer--section"> 
            <!-- <div class="post--footer--section--content"><a class="is-hoverable" href="#">Leave a reply</a></div> -->
          </div>
        </div>

<?php
if ( is_single() ) {

    statsocial_prev_next_post( 'nav-below' );
}

comments_template( '', true );

do_action( 'statsocial_after_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) );
?>
