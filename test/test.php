<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Тестирование знаний в области геодезии, картографии. Проверь свои знания в таких науках с помощью тестирования по геодезии, топографии.">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <title>Тесты по геодезии, топографии</title>
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

   <div class="general_test">
      <h1 class="h1_general_test">Тесты по геодезии и топографии</h1>
      <div class="box_menu_test">
         <div class="item_menu">
            <a href="test-geodeziya.php" class="link_item_menu">
               <div class="img_item_menu_1"></div>
               <div class="txt_item_menu">
                  <h2 class="h2_general_test">Тест по геодезии</h2>
                  <p class="description_item_menu">Тестирование знаний с большим уклоном в геодезию.</p>
               </div>
            </a>
         </div>
         <div class="item_menu">
            <a href="test-topografiya.php" class="link_item_menu">
               <div class="img_item_menu_2"></div>
               <div class="txt_item_menu">
                  <h2 class="h2_general_test">Тест по топографии</h2>
                  <p class="description_item_menu">Тестирование знаний с большим уклоном в топографию.</p>
               </div>
            </a>
         </div>
      </div>
   </div>

   <?php
      require "../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>