<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Аддитаменты логарифмические значения, которые используются в операциях с логарифмами синусов и тангенсов малых углов. Способ аддитаментов часто используют для решения сфероидических треугольников.">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
   <title>Аддитаменты - это... Что такое аддитаменты?</title>
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
      <h1 class="h1_description_general">Аддитаменты</h1>
      <p class="txt_description_general"><strong>АДДИТАМЕНТЫ</strong> S и T &ndash; логарифмические значения, которые
         используются в операциях с логарифмами синусов и тангенсов малых углов (от 0 до 5&deg;). Значения S и T
         находятся в логарифмических таблицах, как правило внизу каждой страницы логарифмов чисел. При малом угле
         <em>X</em> значения <em>lg sinX</em> и <em>lg tgX</em> можно определить по формулам:</p>
      <p class="formula_description">$$lg\;SinX=lgX''+S$$</p>
      <p class="formula_description">$$lg\;TgX=lgX''+T$$</p>
      <p class="txt_description_general">где х&Prime; &ndash; величина угла X, которая выражается в секундах градусной
         меры. Чтобы перевести величины угла в секунды можно использовать перевод округленных значений углов, которые
         помещаются рядом со значениями S и T.</p>
      <p class="txt_description_general">Обратная задача или нахождение малого угла <em>X</em> по данному <em>lg
            sinX</em> или <em>lg tgX</em>, производится по формулам:</p>
      <p class="formula_description">$$lgX''=lg\;SinX-S$$</p>
      <p class="formula_description">$$lgX''=lg\;TgX-T$$</p>
      <p class="txt_description_general">Значения S и T в обратной задаче выбирают по предварительно найденному
         приближенному значению угла X. Способ аддитаментов часто используют для решения сфероидических треугольников.
      </p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>