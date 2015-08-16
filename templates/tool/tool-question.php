<br>
<div class="ui basic vertical segment">
    <br>
    <div class="ui container">
        <h1 class="ui header">
            <?php _e('Questions','roots'); ?>
            <div class="sub header">
                <?php _e('This tool helps you answer the following questions') ?>
            </div>
        </h1>
        <?php
           $questions = get_the_terms($post->ID,'question');
           if ( $questions && ! is_wp_error( $questions ) ) :
              foreach ( $questions as $q ) {
                 echo $q->name . "<br>";
              }
           endif;
        ?>
    </div>
    <br>
</div>
<br>
