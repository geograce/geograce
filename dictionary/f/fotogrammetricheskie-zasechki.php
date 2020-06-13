<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Фотограмметрические засечки способы определения элементов внешнего ориентирования аэрофотоснимка (модели) и определения геодезических координат точек местности по аэрофотоснимкам.">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/logo_geograce.svg">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <title>Фотограмметрические засечки</title>
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
      <h1 class="h1_description_general">Фотограмметрические засечки</h1>
      <p class="txt_description_general"><strong>Фотограмметрические засечки</strong> &ndash; способы определения
         элементов внешнего ориентирования аэрофотоснимка (модели) и определения геодезических координат точек
         местности по аэрофотоснимкам. Различают прямую, одиночную обратную и двойную обратную фотограмметрическую
         засечку.</p>
      <br>
      <p class="list_description_general"><strong>Прямая фотограмметрическая засечка</strong> &ndash; способ
         определения геодезических координат точек местности по их изображению на аэрофотоснимке (стереопаре,
         маршруте), положение которого относительно геодезической системы координат установлено. Осуществление прямой
         фотограмметрической засечки по аэрофотоснимкам без их предварительных фотограмметрических преобразований
         затруднено, так как элементы внешнего ориентирования снимка сразу после аэрофотосъемки известны лишь
         приближенно. Поэтому для определения координат точек местности по одиночному аэрофотоснимку предварительно
         выполняют одиночную обратную фотограмметрическую засечку, а по стереопаре (маршруту, группе маршрутов)
         &ndash; двойную обратную фотограмметрическую засечку.</p>
      <p class="list_description_general"><strong>Одиночная обратная фотограмметрическая засечка</strong> &ndash;
         способ определения элементов внешнего ориентирования аэрофотоснимка по опорным точкам, координаты которых на
         аэрофотоснимке измеряются, а на местности известны. Для выполнения одиночной обратной фотограмметрической
         засечки по горизонтальному аэрофотоснимку необходимы две опорные точки, по наклонному &ndash; три. После
         восстановления положения снимка относительно геодезической системы координат способом одиночной обратной
         фотограмметрической засечки выполняют прямую.</p>
      <p class="list_description_general"><strong>Двойная обратная фотограмметрическая засечка</strong> &ndash; способ
         определения элементов внешнего ориентирования аэрофотоснимков построением модели в пределах стереопары,
         маршрута или группы маршрутов аэрофотоснимков и ориентированием ее по опорным точкам.</p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>