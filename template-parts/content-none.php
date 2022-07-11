<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<section class="no-results not-found">

	<div class="page-content default-max-width">


		<?php if ( is_search() ) : ?>

			<div class="has-medium-font-size">
				<p>Désolé, nous ne trouvons aucun résultat pour votre recherche. Nous vous conseillons d'essayer avec d'autres termes !</p>
			</div>

		<?php else : ?>

			<p>Il semblerait que nous n'arrivions pas à trouver ce que vous cherchez. Nous vous conseillons d'essayer d'utiliser notre moteur de recherche :</p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div>
</section>
