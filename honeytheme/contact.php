<?php
/**
 ** Template Name: Contact Page
 **/

get_header(); ?>
<main>
  <header class="contactpageheader">
    <hr/>
      <?php echo get_the_title(); ?>
    <hr/>

  </header>
<!--   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2565.3033441257076!2d36.26023520663554!3d49.98692202444947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a090f3590a45%3A0x82c95d3290829fa6!2z0L_Quy4g0J_QvtCy0YHRgtCw0L3QvdGPLCDQpdCw0YDQutGW0LIsINCl0LDRgNC60ZbQstGB0YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1sru!2sua!4v1461846164265" width="96%" height="650px" frameborder="0" style="border:0; margin:20px auto; display:block;" allowfullscreen></iframe> -->


            <div id="map-container" style="height: 500px;" ></div>
         


</main>
<?php get_footer(); ?>


    <?php $locale =   get_locale();
        $language = explode("_", $locale);
    ?>


 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0-hEOxU3k7B7TWeOvcJZRBNT2opwhZIM&language=<?=$language[0];?>" type="text/javascript"></script>
  <script>
 
 /* ///////// карта /////////*/

var drgflag = true;

 if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

var drgflag = false;
}
    function init_map() {
        var var_location = new google.maps.LatLng(49.987102, 36.258943);

        var var_mapoptions = {
            center: var_location,
            zoom: 17,
            scrollwheel: false,
            mapTypeId:google.maps.MapTypeId.ROADMAP,
            draggable:drgflag
            // draggable: false,
            
        };

        var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title: <?=(get_locale()=="en_US")?'" Kharkiv, Zakhysnykiv Ukrainy square, build. 7/8, block 3-5, floor 2, office 40"':'"м. Харків, майдан Захисників України, будинок 7/8, корпус З-5, поверх 2, офіс 40"';?>
        });

        var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);

        var_marker.setMap(var_map);

    }

    google.maps.event.addDomListener(window, 'load', init_map);
</script>