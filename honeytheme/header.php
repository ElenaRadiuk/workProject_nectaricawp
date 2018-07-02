<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?
  $pages = [
    '839, 1250, 1260, 1261, 1262, 1263' => ',3,81670,10477588',
    '835, 1265, 1266, 1267, 1268, 1269' => ',3,81670,10471632',
    '403, 459, 1270, 1271, 1272, 1273, 1274' => ',3,81670,10477592',
    '1350, 1354, 1353, 1355, 1356, 1357' => ''
  ];
  foreach ($pages as $pagesList => $pageRedirect) {
    if (is_single(explode(', ', $pagesList))) {
      ?>
      <script>
        <?if($pagesList == '1350, 1354, 1353, 1355, 1356, 1357'){?>
        var filter = ['FR', 'DE', 'PL', 'ES', 'UA'];
        <?} else {?>
        var filter = ['FR', 'DE', 'PL'];
        <?}?>

        function geoip(g) {
          var url = window.location.href;

          var lang;
          var langString;

          if (inArray(g.country_code, filter)) {
            lang = g.country_code.toLowerCase();
            langString=(lang==='ua')?"":'?lang='+lang;
          } else {
            lang = 'en';
            langString='?lang='+lang;
          }


          <?if($pagesList == '1350, 1354, 1353, 1355, 1356, 1357'){?>

          location.href = "https://nectarica.com/quality-sertificate/" + langString;

          <?} else {?>

          location.href = "https://shop-eu.nectarica.com/" + lang + "/<?=$pageRedirect;?>";

          <?}?>
        }

        function inArray(r, n) {
          for (var t = n.length, e = 0; t > e; e++) if (n[e] == r) return !0;
          return !1
        }

        (function (g, e, o, i, p) {
          i = g.createElement(e), p = g.getElementsByTagName(e)[0];
          i.async = 0;
          i.src = o;
          p.parentNode.insertBefore(i, p)
        })(document, 'script', 'https://api.ipdata.co/?callback=geoip');

      </script>
    <? }
  }
  ?>

  <meta charset="<?php get_bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>
<header class="topheader">
  <div class="headerwrapper">
    <?php language_selector(); ?>
    <div class="headersearch">
      <i class="fa fa-search"></i>
      <?php get_search_form(); ?>
    </div>

    <?php if (get_locale() == en_US) {
      $home = '/?lang=en';
    } elseif (get_locale() == uk_UA) {
      $home = '/';
    } else {
      $home = '/?lang=en';
    }
    ?>
    <div id="htlogo">
      <a href="<?php echo $home; ?>">
        <img src="<?php echo HT_URI ?>/images/logo.png"/>
        <div>NECTARICA</div>
      </a>
    </div>
    <nav class="mainmenu">
      <?php wp_nav_menu('mainmenu'); ?>
    </nav>
  </div>
</header>