<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Азимут магнитный горизонтальный угол, отсчитываемый от северного направления магнитного меридиана до данного направления по ходу часовой стрелки. Магнитный азимут можно перевести в истинный азимут">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
   <title>Азимут магнитный - это... Что такое магнитный азимут?</title>
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
      <h1 class="h1_description_general">Азимут магнитный</h1>
      <p class="txt_description_general"><strong>АЗИМУТ МАГНИТНЫЙ</strong> &ndash; это горизонтальный угол, который
         отсчитывается от северного направления магнитного меридиана до данного направления по ходу часовой стрелки от 0
         до 360 градусов. Взаимосвязь между магнитным A<sub>M</sub> и истинным &alpha; азимутами выражается формулой:
      </p>
      <p class="formula_description">$$A_M=\alpha - (&plusmn;\delta)$$</p>
      <p class="txt_description_general">где &delta; &ndash; склонение магнитной стрелки, принимаемое к востоку от
         истинного меридиана со знаком « + » и к западу со знаком « - ».</p>
      <p class="txt_description_general"><strong>Задача 1.</strong> Истинный азимут заданного направления составляет
         120&deg;00&prime;, восточное склонение магнитной стрелки 5&deg;00&prime;. Нужно найти магнитный азимут
         направления. Находим по формуле:</p>
      <p class="formula_description">$$A_M=&alpha;-(&plusmn;&delta;)=$$</p>
      <p class="formula_description">$$=120&deg;00^&prime;-(+5&deg;00^&prime;)=115&deg;00^&prime;$$</p>
      <p class="txt_description_general"><strong>Задача 2.</strong> Перевести магнитный азимут 151&deg;10&prime; в
         истинный, если западное склонение равно 11&deg;10&prime;. Вычисляем по формуле:</p>
      <p class="formula_description">$$&alpha;=A_M+(&plusmn;&delta;)=$$</p>
      <p class="formula_description">$$=151&deg;10^&prime;+(-11&deg;05^&prime;)=140&deg;05^&prime;$$</p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>