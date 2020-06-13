<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Чебышева проекция равноугольная проекция, в которой частный масштаб на контуре картографируемой территории постоянен.">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/logo_geograce.svg">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <title>Чебышева проекция</title>
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
      <h1 class="h1_description_general">Чебышева проекция</h1>
      <p class="txt_description_general"><strong>Чебышева проекция</strong> &ndash; равноугольная проекция, в которой
         частный масштаб на контуре картографируемой территории постоянен. По теореме П. Л. Чебышева, высказанной им
         в 1853 г. без доказательства и доказанной Д. А. Граве в 1894 г., наибольшее колебание (уклонение от единицы)
         частного масштаба в такой проекции меньше, чем в любой другой равноугольной проекции. Например, для
         территории СССР, изображенной в равноугольной конической проекции, наибольшие искажения длин равны 8,5%, а в
         проекции Чебышева &ndash; только 2,7%. Способы вычисления проекции Чебышева для территорий, ограниченных
         простыми контурами, даны Д. А. Граве, а для территорий, ограниченных произвольными контурами, &ndash; Н. А.
         Урмаевым. Примером проекции Чебышева может служить стереографическая проекция любой области сферы,
         ограниченной окружностью. В общем случае проекция Чебышева имеет сложную форму параллелей и меридианов, а
         вид формул проекции зависит от размера и формы картографируемой территории.</p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>