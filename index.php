<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Goni
 */

get_header(); ?>

<div id="primary">
    <main id="main" class="site-main" role="main">
        <?php
            if ( have_posts() ) :

                // Load posts loop.
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', get_post_format() );
                endwhile;

                // Previous/next page navigation.
                 // goni_theme_pagination();

            else :

                // If no content, include the "No posts found" template.
                get_template_part( 'template-parts/content/','none' );

            endif;
        ?>   
    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();