<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>

<div class="row">
    <div class="top-bar"  >
        <a class="menu-toggle" href="#"><span><?php esc_html_e('Menu', 'goni'); ?></span></a>
        <div class="logo">
            <a href="<?php echo site_url()?>"><?php get_bloginfo( 'name' );?></a>
        </div>
        <nav id="main-nav-wrap">
            <ul class="main-navigation">
                <li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
                <li><a class="smoothscroll"  href="#about" title="">About</a></li>
                <li><a class="smoothscroll"  href="#resume" title="">Resume</a></li>
                <li><a class="smoothscroll"  href="#portfolio" title="">Portfolio</a></li>
                <!-- <li><a class="smoothscroll"  href="#services" title="">Services</a></li> -->               
                <li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>
            </ul>
        </nav>
    </div>
    <!-- /top-bar --> 
</div>
<!-- /row -->
