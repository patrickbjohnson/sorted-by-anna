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
    
    <div class="hide-at-small">
        <div class="home-btn">
            <a href="<?php echo get_home_url(); ?>" class="logo">
                <svg width="40" height="40" viewBox="0 0 138 138" xmlns="http://www.w3.org/2000/svg"><title>Logo</title><g fill-rule="evenodd"><path d="M69 138c-38.108 0-69-30.892-69-69C0 30.892 30.892 0 69 0c38.108 0 69 30.892 69 69 0 38.108-30.892 69-69 69zm0-4.93c35.386 0 64.07-28.684 64.07-64.07 0-35.386-28.684-64.07-64.07-64.07C33.614 4.93 4.93 33.613 4.93 69c0 35.386 28.684 64.07 64.07 64.07z" fill-rule="nonzero"/><path d="M69 129c-33.137 0-60-26.863-60-60S35.863 9 69 9s60 26.863 60 60-26.863 60-60 60zm12.28-44.228c0 5.47-5.95 7.775-11.71 7.775-10.173 0-15.932-10.078-15.932-10.078L45 89.762s7.774 13.725 24.57 13.725c12.67 0 23.42-6.526 23.42-18.716 0-12.19-8.543-16.796-18.813-20.635-9.214-3.455-14.492-5.28-14.492-11.133 0-4.51 4.51-8.063 10.27-8.063 8.35 0 13.916 7.584 13.916 7.584l7.967-7.87S83.967 34 69.954 34c-13.533 0-21.98 9.502-21.98 19.004 0 12.477 11.135 17.852 21.02 21.307 7.967 2.784 12.286 4.8 12.286 10.462z"/></g></svg>
            </a>
        </div>
    </div>

    
    <div class="show-at-small nav-utility">
        <a href="<?php echo get_home_url(); ?>" class="logo">
            <svg viewBox="0 0 329 165" xmlns="http://www.w3.org/2000/svg"><path d="M91.908 114.642l11.564 26.053 9.85-26.053h6.495s-4.14 10.421-8.378 21.083l-.509 1.28c-4.07 10.239-8.081 20.324-8.458 21.25-1.927 4.782-5.64 6.638-9.137 6.638a12.167 12.167 0 01-6.995-2.356l2.57-4.925.069.054.116.09c.548.413 2.217 1.57 3.74 1.57 2.642 0 3.855-1.857 5.14-5.07l2.57-6.495-15.418-33.119h6.781zM55.502 93.656v25.055a13.102 13.102 0 0110.636-4.925c8.922 0 15.989 7.637 15.989 17.344 0 9.708-7.067 17.345-15.99 17.345a12.838 12.838 0 01-11.135-5.639v4.783h-5.496V93.656h5.996zm215.474 20.13c9.707 0 14.347 5.995 14.347 12.134v21.699h-5.496v-4.783a13.938 13.938 0 01-11.207 5.64c-5.925 0-12.277-4.14-12.277-11.279 0-6.424 5.639-10.992 13.063-10.992a18.462 18.462 0 019.921 2.712v-1.783c0-6.853-5.71-7.781-8.351-7.781a22.837 22.837 0 00-9.85 2.784l-2.499-4.998a24.575 24.575 0 0112.349-3.353zm-111.072 0c9.708 0 14.347 5.995 14.347 12.134v21.699h-5.496v-4.783a13.938 13.938 0 01-11.207 5.64c-5.924 0-12.277-4.14-12.277-11.279 0-6.424 5.639-10.992 13.063-10.992a18.461 18.461 0 019.921 2.712v-1.783c0-6.853-5.71-7.781-8.351-7.781a22.838 22.838 0 00-9.85 2.784l-2.499-4.998a24.574 24.574 0 0112.349-3.353zm76.118-.001h.333c6.567 0 12.42 4.498 12.42 12.634v21.2h-5.996v-20.2c0-5.64-3.498-8.066-7.923-8.066-5.353 0-8.209 5.568-8.209 5.568v22.697h-5.995v-32.976h5.567v4.64a11.731 11.731 0 0110.136-5.496zm-37.262 0h.333c6.567 0 12.42 4.498 12.42 12.634v21.2h-5.995v-20.2c0-5.64-3.498-8.066-7.923-8.066-5.354 0-8.21 5.568-8.21 5.568v22.697h-5.995v-32.976h5.567v4.64a11.731 11.731 0 0110.136-5.496zm72.365 17.413l-.435.003c-5.139 0-8.351 2.57-8.351 5.996 0 4.284 3.854 5.997 7.566 5.997 5.51 0 8.995-4.427 9.386-4.948l.032-.044.005-.006v-4.64a15.799 15.799 0 00-8.637-2.355zm-111.072 0l-.434.003c-5.14 0-8.352 2.57-8.352 5.996 0 4.284 3.855 5.997 7.566 5.997 5.51 0 8.995-4.427 9.386-4.948l.032-.044.005-.006v-4.64a15.798 15.798 0 00-8.637-2.355zM65.21 119.352c-6.567 0-9.707 5.711-9.707 5.711v12.134s3.14 5.711 9.707 5.711c6.71 0 10.92-5.283 10.92-11.778s-4.353-11.777-10.92-11.777zm18.95-84.83c16.334 0 28.65 12.728 28.65 29.607 0 16.879-12.319 29.606-28.65 29.606-16.331 0-28.647-12.727-28.647-29.606s12.315-29.607 28.648-29.607zm153.44 0c15.325 0 27.328 13.005 27.328 29.607.015.866-.026 1.733-.123 2.594l-.07.763h-46.958c.84 7.493 6.996 18.457 20.902 18.457 10.08 0 16.358-6.913 18.042-9.032l.594-.746 5.385 5.54-.481.58c-5.863 7.063-14.883 11.45-23.54 11.45-16.199 0-28.887-13.004-28.887-29.606 0-16.879 11.954-29.606 27.807-29.606zM328.462 0v92.298h-7.313v-8.241a24.704 24.704 0 01-19.418 9.678c-16.252 0-28.048-12.45-28.048-29.606 0-17.155 11.796-29.607 28.048-29.607a24.511 24.511 0 0118.94 9.003V0h7.791zM23.387 34.522c13.056 0 19.886 7.634 20.17 7.958l.49.56-5.187 5.792-.628-.676a21.487 21.487 0 00-14.845-5.842c-7.128 0-12.107 3.5-12.107 8.51 0 5.927 6.242 7.747 15.764 9.848 16.74 3.742 18.997 10.452 18.997 16.523 0 10.859-10.854 16.54-21.576 16.54C8.005 93.735.682 82.202.379 81.711L0 81.099l6.231-5.319.504.88a20.896 20.896 0 0017.73 9.283c4.986 0 13.426-1.843 13.426-8.748 0-5.542-6.039-7.33-14.57-9.25C5.33 63.985 3.249 56.277 3.249 50.824c0-10.204 10.239-16.302 20.138-16.302zM181.62 18.341v17.62h18.58v7.43h-18.58v32.126c0 7.015 2.863 10.427 8.751 10.427a16.11 16.11 0 007.69-2.38l.827-.54 3.095 6.967-.627.384c-.223.138-5.54 3.36-11.225 3.36-10.13 0-16.422-6.522-16.422-17.021V43.392h-11.866V35.96h11.866V18.34h7.911zm-33.325 16.182a24.196 24.196 0 018.842 1.506l.779.334-3.356 7.626-.811-.469c-.017-.01-2.2-1.206-6.893-1.206-7.426 0-11.63 7.055-12.795 9.334l-.113.225c-.068.137-.12.248-.157.328v40.097h-7.911V35.96h7.31v6.729a18.522 18.522 0 0115.105-8.167zM84.16 42.314c-10.203 0-20.497 6.746-20.497 21.815 0 15.07 10.295 21.814 20.498 21.814 10.202 0 20.497-6.745 20.497-21.814 0-15.069-10.296-21.815-20.498-21.815zm217.573 0c-11.53 0-19.899 9.175-19.899 21.815s8.368 21.814 19.899 21.814c12.138 0 18.072-10.627 18.819-12.065V54.377c-.064-.125-.167-.32-.31-.573l-.132-.23c-1.68-2.883-7.504-11.26-18.377-11.26zm-64.133 0c-13.636 0-18.927 11.418-19.594 17.74h38.71c-.667-6.14-5.956-17.74-19.116-17.74z" fill="#69C6B0" fill-rule="nonzero"/></svg>
        </a>
    </div>
    <div class="nav-wrap">
        <div class="hide-at-small">
            <div class="home-btn">
                <a href="<?php echo get_home_url(); ?>" class="logo">
                    <svg width="40" height="40" viewBox="0 0 138 138" xmlns="http://www.w3.org/2000/svg"><title>Logo</title><g fill-rule="evenodd"><path d="M69 138c-38.108 0-69-30.892-69-69C0 30.892 30.892 0 69 0c38.108 0 69 30.892 69 69 0 38.108-30.892 69-69 69zm0-4.93c35.386 0 64.07-28.684 64.07-64.07 0-35.386-28.684-64.07-64.07-64.07C33.614 4.93 4.93 33.613 4.93 69c0 35.386 28.684 64.07 64.07 64.07z" fill-rule="nonzero"/><path d="M69 129c-33.137 0-60-26.863-60-60S35.863 9 69 9s60 26.863 60 60-26.863 60-60 60zm12.28-44.228c0 5.47-5.95 7.775-11.71 7.775-10.173 0-15.932-10.078-15.932-10.078L45 89.762s7.774 13.725 24.57 13.725c12.67 0 23.42-6.526 23.42-18.716 0-12.19-8.543-16.796-18.813-20.635-9.214-3.455-14.492-5.28-14.492-11.133 0-4.51 4.51-8.063 10.27-8.063 8.35 0 13.916 7.584 13.916 7.584l7.967-7.87S83.967 34 69.954 34c-13.533 0-21.98 9.502-21.98 19.004 0 12.477 11.135 17.852 21.02 21.307 7.967 2.784 12.286 4.8 12.286 10.462z"/></g></svg>
                </a>
            </div>
        </div>
        
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
        <a class="btn btn--ghost btn--sm" href="<?php echo get_field('url', 'option'); ?>">Book Now</a>
    </div>

</div>
