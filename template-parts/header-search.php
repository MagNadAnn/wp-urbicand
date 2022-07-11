<header class="bg_green_slanted">
    <div class="chimney small section-container">
        <h1>Faire une recherche sur le site</h1>
		<?php get_search_form(); ?>
    </div>
</header>

<div class="chimney small">
    <h2 class="mixin_margin_b0 mixin_text-center">
        <small>
            <?php
            if ( get_search_query() ) {
                printf(
                    /* translators: %s: Search term. */
                    esc_html__( 'Résultats pour "%s"', 'twentytwentyone' ),
                    '<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
                );
            }
            ?>
        </small>
    </h2>
</div>