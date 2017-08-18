<?php get_header(); ?>
    <?php if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            get_template_part( 'content', get_post_format() );
        endwhile; the_posts_navigation(); endif; ?>
<?php get_footer();  ?>
