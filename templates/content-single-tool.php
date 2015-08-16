<?php while (have_posts()) : the_post(); ?>
    <?php $img = get_post_meta($post->ID,'tool_background_image',true); ?>
    <?php
    if (!empty($img)) {
        $bg_img = wp_get_attachment_url($img);
    }else{
        $bg_img = get_stylesheet_directory_uri().'/assets/img/tools-bg.jpg';
    }
    ?>

    <?php
    $brain = get_post_meta($post->ID, 'tool_brain_side',true);
    $version = get_post_meta($post->ID, 'tool_version_group',true);
    $last_version = end($version['tool_version_file']);
    $videos = get_post_meta($post->ID,'tool_video');
    $quotes_group = get_post_meta($post->ID,'tool_quote_group');
    $quotes = $quotes_group[0];
    ?>

    <?php
    $sources = get_posts( array(
        'post_type'  => 'source',
        'posts_per_page' => -1,
        'post_belongs' => $post->ID,
        'post_status' => 'publish',
        'suppress_filters' => false
    ));
    ?>

    <div id="tool-section">
        <?php get_template_part('templates/tool/tool-header'); ?>

        <div id="tool-description">
            <?php get_template_part('templates/tool/tool-video'); ?>

            <?php get_template_part('templates/tool/tool-tips'); ?>

            <?php get_template_part('templates/tool/tool-question'); ?>
            
            <?php get_template_part('templates/tool/tool-tags'); ?>

            <?php get_template_part('templates/tool/tool-brain.php'); ?>

            <?php get_template_part('templates/tool/tool-sources.php'); ?>
        </div>
    </div>

<?php endwhile; ?>
