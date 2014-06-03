<?php
/**
 * Template for search .
 *
 *
 * @package statsocial
 * @since statsocial 0.1
 *
 * @uses statsocial_prepend_default_sidebar( )
 * @uses statsocial_append_default_sidebar( )
 */
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
do_action( 'statsocial_' . basename( __FILE__ ) );
get_header( $statsocial_document_type );
do_action( 'statsocial_pre_' . basename( __FILE__ ) );
?>


    <?php
    statsocial_prepend_default_sidebar();

    get_sidebar( 'default' );

    statsocial_append_default_sidebar();
    ?>
  <div class="blog-p--core">

<?php statsocial_debug_navitation( __FILE__ ); ?>
<?php statsocial_prepend_loop(); ?>
<?php if ( have_posts() ) { ?>

                    <strong class="f16" id="archives-title">Search Results for "<?php the_search_query(); ?>"</strong>
                    
                    <!-- <h1 class="pagetitle h1">Search Results : <?php the_search_query(); ?></h1> -->
                    <ul class="search-results">
                        <li>
                            <?php
                            statsocial_next_prev_links();
                            ?>
                        </li>
                        <?php
                        // statsocial_loop_title();

    $statsocial_loop_number = 1;

    while ( have_posts() ) {

        the_post();

        $statsocial_loop_class = statsocial_loop_class( $statsocial_loop_number, get_the_ID() );

        printf( '<li class="loop-%1$s%2$s">', esc_attr( trim( $statsocial_loop_class[ 0 ] ) ), esc_attr( rtrim( $statsocial_loop_class[ 1 ] ) )
        );

        $statsocial_loop_number++;
        ?>              
        <<?php statsocial_doctype_elements( 'div', 'article' ); ?> id="post-<?php the_ID(); ?>" <?php statsocial_post_class(); ?>>      
        <?php
        $format = get_post_format();
        /**
         * In category gallery
         *
         *
         *
         *
         */
        if ( in_category( "gallery" ) || has_post_format( "gallery" ) ) {

            get_template_part( 'part', 'gallery' );
            /**
             * In category blog 
             *
             *
             *
             *
             */
        } elseif ( in_category( "blog" ) || has_post_format( "status" ) ) {

            get_template_part( 'part', 'blog' );
        } elseif ( $format !== false ) {

            get_template_part( 'part', $format );
            /**
             * Default loop
             *
             *
             *
             *
             */
        } else {
            ?>
            <?php
            statsocial_entry_title();
            ?>

            <div class="post--footer m-b-x2-g cf">
            <div class="post--footer--section"> 
              <div class="post--footer--section--content"><?php echo statsocial_posted_in(); ?></div>
            </div>
            <div class="post--footer--section">
              <div class="post--footer--section--content"><?php echo statsocial_tagged(); ?></div>
            </div>
            <div class="post--footer--section"> 
              <div class="post--footer--section--content"><?php statsocial_posted_on(true);?></div>
            </div>
          </div>



            <div class="entry-content clearfix">
                <?php
                statsocial_prepend_entry_content();

                statsocial_entry_content();
                ?>
                <br class="clear" />
                <?php
                statsocial_append_entry_content();
                ?>
            </div>

            <!-- edit_post_link( esc_html__( 'Edit', 'statsocial' ) . statsocial_link_unique( 'Post', $post->ID ), '<span class="edit-link">', '</span>' ); -->


                <?php
            }
            ?>
        <br class="clear" />
        </<?php statsocial_doctype_elements( 'div', 'article' ); ?>>
        </li>
        <?php
    } //end while
    ?>

                        <li>
                            <?php
                            statsocial_next_prev_links( "nav-below" );
                            ?>
                        </li>
                    </ul>
                <?php } else { ?>
                    <div class="fail-search cf p-r-x10-g" style="margin-left: 420px">
                        <h2 class="h2 m-b-x2-g l-h-x2-25-g">
                            <?php
                            esc_html_e( "Nothing was found though it was regrettable. Please change the key word if it is good, and retrieve it.", "statsocial" );
                            ?>
                        </h2>
                        <?php get_search_form(); ?>
                    </div>
                <?php } ?>
                <?php statsocial_append_loop(); ?>
            </div>




</div>
<?php get_footer( $statsocial_document_type ); ?>