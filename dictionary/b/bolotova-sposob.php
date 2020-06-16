<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Болотова способ графический способ определения местоположения на карте четвертой точки по имеющимся на ней трем другим (задача Потенота).">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <title>Болотова способ</title>
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
      <h1 class="h1_description_general">Болотова способ</h1>
      <p class="txt_description_general"><strong>Болотова способ</strong> &ndash; графический способ определения
         местоположения на карте четвертой точки по имеющимся на ней трем другим (задача Потенота). Способ
         применяется, когда требуется перенести с аэрофотоснимков на карту какие&ndash;либо точки, которых на ней нет, а
         также при необходимости определить на карте точку своего стояния на местности. Задача решается при помощи
         прозрачной бумаги (восковки). На аэрофотоснимок накладывают восковку, и на ней из переносимой точки, как из
         полюса, прочерчивают направления на три контурные точки снимка, опознанные на карте. Затем восковку
         накладывают на карту и добиваются такого положения, чтобы прочерченные на ней направления прошли через
         соответствующие точки на карте. Точка полюса на восковке покажет положение искомой точки на карте. Для
         определения положения на карте точки своего стояния намечают на восковке, в произвольном месте, точку и
         визируют через нее на три точки местности, опознанные на карте. После этого накладывают восковку на карту и
         тем же приемом, как и в случае с аэрофотоснимком, находят положение искомой точки. Болотова способ применим
         и для определения на планшете положения переходной точки при мензульной съемке.</p>
      <br>
      <p class="txt_description_general">Исходные три точки следует выбирать так, чтобы углы между прочерченными на
         восковке направлениями были не менее 60&deg;; восковка во время визирования должна сохранять неизменное
         положение. Способ не применим, если определяемая точка находится на одной окружности с исходными.</p>
   </div>

   <?php
        require "../../module_php/footer_general.php";
    ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>