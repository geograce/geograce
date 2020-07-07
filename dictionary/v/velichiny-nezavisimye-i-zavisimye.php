<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Независимые с точки зрения теории ошибок измерений независимой величиной будет неизбежно маленькая ошибка, которая образуется самостоятельно. Величина будет считаться зависимой при условии, что ее ошибка является функцией ошибок других величин.">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
   <title>Величины независимые и зависимые - это... Что означают зависмые и независимые величины?</title>
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
      <h1 class="h1_description_general">Величины независимые и зависимые</h1>
      <p class="txt_description_general"><strong>НЕЗАВИСИМАЯ</strong> &ndash; с точки зрения теории ошибок измерений
         независимой величиной будет неизбежно маленькая ошибка, которая образуется самостоятельно, т.е. не зависит от
         ошибок других величин, которые участвуют в конкретной обработке измерений. Величина будет считаться
         <strong>ЗАВИСИМОЙ</strong> при условии, что ее ошибка является функцией ошибок других величин, которые
         участвуют в конкретных расчетах. Любое измерение, а точнее его результат &ndash; это независимая величина.
         Примером зависимой величины может служить третий угол, который найден как дополнение до 180 градусов к двум
         другим углам, которые были измерены. В теории ошибок, а также в способе наименьших квадратов условие
         независимости образования ошибок лежит как одна из основ.</p>
      <p class="formula_description">$$&omega;=A+B+C-180^&#9675;$$</p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>