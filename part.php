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
              <svg viewBox="0 0 32 32">
                <use xlink:href="#twitter-icon"></use>
              </svg>
            </div>
            <div id="" title="" class="icon ">
              <svg viewBox="0 0 32 32">
                <use xlink:href="#fb-icon"></use>
              </svg>
            </div>
            <div id="" title="" class="icon ">
              <svg viewBox="0 0 32 32">
                <use xlink:href="#linkedin-icon"></use>
              </svg>
            </div>
            <div id="" title="" class="icon ">
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
