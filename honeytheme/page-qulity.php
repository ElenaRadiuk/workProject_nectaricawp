<?php
/**
Template Name: quality
 */
get_header(); // Подключаем хедер?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // Начало цикла ?>
    <header class="supplierspageheader qulity">
        <hr>
        <?php the_title(); // Заголовок ?>
        <hr>
    </header>
    <section class="supplierspagemaincontent_qulity">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="htmaindesc">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; // Конец цикла ?>
<?php //get_sidebar(); // Подключаем сайдбар ?>
<?php get_footer(); // Подключаем футер ?>