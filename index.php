<?php
/**
 * Affiche le blog
 * 
 */
?>

<?php get_header(); ?>

<main class="page-wrap">

    <?php get_template_part( 'template-parts/header', 'archives' ); ?>    
    <?php get_template_part( 'template-parts/content', 'archives' ); ?>

</main>

<?php get_footer(); ?>