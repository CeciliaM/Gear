<?php
/**
 * Basic WooCommerce support
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

 <div class="row">
   <? if (is_product_category()) : ?>
     <div class="large-3 columns">
       <?php get_sidebar(); ?>
     </div>
   <? endif; ?>
   <? if (is_product_category()) : ?>
 	<div class="small-12 large-9 columns" role="main">
   <? else: ?>
   <div class="small-12 large-12 columns" role="main">
   <? endif; ?>

   <nav aria-label="You are here:" role="navigation">
     <ul class="breadcrumb">
       <?php woocommerce_breadcrumb(); ?>
     </ul>
   </nav>

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( woocommerce_content() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>



<!--  <div class="row">
			<div class="small secondary expanded button-group">
  			<a class="button">Facebook</a>
  			<a class="button">Twitter</a>
  			<a class="button">Instagram</a>
        <a class="button">Pinterest</a>
			</div>-->

		<!-- <div class="tabs-panel" id="panel2">-->
		<!--	<div class="row">
				<div class="medium-4 columns">
				<h3>Technique</h3>
				<p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
				</div>
				<div class="medium-4 columns">
				<h3>Waterproof</h3>
				<p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
				</div>
				<div class="medium-4 columns">
				<h3>Entretien</h3>
				<p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
				</div>
			</div>
	</div>-->
<!-- </div> -->


	</div>


<?php get_footer();
