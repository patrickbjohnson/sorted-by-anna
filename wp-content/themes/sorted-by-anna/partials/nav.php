<?php

/**
 * Nav Component
 */

?>

<div class="nav" data-js-component="nav">
    <div class="nav-header">
        <div class="nav-menu">
            <span class="nav-menu__bar"></span>
            <span class="nav-menu__bar"></span>
            <span class="nav-menu__bar"></span>
        </div>

        <a class="nav-logo" href="<?php echo get_home_url(); ?>">
            <?php echo get_bloginfo('name'); ?>
        </a>
    </div>
    <div class="nav-wrap">
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'primary-menu'
            )
          );
        ?>
    </div>

</div>