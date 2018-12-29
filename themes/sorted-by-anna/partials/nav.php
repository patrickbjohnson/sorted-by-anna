<?php

/**
 * Nav Component
 */
?>

<div class="nav" data-js-component="nav">
    <div class="hide-at-small">
        <div class="nav-menu__trigger">
            <div class="nav-menu">
                <span class="nav-menu__bar"></span>
                <span class="nav-menu__bar"></span>
                <span class="nav-menu__bar"></span>
            </div>
        </div>
    </div>

    
    <div class="show-at-small nav-utility">
        <a href="<?php echo get_home_url(); ?>" class="logo">
            <svg width="40" height="40" viewBox="0 0 138 138" xmlns="http://www.w3.org/2000/svg"><title>Logo</title><g fill-rule="evenodd"><path d="M69 138c-38.108 0-69-30.892-69-69C0 30.892 30.892 0 69 0c38.108 0 69 30.892 69 69 0 38.108-30.892 69-69 69zm0-4.93c35.386 0 64.07-28.684 64.07-64.07 0-35.386-28.684-64.07-64.07-64.07C33.614 4.93 4.93 33.613 4.93 69c0 35.386 28.684 64.07 64.07 64.07z" fill-rule="nonzero"/><path d="M69 129c-33.137 0-60-26.863-60-60S35.863 9 69 9s60 26.863 60 60-26.863 60-60 60zm12.28-44.228c0 5.47-5.95 7.775-11.71 7.775-10.173 0-15.932-10.078-15.932-10.078L45 89.762s7.774 13.725 24.57 13.725c12.67 0 23.42-6.526 23.42-18.716 0-12.19-8.543-16.796-18.813-20.635-9.214-3.455-14.492-5.28-14.492-11.133 0-4.51 4.51-8.063 10.27-8.063 8.35 0 13.916 7.584 13.916 7.584l7.967-7.87S83.967 34 69.954 34c-13.533 0-21.98 9.502-21.98 19.004 0 12.477 11.135 17.852 21.02 21.307 7.967 2.784 12.286 4.8 12.286 10.462z"/></g></svg>
        </a>
    </div>
    <div class="nav-wrap">
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'primary-menu',
              'container_class' => 'menu-container'
            )
          );
        ?>
    </div>

    <div class="show-at-small nav-utility">
        <a class="btn btn--ghost btn--sm" href="#">Book Now</a>
    </div>

</div>