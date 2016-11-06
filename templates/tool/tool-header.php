<?php
$version = get_post_meta($post->ID, 'tool_version_group',true);
$version_last_item = end($version);
$last_version = $version_last_item['tool_version_file'][0];
?>

<div class="ui basic vertical segment" style="background:#eee">
  <br>
  <div class="ui container">
    <div class="ui grid">
      <div class="one wide column"></div>
      <div class="seven wide column">
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'full' ); ?>
          <div class="ui large image">
            <img src="<?php echo $image[0]; ?>" alt="" class="" />
          </div>
        <?php endif; ?>
      </div>
      <div class="seven wide column">
        <br>
        <h1><?php the_title(); ?></h1>
        <?php the_excerpt(); ?>
        <a href="<?= wp_get_attachment_url($last_version); ?>" class="ui large violet button" id="download-tool" target="_blank">
          <i class="large download icon"></i>
          <?php _e('Download','sage') ?>
        </a>
      </div>
      <div class="one wide column"></div>
    </div>
  </div>
  <br>
</div>
<div class="ui basic vertical segment center aligned" style="background-color:#ccc">
  <div class="ui container">
    <div class="social">
      <?php
      if ( function_exists( 'sharing_display' ) ) {
        sharing_display( '', true );
      }

      if ( class_exists( 'Jetpack_Likes' ) ) {
        $custom_likes = new Jetpack_Likes;
        echo $custom_likes->post_likes( '' );
      }
      ?>
      <!-- <p>Share this post on:</p>-->
      <!--Twitter-->
      <!--<a class="twitter" href="http://twitter.com/home?status=Reading: <?php the_permalink(); ?>" title="Share this post on Twitter!" target="_blank">Twitter</a>-->
      <!--Facebook-->
      <!--<a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;">Facebook</a>-->
      <!--Google Plus-->
      <!--<a class="google-plus" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>">Google+</a> -->
    </div>
  </div>
</div>
