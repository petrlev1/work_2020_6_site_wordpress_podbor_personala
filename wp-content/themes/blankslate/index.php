<?php get_header(); ?>

<div class="back1" style="background: #FFF5F5;">

<main id="content" class="container">

<div class="row">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="col-md-6">
<?php get_template_part( 'entry' ); ?>
</div>

<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>

</div>


</main>

</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
