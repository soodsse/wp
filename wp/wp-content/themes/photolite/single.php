<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Photolite
 */

get_header(); ?>

<div class="content-area col-md-9 col-sm-7 blog-content">
    <?php photolite_content_nav( 'nav-below' ); ?>
    <div class="middle-align content_sidebar entry-header">
        <div class="site-main" id="sitemain">
			<?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'single' ); ?>
            <?php echo do_shortcode( '[contact-form-7 id="64" title="Contact form 1"]' ); ?>
            <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() )
                    comments_template();
                ?>
            <?php endwhile; // end of the loop. ?>
            
        </div>
        <?php get_sidebar();?>
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>