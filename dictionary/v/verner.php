<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Верньер отсчетная шкала, которая предназначена для измерения долей делений на равномерной шкале. При изготовлении верньера дуга в n делений лимба разделяется на ...">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
   <title>Верньер - это... Что такое верньер?</title>
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
      <h1 class="h1_description_general">Верньер</h1>
      <p class="txt_description_general"><strong>ВЕРНЬЕР</strong> &ndash; это отсчетная шкала, которая предназначена для
         измерения долей делений на равномерной шкале, примером могут служить деление долей на лимбе теодолита или на
         дальномерной рейке. При изготовлении верньера дуга в n делений лимба разделяется на n+1 частей. Когда
         происходит измерение части деления лимба, которая заключена между штрихом лимба и начальным делением верньера,
         определенный штрих дуги верньера совпадет с направлением некоторого штриха лимба. На рисунке 1 изображен
         верньер.</p>
      <!--Слайдер==========================-->
      <div class="slider">
         <div class="slider_item">
            <img src="/img/dictionary/v/skhema-verner.svg" alt="Схема верньера">
         </div>
         <div class="slider_item">
            <img src="/img/dictionary/v/bussol-verner.webp" alt="Буссоль верньер">
         </div>
         <div class="slider_item">
            <img src="/img/dictionary/v/planimetr-verner.webp" alt="Планиметр верньер">
         </div>
         <div class="slider_item">
            <img src="/img/dictionary/v/shtangencirkul-verner.webp" alt="Штангельциркуль верньер">
         </div>
      </div>
      <br>
      <p class="txt_description_general">Если T &ndash; угловая величина деления лимба, то конструктивная величина
         t<sub>0</sub> деления верньера будет:</p>
      <p class="formula_description">$$t_0 = {Tn \over n+1}$$</p>
      <p class="txt_description_general">Угловая величина и измеряемой доли деления лимба, записываемая в журнале
         измерений, будет:</p>
      <p class="formula_description">$$u=(T-t_0)k$$</p>
      <p class="txt_description_general">где:</p>
      <p class="txt_description_general" style="margin-bottom: 0;">k &ndash; номер совпадающего штриха верньера, считая
         его начальный штрих нулевым.</p>
      <p class="txt_description_general">Величина (T &ndash; t<sub>0</sub>)k обычно прочитывается по подписям на
         верньере. Если, например, T = 10&prime;, n = 59, то t<sub>0</sub> = 90&prime;50&Prime; и T&ndash;t<sub>0</sub>
         = 10&Prime;</p>
      <p class="txt_description_general">Действительная угловая величина t деления верньера может отличаться от
         конструктивной t<sub>0</sub>. Если n+1 делениям верньера соответствует дуга лимба, равная T<sub>n</sub> +
         &delta;, то будем иметь:</p>
      <p class="formula_description">$$t = t_0+{&delta; \over n+1}$$</p>
      <p class="txt_description_general">В отсчет по такому верньеру вводится поправка, равная:</p>
      <p class="formula_description">$${&delta; \over n+1}k$$</p>
      <p class="txt_description_general">Величину &delta; определяют из исследований, совмещая при каждой установке
         верньера его нулевой штрих со штрихом лимба и производя затем отсчеты по другому концу дуги верньера, условно
         принимая его (n + 1)&ndash;й штрих за нулевой. Если, например, &delta; = + 12 &Prime;, то поправка на одну
         минуту отсчета по верньеру, указанному выше в примере, будет равна:</p>
      <p class="formula_description">$$+{12 \over 60}*6$$</p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
   <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   <script type="text/javascript" src="/js/slajder.js"></script>
</body>

</html>