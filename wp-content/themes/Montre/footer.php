<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="reassurance"> <!-- REASSURANCE -->
			<div class="row">
			<div class="row small-up-1 meduim-up-12 large-up-4">
				<div class="column text-center">
					<p>Paiement<br/><span>sécurisé</span></p>
					<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
				</div>
				<div class="column text-center">
					<p>Frais de port offerts<br/>
					<span>à partir de 50€ d’achats</span></p>
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<div class="column text-center">
					<p>Service Client <br/><span>+33 (0)3 88 85 88 30 </span></p>
					<i class="fa fa-phone" aria-hidden="true"></i>
				</div>
				<div class="column text-center">
					<p>Garantie<br/><span>Qualité</span></p>
					<i class="fa fa-thumbs-up" aria-hidden="true"></i>
				</div>
			</div>
		</div>
		</div> <!-- FIN REASSURANCE -->

		<div id="newsletter"><!-- NEWSLETTER -->
			<div class="row">
					<div class="row small-up-1 meduim-up-2 large-up-2">
						<div class="column">
							<h4>Soyez au courant de toutes les <span>nouveautés</span> & <span>promotions</span> en vous inscrivant à notre Newsletter : </h4>
						</div>
						<div class="column">
							<input type="email" placeholder="Votre adresse email"><button type="button" class="button">S'inscrire</button>
						</div>
					</div>
				</div>
				</div> <!-- FIN NEWSLETTER -->

		<div id="footer-container">
			<footer id="footer">
				<div id="footer-menu"><!-- FOOTER MENU -->
					<div class="row small-up-1 meduim-up-4 large-up-4">
						<div class="column">
							<h5>Information</h5>
							<ul>
								<li><a href="http://localhost/montres/index.php/a-propos/">À propos de nous</a></li>
								<li><a href="http://localhost/montres/index.php/contactez-nous/">Contactez-nous</a></li>
								<li><a href="#">Confidentialité</a></li>
								<li><a href="#">Plan du site</a></li>
								<li><a href="#">Crédits</a></li>
							</ul>
						</div>
						<div class="column">
							<h5>Aide et assistance</h5>
							<ul>
								<li><a href="http://localhost/montres/index.php/mentions-legales/">Mentions légales</a></li>
								<li><a href="http://localhost/montres/index.php/livraison-et-retours/">Livraisons & retours</a></li>
								<li><a href="http://localhost/montres/index.php/conditions-de-ventes-generales/">CGV</a></li>
							</ul>
						</div>
						<div class="column">
							<h5>Rester connecté</h5>
							<ul>
								<li><a href="http://localhost/montres/index.php/blog/">Suivez-nous sur notre blog
								<li><a href="#">Inscrivez-vous à la newletter</a></li>
							</a></li>
							</ul>
						</div>
						<div class="column" id="reseau">
							<h5>Suivez nous</h5>
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a></li>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i>Pinterest</a></li>
							</ul>
						</div>

					</div>
				</div> <!-- FIN FOOTER MENU -->




				<!--
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?> -->
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
