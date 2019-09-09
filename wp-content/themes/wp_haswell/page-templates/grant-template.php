<?php
/**
 * Template Name: Grant Template
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 * @author Rohan
 */
get_header(); ?>
<div id="page-default" class="<?php haswell_main_class(); ?>">
    <div id="primary" class="row">
        <div id="content" role="main">
            <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'single-templates/content', 'page' ); ?>

            <?php if ( comments_open() ) : ?>
            <?php if ( !empty($smof_data['comments_post_type']) && $smof_data['comments_post_type'] == 'facebook' ) : ?>
            <div id="fbcomments">
                <div id="fb-root"></div>
                <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
                <fb:comments href="<?php the_permalink(); ?>" width="100%"></fb:comments>
            </div>
            <?php elseif (!empty($smof_data['comments_post_type']) && $smof_data['comments_post_type'] == 'default') : ?>
            <hr class="mt-0 mb-0 blabla">
            <?php comments_template( '', true ); ?>
            <?php endif; ?>
            <?php endif; ?>

            <?php endwhile; // end of the loop. ?>
        </div><!-- #content -->
    </div><!-- #primary -->
</div>
<?php get_footer(); ?>
