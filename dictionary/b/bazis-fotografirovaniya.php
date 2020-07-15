<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Базис фотографирования расстояние B между точками фотографирования двух смежных аэрофотоснимков. По имеющимся аэрофотоснимкам величина базиса фотографирования приближенно
      может быть получена как расстояние между главными точками...">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
   <title>Базис фотографирования в аэрофотосъемке - это... Что такое базис фотографирования</title>
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
      <h1 class="h1_description_general">Базис фотографирования</h1>
      <p class="txt_description_general"><strong>БАЗИС ФОТОГРАФИРОВАНИЯ</strong> расстояние <em>B</em> между точками
         фотографирования двух смежных аэрофотоснимков. При плановой аэрофотосъемке базис фотографирования
         рассматривается по формуле:</p>
      <p class="formula_description">$$B = ml_x{100-p \over 100}$$</p>
      <p class="txt_description_general">где:</p>
      <p class="txt_description_general" style="margin-bottom: 0;">m &ndash; знаменатель масштаба фотографирования;</p>
      <p class="txt_description_general" style="margin-bottom: 0;">l<sub>x</sub> &ndash; длина продольной стороны аэрофотоснимка;</p>
      <p class="txt_description_general">p &ndash; продольное перекрытие в процентах.</p>
      <p class="txt_description_general">По имеющимся аэрофотоснимкам величина базиса фотографирования приближенно
         может быть получена как расстояние между главными точками совмещенных смежных плановых аэрофотоснимков,
         умноженное на знаменатель их численного масштаба.</p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>