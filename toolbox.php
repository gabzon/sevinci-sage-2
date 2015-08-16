<?php
/**
* Template Name: Toolbox page
*/
?>
&nbsp;


<br>
<div class="ui basic vertical segment">
    <?php while (have_posts()) : the_post(); ?>
        <div class="ui container">
            <button class="ui button" id="toolbox-filter">
                <i class="filter icon"></i> <?php _e('Filter'); ?>
            </button>
        </div>
        <br><br>
        <div class="ui container center aligned">
            <?php get_template_part('templates/toolbox-tools'); ?>
        </div>
    <?php endwhile; ?>
</div>
<br>
