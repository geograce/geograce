<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Фильтрация изображения способ обработки, а также анализа изображения с целью ослабления помех, которые понижают качество изображения. Фильтрация изображения производится в пространственной области">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <title>Фильтрация изображения - это ... Что такое фильтрация изображений?</title>
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
      <h1 class="h1_description_general">Фильтрация изображения</h1>
      <p class="txt_description_general"><strong>ФИЛЬТРАЦИЯ ИЗОБРАЖЕНИЯ</strong> &ndash; способ обработки, а также
         анализа изображения с целью ослабления помех, которые понижают качество изображения. Фильтрация изображения
         производится в “пространственной области” &ndash; над исходным изображением и в “частотной области” &ndash; над
         спектром пространственных частот изображения, как правило &ndash; это преобразование Фурье исходного
         изображения.</p>
      <p class="txt_description_general">При аналоговой фильтрации чтобы добиться распознавание объектов предварительно
         синтезируются фильтры &ndash; фотографическое изображение спектров Фурье изображений объектов, которые подлежат
         классификации, а при цифровой фильтрации изображений, которая производится посредствам ЭВМ, составляются
         специальные программы фильтрации применимые для решаемой задачи.</p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>