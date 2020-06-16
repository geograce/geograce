<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Засечка проективная способ определения положения точек местности по их изображениям на перспективном снимке, основанный на двойном отношении четырех точек, лежащих на одной прямой.">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <title>Засечка проективная</title>
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
      <h1 class="h1_description_general">Засечка проективная</h1>
      <p class="txt_description_general"><strong>Засечка проективная</strong> &ndash; способ определения положения
         точек местности по их изображениям на перспективном снимке, основанный на двойном (ангармоническом)
         отношении четырех точек, лежащих на одной прямой. Для выполнения засечки проективной на аэрофотоснимке и
         карте отождествляют четыре соответственные точки (рис. 1 и 2) а, Ь, с, d и А, В, С, D.</p>
      <figure class="figure_img_description_general" style="max-width: 300px;">
         <img class="img_description_general" src="/img/dictionary/z/zasechka-perspektivnaya-na-aerofotosnimke.svg"
            alt="Засечка проективная на аэрофотоснимке">
         <figcaption class="figcaption_general">Рис. 1 Засечка проективная на аэрофотоснимке</figcaption>
      </figure>
      <p class="txt_description_general">Принимая, например, точку а в качестве вершины, проводят из нее лучи на
         выбранные точки Ь, с, d и на точку е, подлежащую переносу на карту. На снимок произвольно накладывают
         полоску бумаги и отмечают на ней пересечения всех четырех лучей с обрезом. Затем ориентируют полоску по
         меткам и направлениям AB, AD и AC, проведенным на карте, после чего через точку А и метку, соответствующую
         определяемой точке, прочерчивают первое направление засечки проективной. Для следующего направления засечку
         проективную используют в качестве вершины другую точку снимка, например Ь, и выполняют аналогичные действия.
         Пересечение направлений из вершин A и B определит положение точки E. Для контроля следует провести еще одно
         направление, выполнив засечку проективную из третьей вершины.</p>
      <figure class="figure_img_description_general" style="max-width: 300px;">
         <img class="img_description_general" src="/img/dictionary/z/zasechka-perspektivnaya-na-karte.svg"
            alt="Засечка проективная на карте">
         <figcaption class="figcaption_general">Рис. 2 Засечка проективная на карте</figcaption>
      </figure>
      <p class="txt_description_general">Засечка проективная обеспечивает перенос изображения с аэрофотоснимка,
         имеющего любой угол наклона, но подвержена влиянию ошибок, обусловленных рельефом. Поэтому при выборе
         соответственных точек следует стремиться к тому, чтобы они располагались почти на одной высоте, близкой к
         высоте определяемой точки.</p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>