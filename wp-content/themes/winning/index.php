<?php
/**
 * The main template file
 */
get_header(); ?>

                                <?php
            if( have_posts()):
                /* Start the Loop */
                while ( have_posts() ) : the_post();
                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                get_template_part( 'template-parts/content' );
                endwhile;
                
            // else :
            //     get_template_part( 'template-parts/content', 'none' );
            endif;
            ?>

     
<?php get_footer();?>