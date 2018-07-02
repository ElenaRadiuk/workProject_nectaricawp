<?php get_header(); ?>
<main>
  <section class="htslider">
    <div id="htmainslider">
      <div>
        <div class="slidercontent">
          <img src="<?php echo HT_URI ?>/images/slide1.png"/>
        </div>
      </div>
<!--        <div class="slidercontent">-->
<!--          <img src="--><?php //echo HT_URI ?><!--/images/slide1.png"/>-->
<!--        </div>-->
    </div>
  </section>
  <section class="htmaindesc">

<?php if ( get_locale() == 'uk_UA') {
 $post_top = 434;
} elseif (get_locale() == 'en_US') {
  $post_top = 512;
} elseif (get_locale() == 'pl_PL') {
  $post_top = 937;
} elseif (get_locale() == 'es_ES') {
    $post_top = 1137;
} elseif (get_locale() == 'fr_FR') {
    $post_top = 942;
} elseif (get_locale() == 'de_DE') {
    $post_top = 950;
} else {
  $post_top = 512;
} ?>


<?php $post_id_top = get_post( $post_top, ARRAY_A); ?>
<?php $title_top = $post_id_top['post_title']; ?>
<?php $content_top = $post_id_top['post_content']; ?>
    <h1>
<?php echo $title_top; ?>
      <!-- <?php echo __('
      Продукти бджільництва<br/>
      найвищьої якості      
      '); ?> -->
    </h1>
    <hr/>
    <p>
<?php echo $content_top; ?>

<!--       <?php echo __('
      Майже через десять років після свого заснування, наша компанія прагне стати<br/>
      гідним представником медової індустрії не тільки на території України, а й далеко<br/>
      за її межами. У перспективі експорт меду в країни Європейського союзу та <br/> 
      Америку. Для вітчизняних клієнтів ми вже зараз є надійним партнером і <br/>
      постачальником, про що свідчать численні нагороди ( «імпортер року» та<br/>
      «Лідер галузі»).<br/>          
      '); ?> -->
    </p>    
<!--     <a href="/o-kompanii/">
      <button class="htmore">
        Більше
      </button>
    </a> -->
  </section>
  <section class="htdivided">
    <div class="dividedleft">
      <div class="dividedleftcontent">
        <img src="<?php echo HT_URI ?>/images/htsecondarysliderlogo.png"/>
        <div id="htsecondaryslider">
<!--  -->
        <?php query_posts("cat=39"); ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div>
            <h2><?php the_title(); ?></h2>
            <hr/>
            <p>
              <?php the_content(); ?>
            </p>
          </div>
          <?php endwhile; endif; ?>

          <?php wp_reset_query(); ?>

          <!--  -->
          <!-- <div>
            <h2><?php echo __('Маленькі працівниці'); ?></h2>
            <hr/>
            <p>
              <?php echo __('
              Нещодавно вчені підрахували, що для збору ста грамів меду бджолі необхідно облетіти більше ніж сорок шість тисяч кілометрів, або близько одного мільйона квітів. Загалом для виробництва двох кілограмів меду знадобиться п’ять кілограмів нектару.
              '); ?>
            </p>
          </div>
          <div>
            <h2><?php echo __('Цілюща властивість меду'); ?></h2>
            <hr/>
            <p>
              <?php echo __('
              Мед містить багато фруктози, яка ефективно виводить усілякі токсини з нашого організму у тому числі і алкоголь. Отож, якщо зранку після грандіозної вечірки ви прокинулися з головним болем, достатньо з’їсти піджарений тост із медом, щоб почуватися набагато краще.
              '); ?>        
            </p>
          </div>
          <div>
            <h2><?php echo __('Природний ворог натуральної солодощі'); ?></h2>
            <hr/>
            <p>
              <?php echo __('
              Тепло погано впливає на корисні властивості меду, тому нагрівати його не рекомендується. Висока температура (більше п’ятдесяти градусів) повністю нейтралізує усі корисні якості натуральної солодощі.
              '); ?>         
            </p>
          </div>
          <div>
            <h2><?php echo __('Особливості різновидів меду'); ?></h2>
            <hr/>
            <p>
              <?php echo __('
              Отримати мед з однієї медоносної рослини практично неможливо - поряд з пасікою зазвичай одночасно цвіте декілька медоносів, а при відкачуванні з вулика разом з найсвіжішим медом можуть потрапляти старі запаси бджолиної сім\'ї, зібрані раніше з інших рослин. Тому різновид меду визначається згідно з рослиною, кількість нектару якої переважає у його складі.
              '); ?>            
            </p>
          </div>
          <div>
            <h2><?php echo __('Секрет мінерального складу'); ?></h2>
            <hr/>
            <p>
              <?php echo __('
              Мінеральний склад меду схожий зі складом людської крові, що сприяє швидкому засвоєнню цілющого продукту в нашому організмі. Саме цим і обумовлені його лікувальні, дієтичні і харчові особливості.
              '); ?>            
            </p>
          </div>      -->     
        </div>
      </div>
    </div>
    <div class="dividedright">
      <div class="dividedrightcontent">
<?php if ( get_locale() == 'uk_UA') {
 $post_bottom = 449;
} elseif (get_locale() == 'en_US') {
  $post_bottom = 516;
}  elseif (get_locale() == 'es_ES') {
    $post_bottom = 957;
} elseif (get_locale() == 'pl_PL') {
    $post_bottom = 967;
} elseif (get_locale() == 'fr_FR') {
    $post_bottom = 955;
} elseif (get_locale() == 'de_DE') {
    $post_bottom = 952;
} else {
  $post_bottom = 516;
} ?>

<!--          --><?php //$the_query = new WP_Query('cat=71'); ?>
<!--          --><?php //while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
<!--              --><?php //the_content(); ?>
<!--          --><?php //endwhile; ?>

<?php $post_id_bottom = get_post( $post_bottom, ARRAY_A); ?>
<?php $content_bottom = $post_id_bottom['post_content']; ?>
        <p>
        <?php echo $content_bottom; ?>
         <!--  <?php echo __('
          Щоденне вживання меду по 20-50 грамів протягом року помітно покращує склад крові і обмін речовин.
          '); ?> -->
        </p>
       <!--  <a href="http://nectarica.com/korisna-informaciya/pro-med/">
          <button class="htmore">
            <?php echo __('Більше'); ?>
          </button>
        </a> -->
      </div>
    </div>      
  </section>
</main>
<?php get_footer();