<!--     <footer>
      <div>
        <i class="fa fa-map-marker"></i> <?php echo __('61001, м. Харків, майдан Захисників України, будинок 7/8, корпус З-5, поверх 2, офіс 40'); ?>
      </div>
      <div>
        <i class="fa fa-mobile"></i><span><a href="tel:+380577575575">+380577575575</a></span>
      </div>      
      <div>
        <i class="fa fa-envelope"></i> <a href="mailto:sales@nectarica.com"><?php echo __('sales@nectarica.com'); ?></a>
      </div>
      <div>
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-vk"></i>
        <i class="fa fa-odnoklassniki"></i>
      </div>      
      <div>
        <i class="fa fa-copyright"></i> <?php echo __('2006 - 2016 ТОВ "Дриллекс"'); ?>
      </div>
    </footer> -->

<script>
  function initMap() {
    var uluru = {lat: 49.987148, lng: 36.258944};
    var ulurue = {lat: 50.053777, lng: 19.956811};

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      scrollwheel: true,
      center: {lat: 49.986902, lng: 36.270198}
    });
      var map2 = new google.maps.Map(document.getElementById('map2'), {
          zoom: 16,
          scrollwheel: true,
          center: {lat: 50.053933, lng: 19.965807}
      });

      var image = '<?php echo HT_URI ?>/images/address.png';

      var marker1 = new google.maps.Marker({
      position: uluru,
      map: map,
      icon: image
    });
      var marker2 = new google.maps.Marker({
          position: ulurue,
          map: map2,
          icon: image
      });
  }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCprtJoVXmtTMvpxG9gCEpvys_PWY6LrVk&callback=initMap">
</script>
        <?php query_posts("cat=21"); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
        
    <?php wp_footer(); ?>
<!--     <script>
    if ((/iPhone|iPad|iPod/.test(navigator.userAgent)) {
      $('a#geo').attr('href','https://www.google.com.ua/maps/place/%D0%A2%D0%9E%D0%92+%D0%94%D1%80%D0%B8%D0%BB%D0%BB%D0%B5%D0%BA%D1%81/@49.9871054,36.2567543,17z/data=!3m1!4b1!4m5!3m4!1s0x4127a091b865ad25:0x7b12ced9e1034623!8m2!3d49.987102!4d36.258943?hl=ru')
    }
      
    </script> -->
  </body>
</html>

