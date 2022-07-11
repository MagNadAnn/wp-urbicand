<?php get_header(); ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();
?>

<main class="page-wrap">
    <article>
        <?php the_content(); ?>
    </article>
</main>

<?php
// End the loop.
endwhile;
?>

<?php get_footer(); ?>
