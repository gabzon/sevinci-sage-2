<?php $time = get_post_meta($post->ID, 'tool_duration_group',true); ?>
<br>
<div class="ui basic vertical segment">
    <div class="ui container">
        <div class="ui grid stackable">
            <div class="eight wide column">
                <h4><?php _e('Tips & Tricks','roots') ?></h4>
                <hr class="sevinci-hr">
                <?php echo get_post_meta($post->ID, 'tool_tips_and_tricks', true); ?>
            </div>
            <div class="four wide column">
                <h2 class="ui center aligned icon header">
                    <i class="circular inverted violet clock icon"></i>
                    <div class="sub header">
                        <?php echo $time['tool_duration_value'][0]; ?>
                        <?php " " ?>
                        <?php echo $time['tool_duration_type'][0];  ?>
                    </div>
                </h2>
            </div>
            <div class="four wide column">
                <h2 class="ui center aligned icon header">
                    <i class="circular inverted violet group icon"></i>
                    <div class="sub header">
                        <?php echo get_post_meta($post->ID, 'tool_participants',true); ?>
                        <?php _e('Participants', 'roots'); ?>
                    </div>
                </h2>
            </div>
        </div>
    </div>
</div>
<br>
