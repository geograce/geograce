<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Каталог инструкций к геодезическим приборам, а также руководства пользователя.">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <title>Каталог инструкций к геодезическим приборам</title>
</head>

<body>
   <!-- Yandex.Metrika counter -->
   <script type="text/javascript">
      (function (m, e, t, r, i, k, a) {
         m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
         m[i].l = 1 * new Date(); k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
      })
         (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

      ym(64847890, "init", {
         clickmap: true,
         trackLinks: true,
         accurateTrackBounce: true,
         webvisor: true
      });
   </script>
   <noscript>
      <div><img src="https://mc.yandex.ru/watch/64847890" style="position:absolute; left:-9999px;" alt="" /></div>
   </noscript>
   <!-- /Yandex.Metrika counter -->

   <?php
      require "../module_php/menu_general.php";
   ?>

   <div class="catalog_home_instrument">
      <h1 class="h1_catalog_home_instrument">Инструкции геодезических приборов</h1>
      <div class="catalog_menu_instrument">
         <a href="/catalog/takheometr/takheometr-catalog.php" class="link_geodesy_instrument">
            <div class="geodesy_instrument">
               <div class="img_takheometr_instrument"></div>
               <div class="txt_box_instrument">
                  <h2 class="h2_catalog_home_instrument">Тахеометры</h2>
                  <p class="txt_instrument">Инструкции и характеристики геодезических инструментов по типу &ndash;
                     электронные тахеометры так и оптические тахеометры</p>
               </div>
            </div>
         </a>
         <a href="/catalog/nivelir/nivelir-catalog.php" class="link_geodesy_instrument">
            <div class="geodesy_instrument">
               <div class="img_nivelir_instrument"></div>
               <div class="txt_box_instrument">
                  <h2 class="h2_catalog_home_instrument">Нивелиры</h2>
                  <p class="txt_instrument">Инструкции и характеристики геодезических инструментов по типу &ndash;
                     цифровые нивелиры, оптические, лазерные и приборы вертикального проектирования.</p>
               </div>
            </div>
         </a>

         <!-- <a href="#" class="link_geodesy_instrument">
            <div class="geodesy_instrument">
               <div class="img_teodolit_instrument"></div>
               <div class="txt_box_instrument">
                  <h2 class="h2_catalog_home_instrument">Теодолиты</h2>
                  <p class="txt_instrument">Инструкции и характеристики геодезических инструментов по типу &ndash;
                     электронные теодолиты так и оптические теодолиты</p>
               </div>
            </div>
         </a>

         <a href="#" class="link_geodesy_instrument">
            <div class="geodesy_instrument">
               <div class="img_gnss_instrument"></div>
               <div class="txt_box_instrument">
                  <h2 class="h2_catalog_home_instrument">Геодезические приемники</h2>
                  <p class="txt_instrument">Инструкции и характеристики геодезических инструментов по типу &ndash;
                     спутниковых геодезических приемников, как точных, так и навигационных.</p>
               </div>
            </div>
         </a> -->

      </div>
   </div>



   <?php
      require "../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>