<br>
<article <?php post_class(); ?>>
    <div class="ui two centered grid stackable">
        <div class="four wide column">
            <a href="<?php the_permalink(); ?>">
                <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                <?php if (has_post_thumbnail( $post->ID ) ):?>
                    <img src="<?php echo $feat_image; ?>" class="ui image" >
                <?php endif; ?>
            </a>
            <?php if (get_post_type() === 'post') { get_template_part('templates/entry-meta'); } ?>
        </div>
        <div class="ten wide column">
            <div class="entry-summary">
                <h3>
                    <a href="<?php the_permalink(); ?> "><?php the_title(); ?></a>
                </h3>
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
</article>
