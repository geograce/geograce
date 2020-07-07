<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Хронометр часы большой точности и обладают высоким постоянством суточного хода. Хронометры делят на: звездные которые идут по ...">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
   <title>Хронометр - это... Что такое хронометр?</title>
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
      <h1 class="h1_description_general">Хронометр</h1>
      <p class="txt_description_general"><strong>Хронометр</strong> &ndash; часы большой точности и обладают высоким
         постоянством суточного хода. Хронометры делят на: звездные которые идут по звездному времени и средние идущие
         по среднему времени, также хронометры бывают контактными и неконтактными, карманными и столовыми. Контактный
         хронометр снабжен прерывателем, что позволяет производить запись показаний путем включения хронометра в
         электрическую цепь с хронографом. Для измерений точных астрономических определений применяют в основном
         звездные столовые хронометры.</p>
      <figure class="figure_img_description_general" style="max-width: 450px;">
         <img class="img_description_general" src="/img/dictionary/h/khronometr.webp" alt="Хронометр">
         <figcaption class="figcaption_general">Рис. 1 Хронометр</figcaption>
      </figure>
      <p class="txt_description_general">Разность между местным звездным временем в какой-либо момент и показанием
         хронометра в этот момент называется поправкой звездного хронометра:</p>
      <p class="formula_description">$$u=s-T_{зв}$$</p>
      <p class="txt_description_general">где s &ndash; звездное время меридиана места наблюдения, которое определяется
         по наблюдениям светил для среднего момента наблюдений; T<sub>ЗВ</sub> &ndash; данные звездного хронометра в
         средний момент наблюдений; &ndash; поправка хронометра для момента T<sub>ЗВ</sub>.</p>
      <p class="txt_description_general">Если определена астрономическая долгота места наблюдения, то поправку
         хронометра можно определить из приема ритмических сигналов точного времени. Изменение поправки хронометра за
         один час или за сутки называют его часовым или суточным ходом &omega; и вычисляется по формуле:</p>
      <p class="formula_description">$$&omega; = {u_2-u_1 \over T_2-T_1}$$</p>
      <p class="txt_description_general">где u<sub>1</sub> и u<sub>2</sub> &ndash; поправки хронометра, соответственно в
         моменты T<sub>1</sub> и T<sub>2</sub>.</p>
      <p class="txt_description_general">Поправка хронометра для некоторого промежуточного момента T равна:</p>
      <p class="formula_description">$$u=u_1-&omega;(T-T_1)$$</p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>