<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Геодезическая линия линия кратчайшего расстояния на какой-либо поверхности.">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <title>Геодезическая линия</title>
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
      <h1 class="h1_description_general">Геодезическая линия</h1>
      <p class="txt_description_general"><strong>Геодезическая линия</strong> &ndash; линия кратчайшего расстояния на
         какой&ndash;либо поверхности. На поверхности шара геодезическая линия &ndash; дуга большого круга, на боковой
         поверхности цилиндра &ndash; винтовая линия, на поверхности эллипсоида &ndash; кривая двоякой кривизны, в
         каждой точке которой соприкасающаяся плоскость проходит через нормаль к поверхности в той же точке. Для
         геодезической линии на шаре и эллипсоиде произведение радиуса параллели какой&ndash;либо ее точки на синус
         азимута геодезической линии в той же точке есть величина постоянная для данной геодезической линии ( r*sinA =
         C).</p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>