<?php /* Template Name: Custom Page */ ?>

<?php get_header(); ?>

<div id="modal-ready">
    <main id="main" class="site-main" role="main">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
        ?>
        
        <h1>Testing custom</h1>
            <div class="featured-image"><?= get_the_thumbnail(); ?></div>

            <div class="content"><?= get_the_content(); ?></div>

            <div class="custom-fields"><?= get_field('field_name'); ?></div>

        <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }

            // End of the loop.
        endwhile;
        ?>

    </main><!-- .site-main -->

    <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- #modal-ready -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>