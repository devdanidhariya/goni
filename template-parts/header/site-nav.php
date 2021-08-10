<?php
/**
 * Displays the site navigation.
 *
 * @package Goni
 */
?>

<div class="row">
    <div class="top-bar">
        <a class="menu-toggle" href="#"><span><?php esc_html_e('Menu', 'goni'); ?></span></a>
        <div class="logo">
            <a href="<?php echo site_url()?>"><?php echo get_bloginfo( 'name' );?></a>
        </div>
        <nav id="main-nav-wrap">
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav>
    </div>
    <!-- /top-bar --> 
</div>
<!-- /row -->
