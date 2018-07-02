<?php get_header(); ?>
<main>  
  <div class="htproductsname">
      <hr/>
      <?php echo get_cat_name(32);?>
        <!-- <?php echo __('Продукция'); ?> -->
      <hr/>
  </div>  
  <nav class="productstopnav">  
    <?php wp_nav_menu(array('menu' => 'ProductsTopMenu'));?>
  </nav>
  <div class="htwrapper">
    <section class="htcatalog">
      <ul>
      <?php  
        $productscategories = get_terms('productscategory', array(
            'child_of' => 8
        ));
        foreach ($productscategories as $productscategory){        
          echo '<li>';
          echo '<a href="'.get_term_link($productscategory->term_id).'">'.$productscategory->name.'</a>';
          echo '<hr/>';
        $args = array(
            'post_type' => 'product',
            'productscategory' => $productscategory->slug
            );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) {
          echo '<ul>';
          while ( $the_query->have_posts() ) {
            $the_query->the_post();
            echo '<li>';
              echo '<a href="'.get_the_permalink().'">' . get_the_title() . '11</a>';
            echo '</li>';
          }
        echo '</ul>';
        }
        echo '</li>';
        wp_reset_postdata();
        }
      ?>
      </ul>
    </section>      
    <section class="htproducts">
    <?php if(have_posts()){
      while (have_posts()){
        the_post(); ?>    
      <article>
        <div class="productwrapper">
          <div class="productimage">            
              <?php echo get_the_post_thumbnail(); ?>
              <!-- <div class="productoptions">                
                <div class="productoption">
                  <?php echo get_the_post_thumbnail(); ?>
                  <span><?php echo __('280кг'); ?></span>
                </div>
                <div class="productoption">
                  <?php echo get_the_post_thumbnail(); ?>
                  <span><?php echo __('1кг'); ?></span>
                </div>
                <div class="productoption">
                  <?php echo get_the_post_thumbnail(); ?>
                  <span><?php echo __('500г'); ?></span>
                </div>
                <div class="productoption">
                  <?php echo get_the_post_thumbnail(); ?>
                  <span><?php echo __('250г'); ?></span>
                </div>                
              </div> -->
          </div>          
          <div class="productinfo">
            <header>
                <?php the_title(); ?>
              <hr/>
            </header>        
            <div class="productcontent">              
                <?php the_content(); ?>              
            </div>
            <a href="<?php the_permalink(); ?>">
              <button><?php echo __('ДІЗНАТИСЯ ПРО ТОВАР'); ?></button>
            </a>            
          </div>
        </div>
      </article>
      <?php }
      } ?>
    </section>

  </div>
</main>
<?php get_footer();

