<?php
/**
 * The template for displaying Auther.
 * *
 * @package statsocial
 * @since Raindrop 0.1
 *
 * @uses get_header( $statsocial_document_type )	include template part file
 * @uses statsocial_yui_class_modify( )	add class attribute value
 * @uses is_2col_statsocial( 'style="width:99%;"' )	add inline style attribute
 * @uses get_avatar( )
 * @uses apply_filters( 'statsocial_author_bio_avatar_size', 60 )
 * @uses have_posts( )
 * @uses have_posts( )
 * @uses the_post( )
 * @uses get_option( 'date_format' )
 * @uses the_time( $statsocial_date_format )
 * @uses the_permalink( )
 * @uses the_title_attribute( )
 * @uses statsocial_entry_title( )
 * @uses the_category( ', ' )
 * @uses get_the_tag_list( '', ', ' )
 * @uses get_sidebar( 'extra' )	include template part file
 * @uses get_sidebar( 'default' )	include template part file
 * @uses get_footer( $statsocial_document_type ) 
 * @uses statsocial_prepend_default_sidebar( )
 * @uses statsocial_append_default_sidebar( )
 */
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

$curauth = get_userdata( intval( $author ) );

get_header( $statsocial_document_type );

do_action( 'statsocial_pre_' . basename( __FILE__ ) );

statsocial_debug_navitation( __FILE__ );
?>



<?php
  statsocial_prepend_default_sidebar();

  get_sidebar( 'default' );

  statsocial_append_default_sidebar();
?>


<div class="blog-p--core cf">


<h2 id="archives-title">
    <?php printf( esc_html__( 'Author: %s %s', 'statsocial' ), $curauth->first_name, $curauth->last_name ); ?>
</h2>

<div class="user-thumb">
  <div class="user-thumb__avatar">
    <?php
      echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'statsocial_author_bio_avatar_size', 60 ), '', esc_attr__( 'Author Avatar Image', 'statsocial' ) );
    ?>
  </div>
  <div class="user-thumb__text">
    <?php printf( esc_html__( '%s %s', 'statsocial' ), $curauth->first_name, $curauth->last_name ); ?>
    <?php echo wpautop( esc_html( $curauth->description ) ); ?>
  </div>


</div>


 

<!-- 
  $image = get_the_post_thumbnail( $id );
  printf( $html, $link, esc_attr( $title ), $image );
 -->

<?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
?>
<div class="post-thumb hoverable-area">

<?php
  $statsocial_date_format = get_option( 'date_format' );
  $statsocial_year        = get_the_time( 'Y' );
  $statsocial_month       = get_the_time( 'm' );
  $statsocial_day         = get_the_time( 'd' );
  $day_link               = esc_url( get_day_link( $statsocial_year, $statsocial_month, $statsocial_day ) . '#post-' . $post->ID );
  statsocial_entry_title( array( 'statsocial_title_element' => 'span' ) );
?>
  <div class="post-thumb__text">
    <div class="post-thumb__text__meta">
      <span class="post-thumb__meta-bit">
      <?php
        printf( '<a href="%1$s" title="%2$s"><%4$s class="entry-date updated" %5$s>%3$s</%4$s></a>', $day_link, esc_attr( 'archives daily ' . get_the_time( $statsocial_date_format ) ), get_the_date( $statsocial_date_format ), statsocial_doctype_elements( 'span', 'time', false ), statsocial_doctype_elements( '', 'datetime="' . esc_attr( get_the_date( 'c' ) ) . '"', false ));
      ?>
      </span>
      <span class="post-thumb__meta-bit">
       <?php
        esc_html_e( ' Categories: ', 'statsocial' );
        the_category( ', ' );
       ?>
      </span>
      <span class="post-thumb__meta-bit">
        <?php
          esc_html_e( ' Tags: ', 'statsocial' );
          echo get_the_tag_list( '', ', ' );
        ?>
      </span>
      <?php
        

       
      ?>
    </div>

    <?php

      the_content();
    ?>
  </div>

</div>

<?php
    } //end while			
  } else {
?>
<p><?php esc_html_e( 'No posts by this author.', 'statsocial' ); ?></p>
                        <?php } //if ( have_posts( ) ) 
                    ?>

                <?php statsocial_next_prev_links( "nav-below" ); ?>
            </div>
            </<?php statsocial_doctype_elements( 'div', 'article' ); ?>>
  </div>
</div>
<?php get_footer( $statsocial_document_type ); ?>