<?php $version = get_post_meta($post->ID, 'tool_version_group',true); ?>
<div class="ui basic vertical segment">
    <br>
    <div class="ui container">
        <div class="ui four column grid stackable">
            <div class="column">
                <h4><i class="tags icon"></i> <?php _e('Tags','roots'); ?></h4>
                <hr class="sevinci-hr-dark">
                <?php
                the_tags('','<br>','');
                $tags = get_the_terms($post->ID,'tags');
                if ( $tags && ! is_wp_error( $tags ) ) :
                    foreach ( $tags as $t ) {
                        echo $t->name . "<br>";
                    }
                endif;
                ?>
            </div>
            <div class="column">
                <h4><i class="smile icon"></i> <?php _e('Attitudes','roots'); ?></h4>
                <hr class="sevinci-hr-dark">
                <?php
                $attitudes = get_the_terms($post->ID,'attitude');
                if ( $attitudes && ! is_wp_error( $attitudes ) ) :
                    foreach ( $attitudes as $a ):
                        echo $a->name . "<br>";
                    endforeach;
                endif;
                ?>
            </div>
            <div class="column">
                <h4><i class="doctor icon"></i> <?php _e('Used by','roots'); ?></h4>
                <hr class="sevinci-hr-dark">
                <?php
                $roles = get_the_terms($post->ID,'role');
                if ( $roles && ! is_wp_error( $roles ) ) :
                    foreach ( $roles as $r ):
                        echo $r->name . "<br>";
                    endforeach;
                endif;
                ?>
            </div>
            <div class="column">
                <h4><i class="paste icon"></i> <?php _e('Versions','roots'); ?></h4>
                <hr class="sevinci-hr">
                <?php
                   $version_count = count($version['tool_version_file']);
                   for ($i=0; $i < $version_count; $i++) {
                      ?>
                      <a href="<?php echo wp_get_attachment_url($version['tool_version_file'][$i][0]); ?>" target="_blank">
                         <?php _e('Version','roots'); echo " "  . $version['tool_version_number'][$i]; ?>
                      </a>
                      <?php echo ": " . $version['tool_version_date'][$i] . "<br> "; ?>
                      <?php
                   }
                ?>
            </div>
        </div>
    </div>
    <br>
</div>
