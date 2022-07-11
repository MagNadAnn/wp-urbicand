<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article class="excerpt">
	<div>
		<?php the_post_thumbnail( 'custom-size' ); ?>
		<a href="<?php the_permalink(); ?>" title="Lire l'article" class="excerpt__title"><?php the_title(); ?></a>

		<?php $parent = get_post_parent(); ?>
		<?php if ( is_search() ) : ?>
			<?php if ( get_post_type() === "post" ) : ?>
				<span class="post-type">Article</span>
			<?php elseif ( $parent->post_name === "plans" ) : ?>
				<span class="post-type orange">Offre</span>
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if ( get_post_type() === "post" ) : ?>
		<ul class="post-meta">
			<li><time><?php the_date(); ?></time></li>
			<?php $categories = get_the_category() ?>
			<?php if ($categories) : ?>
				<li>
					<?php foreach( $categories as $category ) { ?>
						<a href="<?php bloginfo( 'url' ); ?>/<?php echo($category->slug); ?>"><?php echo($category->name); ?></a>
					<?php } ?>
				</li>
			<?php endif; ?>
			<?php $tags = get_the_tags() ?>
			<?php if ($tags) : ?>
				<li>
					<?php foreach( $tags as $tag ) { ?>
						<a href="<?php bloginfo( 'url' ); ?>/sujet/<?php echo($tag->slug); ?>">#<?php echo($tag->name); ?></a>
					<?php } ?>
				</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
		
		<?php the_excerpt(); ?>
		<div class="wp-block-buttons is-content-justification-left">
			<div class="wp-block-button is-style-outline">
				<?php if ( get_post_type() === "post" ) : ?>
					<a class="wp-block-button__link" href="<?php the_permalink(); ?>"><i class="fas fa-search-plus"></i> Lire l'article</a>
				<?php else : ?>
					<a class="wp-block-button__link" href="<?php the_permalink(); ?>"><i class="fas fa-search-plus"></i> Lire la page</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</article><!-- #post-${ID} -->
