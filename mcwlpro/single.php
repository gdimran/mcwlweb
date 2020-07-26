<?php

 function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH'])
         && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

if (is_ajax()) {
   get_header();
} ?>

<?php if (have_posts()) :
while (have_posts()) : the_post(); ?>
    <div id="single-post post-<?php the_ID(); ?>">
        <h2><?php the_title(); ?></h2>
        <div class="contenu">
            <?php the_content(); ?>
        </div>
    </div>
<?php endwhile; ?>
<?php endif; ?>

<?php
if (is_ajax()) {
    get_footer();
}
?>