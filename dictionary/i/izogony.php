<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Изогоны линии на карте, соединяющие точки с равным магнитным склонением. Изогоны наносятся на топографические карты">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/logo_geograce.svg">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <title>Изогоны</title>
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
      require "../../module_php/menu_general.php";
   ?>

   <div class="description_general">
      <h1 class="h1_description_general">Изогоны</h1>
      <p class="txt_description_general"><strong>Изогоны</strong> &ndash; линии на карте, соединяющие точки с равным
         магнитным склонением. Изогоны наносятся на топографические карты масштабов 1:500000 и 1:1000000,
         используемые авиацией, а также на специальные авиационные и морские навигационные карты. Наряду с изогонами
         на этих же картах показываются районы магнитных аномалий.</p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>