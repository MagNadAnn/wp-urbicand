<?php
    $active_category_name = single_term_title("", false);
    $active_category_id = get_cat_ID( $active_category_name );
?>

<header class="bg_orange_slanted">
    <div class="chimney small section-container">
        <?php if ( is_archive() ) : ?>
            <h1><a href="<?php bloginfo( 'url' ); ?>/blog">Le Blog RH</a></h1>
        <?php else : ?>
            <h1><a href="<?php bloginfo( 'url' ); ?>/blog" class="is-selected">Le Blog RH</a></h1>
        <?php endif; ?>
        <div class="has-medium-font-size">
            <p>Veille RH, savoir-être et psychométrie<br>
            Documentation et actualités de ProfilScan</p>
        </div>

        <nav> 
            <?php $categories = get_categories(); ?>
            <?php if ($categories) : ?>
                <ul class="mixin_flex mixin_margin_0">
                    <li>Catégories :</li>
                    <?php foreach($categories as $category) { ?>
                        <?php $class_category_is_selected = $category->term_id == $active_category_id ? ' is-selected' : ''; ?>
                        <li class="keyword">
                            <a href="<?php echo( get_category_link( $category->term_id ) ); ?>" class="<?php echo( $class_category_is_selected ); ?>">
                                <?php echo( $category->name ); ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            <?php endif; ?>

            <?php $tags = get_tags(array('orderby'=>'count', 'order'=>'DESC','number'=>20)); ?>
            <?php if ($tags) : ?>
                <ul class="mixin_flex mixin_margin_0">
                    <li>Thèmes :</li>
                    <?php foreach($tags as $tag) { ?>
                        <?php $tag_is_selected = (int) $tag->term_id === get_queried_object_id() ? ' is-selected' : ''; ?>
                        <li class="keyword">
                            <a href="<?php echo( get_tag_link( $tag->term_id ) ); ?>" class="tags__link<?php echo( $tag_is_selected ); ?>">
                                <?php echo( $tag->name ); ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            <?php endif; ?>
        </nav>
            
        <?php if ( get_the_archive_description() ) : ?>
            <div class="archive-description">
                <?php echo get_the_archive_description(); ?>
            </div>
        <?php endif; ?>
    </div>
</header>