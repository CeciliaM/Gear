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

<div role="main">
	<section id="slider">
		<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
			<ul class="orbit-container">
			<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
			<button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
			<li class="is-active orbit-slide">
				<a href="http://localhost/montres/index.php/categorie-produit/montres/">
					<img class="orbit-image" src="<?php bloginfo('template_directory') ?>/assets/images/slider/slide1.png" alt="Space">
				</a>
			</li>
			<li class="orbit-slide">
				<a href="http://localhost/montres/index.php/categorie-produit/montres/">
				<img class="orbit-image" src="<?php bloginfo('template_directory') ?>/assets/images/slider/slide2.png" alt="Space">
			</a>
			</li>
			<li class="orbit-slide">
				<a href="http://localhost/montres/index.php/categorie-produit/montres/">
				<img class="orbit-image" src="<?php bloginfo('template_directory') ?>/assets/images/slider/slide3.png" alt="Space">
			</a>
			</li>
			</ul>
			<nav class="orbit-bullets">
				<button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
				<button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
				<button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
			</nav>
		</div>
	</section>

	<section id="news">
		<div class="row column text-center">
		<h2><a href="http://localhost/montres/index.php/categorie-produit/nouveautes/">Toutes les nouveautés</a></h2>
		<hr>
		</div>
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
				<p>marque <?php

							global $post;
							$brands_id = get_term_by('slug', 'marque', 'product_cat');
							$terms = get_the_terms( $post->ID, 'product_cat', 'hide_empty=0' );
							foreach ( $terms as $term ){

									$category_id = $term->term_id;
									$category_name = $term->name;
							    $category_slug = $term->slug;

							    echo '<a href="'. get_term_link($term->slug, 'product_cat') .'">'.$category_name.'</a>';
							}
							?>
			</p>
				<a href="<?php the_permalink(); ?>" class="button">Voir le produit <i class="fa fa-caret-right" aria-hidden="true"></i></a>
			</div>
			<?php
			endwhile;
			} else {
			echo __( 'No products found' );
			}

			wp_reset_query();
			?>
		</div>
		<!--<div class="row column text-center">
			<a class="button-all">Tout voir</a>
		</div>-->
	</section>

	<section id="marques">
		<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
			<ul class="orbit-container">
				<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
				<button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>

				<li class="is-active orbit-slide">
					<img class="orbit-image" src="<?php bloginfo('template_directory') ?>/assets/images/marques/breguet.png" height="430" alt="Space">
					<figcaption>
						<h3><?php the_category_id('breguet');?></h3>
						<p>Aliquet a. Donec placerat posuere feugiat. Aenean sit amet sodales erat, eget iaculis risus. Vestibulum in dictum lorem. Quisque arcu velit, suscipit eget scelerisque interdum, commodo at mi. Nullam eu interdum turpis. Ut quis mi sapien. Curabitur luctus euismod mauris, quis varius lorem egestas ac. Aenean ornare sit amet nibh tempor porta.</p>
						<a href="<?php the_permalink(); ?>" class="button">Découvrir la marque <i class="fa fa-caret-right" aria-hidden="true"></i></a>
					</figcaption>
				</li>

				<li class="is-active orbit-slide">
					<img class="orbit-image" src="<?php bloginfo('template_directory') ?>/assets/images/marques/breguet.png" height="430" alt="Space">
					<figcaption>
						<h3>MARQUES</h3>
						<p>Aliquet a. Donec placerat posuere feugiat. Aenean sit amet sodales erat, eget iaculis risus. Vestibulum in dictum lorem. Quisque arcu velit, suscipit eget scelerisque interdum, commodo at mi. Nullam eu interdum turpis. Ut quis mi sapien. Curabitur luctus euismod mauris, quis varius lorem egestas ac. Aenean ornare sit amet nibh tempor porta.</p>
						<a href="<?php the_permalink(); ?>" class="button">Découvrir la marque <i class="fa fa-caret-right" aria-hidden="true"></i></a>
					</figcaption>
				</li>
				<li class="is-active orbit-slide">
					<img class="orbit-image" src="<?php bloginfo('template_directory') ?>/assets/images/marques/hamilton.png" height="430" alt="Space">
					<figcaption>
						<h3>hamilton</h3>
						<p>Aliquet a. Donec placerat posuere feugiat. Aenean sit amet sodales erat, eget iaculis risus. Vestibulum in dictum lorem. Quisque arcu velit, suscipit eget scelerisque interdum, commodo at mi. Nullam eu interdum turpis. Ut quis mi sapien. Curabitur luctus euismod mauris, quis varius lorem egestas ac. Aenean ornare sit amet nibh tempor porta.</p>
						<a href="<?php the_permalink(); ?>" class="button">Découvrir la marque <i class="fa fa-caret-right" aria-hidden="true"></i></a>
					</figcaption>
				</li>
				<li class="is-active orbit-slide">
					<img class="orbit-image" src="<?php bloginfo('template_directory') ?>/assets/images/marques/breguet.png" height="430" alt="Space">
					<div>
						<h3 class="text-center">MARQUES 2</h3>
						<p class="text-center">Aliquet a. Donec placerat posuere feugiat. Aenean sit amet sodales erat, eget iaculis risus. Vestibulum in dictum lorem. Quisque arcu velit, suscipit eget scelerisque interdum, commodo at mi. Nullam eu interdum turpis. Ut quis mi sapien. Curabitur luctus euismod mauris, quis varius lorem egestas ac. Aenean ornare sit amet nibh tempor porta.</p>
						<a href="#" class="button text-center">Découvrir la marque <i class="fa fa-caret-right" aria-hidden="true"></i></a>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<section id="bestsel">
		<div class="row column text-center">
		<h2><a href="#">Meilleures ventes</a></h2>

		<hr>
		</div>
		<div class="row small-up-1 meduim-up-4 large-up-4">
			<?php
				$args = array(
				'post_type' => 'product',
				'posts_per_page' => 4,
				'meta_key' => 'total_sales',
				'orderby' => 'meta_value_num',
				);

				$loop = new WP_Query( $args );
				if ( $loop->have_posts() ) {
				while ( $loop->have_posts() ) : $loop->the_post();
				// woocommerce_get_template_part( 'content', 'product' );
				?>
				<div class="column text-center meilleurs-ventes">
					<a href="<?php the_permalink(); ?>" class="thumbnail"><?php the_post_thumbnail(); ?></a>
					<hr>
					<h5><?php the_title(); ?></h5>
					<p><?php do_action( 'woocommerce_after_shop_loop_item_title'); ?></p>
					<a href="<?php the_permalink(); ?>" class="button">En savoir plus <i class="fa fa-caret-right" aria-hidden="true"></i></a>
				</div>
				<?php
				endwhile;
				} else {
				echo __( 'No products found' );
				}

				wp_reset_query();
				?>
		</div>
	</section>

	<section id="blog">
		<div class="row column text-center">
		<h2><a hreh="http://localhost/montres/index.php/blog/">Dernières actualités</a></h2>
		<hr>
		</div>
		<div class="row">
			<?php if ( have_posts() ) : ?>
				<?php query_posts( 'posts_per_page=2' ); ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="small-12 meduim-6 large-6 columns"><div class="media-object">
				  <div class="media-object-section small-12 meduim-6 large-6 columns">
				  <a href="<?php the_permalink(); ?>" class="thumbnail"><?php the_post_thumbnail(); ?></a>
				  </div>
					  <div class="media-object-section small-12 meduim-6 large-6 columns ">
					    <h4><?php the_title(); ?></h4>
					    <p><?php the_excerpt(); ?></p>
							<a href="<?php echo get_permalink(); ?>" class="button">Lire la suite <i class="fa fa-caret-right" aria-hidden="true"></i></a>
					  </div>
					</div>
				</div>
				<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; // End have_posts() check. ?>
		</div>
	</section>
</div>



<?php get_footer();
