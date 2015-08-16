<?php
/**
* Template Name: Landing page
*/
?>


<div class="ui basic red inverted segment">
    <br>
    <div class="ui centered grid">
        <div class="seven wide column">
            <h1 class="ui header inverted centered">
                INNOVATION TOOLBOX
                <div class="sub header">
                    Business tools for today's challenges
                </div>
            </h1>
            <form role="search" method="get" class="search-form form-inline" action="<?= esc_url(home_url('/')); ?>">
                <div class="ui huge fluid icon input">
                    <input type="search" name="s" placeholder="<?php _e('Business tools: sales, marketing, management, etc', 'sage'); ?>" value="<?= get_search_query(); ?>" class="search-field form-control">
                    <i class="search icon"></i>
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
</div>

<div class="ui container aligned center">
    <div class="ui multitabs pointing fluid three item red secondary menu">
      <a class="item active" data-tab="first"><?php _e('TOOLS','sage'); ?></a>
      <a class="item" data-tab="second"><?php _e('GUIDES','sage'); ?></a>
      <a class="item" data-tab="third"><?php _e('LEADERSHIP','sage'); ?></a>
    </div>
    <div class="ui tab basic segment active" data-tab="first">
        <?php get_template_part('templates/toolbox-filters'); ?>
        <?php get_template_part('templates/landing/toolbox'); ?>
    </div>
    <div class="ui tab basic segment" data-tab="second">
        <?php get_template_part('templates/landing/guides'); ?>
    </div>
    <div class="ui tab basic segment" data-tab="third">

    </div>
</div>
