<?php
/**
 * Template for search form.
 *
 *
 * @package statsocial
 * @since statsocial 0.1
 */
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
global $statsocial_document_type, $template;
do_action( 'statsocial_pre_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) );

if ( 'html5' == $statsocial_document_type ) {
    ?>
    <form method="get" name="searchform" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" <?php statsocial_doctype_elements( '', 'role="search"' ); ?>>
        <div id="" class="search-input">
            <input type="text" class="search-input--input" id="s" name="s" value="<?php the_search_query(); ?>" pattern="^[^(<|>)]+$" title="<?php esc_attr_e( 'must not contain html tags', 'statsocial' ); ?>">
            <div id="" title="" class="icon ">
              <svg viewBox="0 0 32 32">
                <use xlink:href="#search-icon"></use>
              </svg>
            </div>
          </div>
        <input type="submit" style="position: absolute; left: -100%;visibility: hidden; width:0; height: 0" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'statsocial' ); ?>" />
    </form>
    <?php
} else {
    ?>
    <form method="get" name="searchform" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div id="" class="search-input">
            <input type="text" class="search-input--input" id="s" name="s" value="<?php the_search_query(); ?>" pattern="^[^(<|>)]+$" title="<?php esc_attr_e( 'must not contain html tags', 'statsocial' ); ?>">
            <div id="" title="" class="icon ">
              <svg viewBox="0 0 32 32">
                <use xlink:href="#search-icon"></use>
              </svg>
            </div>
          </div>
        <input type="submit" style="position: absolute; left: -100%;visibility: hidden; width:0; height: 0" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'statsocial' ); ?>" />
    </form>
    <?php
}
do_action( 'statsocial_after_part_' . basename( __FILE__, '.php' ) . '_' . basename( $template ) );
?>