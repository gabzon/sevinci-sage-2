<?php

$taxonomy = array(
    'guide',
);

// WP_Query arguments
$args = array (
'orderby'           => 'rand',
'hide_empty'        => false,
);

$guides = get_terms($taxonomy, $args);

echo '<pre>';
//print_r($guides);
echo '</pre>';
?>
<div class="ui special cards">
    <?php foreach ( $guides as $guide ): ?>
        <div class="card">
            <div class="dimmable image">
                <div class="ui dimmer">
                    <div class="content">
                        <div class="center">
                            <a class="ui inverted button sans-serif" href="<?php echo $url; ?>"><?php _e('More Info','sage'); ?></a>
                        </div>
                    </div>
                </div>
                <?php $guide_image = get_term_meta($guide->term_id, 'guide_media_upload');  ?>
                <?php if($guide_image): ?>
                    <img src="<?php echo wp_get_attachment_url($guide_image[0]) ?>" class="ui image"/>
                <?php endif ?>
            </div>
            <div class="content">
                <a class="header" href="<?php //echo $url; ?>"><?php echo $guide->name; ?></a>
                <div class="description">
                    <?php echo $guide->description; ?>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
