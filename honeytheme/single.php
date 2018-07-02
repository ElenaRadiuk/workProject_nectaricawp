<?php get_header(); ?>
<main>
  <?php if(have_posts()){
  while (have_posts()){
  the_post(); ?>  
  <?php if (in_category('32') || in_category('33') || in_category('30')) { ?>
  <div class="htwrapper">
    <section class="htcatalog">
      <ul>
<?php $ul_id = 32; ?>
      <?php query_posts("cat=$ul_id"); ?>
      <li><a href="<?php echo get_category_link($ul_id); ?> "> <?php echo get_cat_name($ul_id);?></a>
      <hr/>
        <ul>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </li>
          <?php endwhile; endif; ?>

          <?php wp_reset_query(); ?>
        </ul>
      </li>
      </ul>
      </section>
      <section class="htproducts">
    <article class="product_item">
        <div class="productwrapper">
          <div class="productimage">            
              <?php echo get_the_post_thumbnail(); ?>
          </div>          
          <div class="productinfo">
            <header>
                <?php the_title(); ?>
              <hr/>
            </header>        
            <div class="productcontent">              
                <?php the_content(); ?>              
            </div>
       <!--  <a href="<?php the_permalink(); ?>">
              <button><?php echo __('ДІЗНАТИСЯ ПРО ТОВАР'); ?></button>
            </a>    -->       
          </div>
        </div>
      </article>
      </section>
  <?php } elseif (in_category('41') || in_category('60') || in_category('61')) { ?>
      <div class="htwrapper">
    <section class="htcatalog">
      <ul>
<?php $ul_id = 60; ?>
      <?php query_posts("cat=$ul_id"); ?>
      <li><a href="<?php echo get_category_link($ul_id); ?> "><?php echo get_cat_name($ul_id);?></a>
      <hr/>
        <ul>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </li>
          <?php endwhile; endif; ?>

          <?php wp_reset_query(); ?>
        </ul>
      </li>
      </ul>
      </section>
      <section class="htproducts">
    <article class="product_item">
        <div class="productwrapper">
          <div class="productimage">            
              <?php echo get_the_post_thumbnail(); ?>
          </div>          
          <div class="productinfo">
            <header>
                <?php the_title(); ?>
              <hr/>
            </header>        
            <div class="productcontent">              
                <?php the_content(); ?>              
            </div>      
          </div>
        </div>
      </article>
      </section>
 <?php } else {  ?>  
  <article>
    <header class="htsinglename">
      <div class="htsinglenamewrapper">
        <hr/>
          <?php the_title(); ?>
        <hr/>
      </div>
    </header>
    
    <div class="singlewrapper">
      <?php if(in_category('5') || in_category('52')) { ?>
        <?php echo get_the_post_thumbnail(); ?>                
        <div class="postdate">
          <?php echo the_date('j F Y'); ?>
        </div>
        <hr/>
      <?php } ?>
      <p>
        <?php the_content(); ?>
      </p>
    </div>
  </article>
  <?php }
  } 
  }?>
</main>


<?php get_footer();