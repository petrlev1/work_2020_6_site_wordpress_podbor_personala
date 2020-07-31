
<!-- Запись -->

<div class="hideInDetail">

<div class="table1">
<div class="table1Img"></div>
<div class="table1Cont">

<?php edit_post_link(); ?>

<h2 style="text-align:left"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php //the_title(); ?><?php the_field('master_professiya'); ?></a></h2>

<li><span>ФИО:</span><?php if ( ! is_search() ) { get_template_part( 'entry', 'meta' ); } ?></li>
<li><span>Возраст:</span><?php echo get_cimyFieldValue(get_the_author_meta('ID'), AGE); ?></li>
<li><span>Город:</span><?php echo get_cimyFieldValue(get_the_author_meta('ID'), CITY); ?></li>

</div>
<a href="<?php the_permalink(); ?>" class="table1Link1">Подробная информация и контакты</a>
</div>

</div>




<!-- Детально -->

<div class="container hideInBlog">

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php edit_post_link(); ?>



<div class="row DetailContAll">

<div class="col-md-4">
<div class="DetailCont">
<div class="DetailContImg"></div>
<a href="/спасибо-за-регистрацию/" class="but1 hideInBlog">Предложить вакансию</a>
<a href="/спасибо-за-регистрацию/" class="but1 hideInBlog">Объявления мастера</a>
<a href="/спасибо-за-регистрацию/" class="hideInBlog" style="text-align:center; margin: 30px 0 0 0">Скачать резюме</a>
</div>
</div>

<div class="col-md-8">
<div class="DetailCont">
<div class="DetailCont2">
<li style="font-size: 30px; margin: 0 0 15px 0"><span style="font-size: 21px">Профессия:</span>
<?php //the_title(); ?> <?php the_field('master_professiya'); ?></li>
<li><span>ФИО:</span><?php if ( ! is_search() ) { get_template_part( 'entry', 'meta' ); } ?></li>
<li><span>Возраст:</span><?php echo get_cimyFieldValue(get_the_author_meta('ID'), AGE); ?></li>
<li><span>Город:</span><?php echo get_cimyFieldValue(get_the_author_meta('ID'), CITY); ?></li>
<li><span>Опыт работы (сколько лет):</span><?php the_field('master_opit'); ?></li>
<li><span>Гражданство:</span><?php echo get_cimyFieldValue(get_the_author_meta('ID'), GRAJDANSTVO); ?></li>
<li><span>Телефон:</span><?php echo get_cimyFieldValue(get_the_author_meta('ID'), PHONE); ?></li>
<li><span>E-Mail:</span><?php echo get_the_author_meta('user_email'); ?></li>
<li><span>Профессиональное образование</span><?php the_field('master_prof_obrazovanie'); ?></li>
<li><span>Профессиональное навыки</span><?php the_field('master_prof_naviki'); ?></li>
<li><span>На какой косметике работали</span><?php the_field('master_kosmetika'); ?></li>
<li><span>Где работали</span><?php the_field('master_gde_rabotali'); ?></li>
<li><span>Работы мастера</span><img src="<?php the_field('master_raboti'); ?>" style="width:100%"></li>


<?php //get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php //if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>


</div>
</div>
</div>

</div>

</div>

</div>
