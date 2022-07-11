<?php if ( have_posts() ) : ?>

<div class="chimney section-container">
    <div class="mixin_flex center archives">
        <?php while ( have_posts() ) : ?>
            <?php the_post(); ?>
            <?php $post_info = get_post(); ?>
            <?php if ( $post_info->post_name === "erreur-404") : ?>
            <?php else : ?>
                <?php get_template_part( 'template-parts/content', 'excerpt' ); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    </div>

    <ul class="pagination mixin_flex between">
        <li><?php previous_posts_link( 'Précédent' ); ?></li>
        <li><?php next_posts_link( 'Suivant' ); ?></li>
    </ul>
</div>

<?php else : ?>
<div class="chimney small section-container">
    <?php get_template_part( 'template-parts/content', 'none' ); ?>
</div>
<?php endif; ?>