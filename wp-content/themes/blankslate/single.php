<?php get_header(); ?>
<main id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>

<?php 
// Комментарии
//if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>

<?php endwhile; endif; ?>


<?php 
//Навигация по записям
//get_template_part( 'nav', 'below-single' ); ?>


</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>