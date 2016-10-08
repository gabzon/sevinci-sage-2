<?php
use Roots\Sage\Nav\NavWalker;
$menu_name = 'primary_navigation';
?>
<?php if (is_admin_bar_showing()): ?>
    <?= '<div style="min-height: 28px;"></div>'; ?>
<?php endif; ?>
<div class="ui borderless fixed top menu" id="top-menu">
  <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>" rel="home" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" style="margin:10px 0 0 20px; text-transform:uppercase; font-weight:bold; color:#5829BB">
    <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
      <img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' class="img-responsive" style="max-width:150px;margin-top:-10px">
    <?php else : ?>
      <?php echo bloginfo('name'); ?>
    <?php endif; ?>
  </a>
  <div class="right menu">

    <?php if (!is_page_template( 'landing-page.php' )): ?>
      <div class="item">
        <form role="search" method="get" class="search-form form-inline" action="<?= esc_url(home_url('/')); ?>">
          <div class="ui transparent icon input">
            <input type="search" name="s" value="<?= get_search_query(); ?>" class="search-field form-control">
            <i class="search icon"></i>
          </div>
        </form>
      </div>
    <?php endif; ?>
    <div class="item">
      <?php  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) :
        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        foreach ( (array) $menu_items as $key => $menu_item ) :
          $class = $menu_item->classes; ?>
          <a href="<?php echo $menu_item->url; ?>" class="ui violet button <?php if(get_the_ID() == $menu_item->object_id){echo 'active';}else{echo 'bla';}?>">
            <i class="travel icon"></i><?php echo $menu_item->title; ?>
          </a>
          <?php
        endforeach;
      endif;
      ?>
    </div>
    <div class="item">
      <?php languages_list_footer(); ?>
    </div>
  </div>
</div>
