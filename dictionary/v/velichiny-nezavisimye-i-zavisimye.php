<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Величины независимые и зависимые  теории ошибок измерений считается такая величина,неизбежная малая ошибка которой образуется независимо от ошибок других величин, участвующих в данной обработке измерений">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
   <title>Величины независимые и зависимые</title>
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
      <p class="txt_description_general"><strong>Независимой</strong> &ndash; в теории ошибок измерений считается такая
         величина,неизбежная малая ошибка которой образуется независимо от ошибок других величин, участвующих в
         данной обработке измерений. Величина будет <strong>зависимой</strong>, если ее ошибка является функцией
         ошибок других величин, участвующих в данных вычислениях. Результат любого измерения &ndash; независимая
         величина. Если третий угол треугольника найден как дополнение до 180&deg; к двум его измеренным углам, то
         значение такого угла будет зависимой величиной. по отношению к двум углам. Условие независимости образования
         ошибок лежит в основе многих правил и формул теории ошибок измерений и способа наименьших квадратов.</p>
      <p class="formula_description">$$&omega;=A+B+C-180^&#9675;$$</p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>