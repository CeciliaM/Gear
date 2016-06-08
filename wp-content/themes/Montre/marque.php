<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="row small-up-1 meduim-up-3 large-up-3">
  <?php
    $args = array(
    'post_type' => 'product',
    'posts_per_page' => 3,
    'meta_key' => 'total_sales',
    'orderby' => 'meta_value_num',
    );

    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
    while ( $loop->have_posts() ) : $loop->the_post();
    // woocommerce_get_template_part( 'content', 'product' );
    ?>
  <div class="column text-center">
    <a href="<?php the_permalink(); ?>" class="thumbnail"><?php the_post_thumbnail(); ?></a>
    <h5><?php the_title(); ?></h5>
    <p>Marque</p>
    <a href="<?php the_permalink(); ?>" class="button">Découvrir la marque <i class="fa fa-caret-right" aria-hidden="true"></i></a>
  </div>
  <?php
  endwhile;
  } else {
  echo __( 'No products found' );
  }

  wp_reset_query();
  ?>
</div>

<?php get_footer();
