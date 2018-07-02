<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон обычной страницы
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
get_header(); // Подключаем хедер?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // Начало цикла ?>
  <header class="supplierspageheader">
    <hr>
    <?php the_title(); // Заголовок ?>
    <hr>
  </header>
  <section class="supplierspagemaincontent">
<?php the_content(); // Содержимое страницы ?>
  </section>
<?php endwhile; // Конец цикла ?>
<?php //get_sidebar(); // Подключаем сайдбар ?>
<?php get_footer(); // Подключаем футер ?>