<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Аддитаменты S и T логарифмические величины, используемые в операциях с логарифмами синусов и тангенсов малых углов">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/logo_geograce.svg">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">

   <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
   <title>Аддитаменты</title>
</head>

<body>
   <?php
      require "../../module_php/menu_general.php";
   ?>

   <div class="description_general">
      <h1 class="h1_description_general">Аддитаменты</h1>
      <p class="txt_description_general"><strong>Аддитаменты</strong> S и T &ndash; логарифмические величины,
         используемые в операциях с логарифмами синусов и тангенсов малых углов (от 0 до 5&deg;). Величины S и T
         помещаются в логарифмических таблицах, обычно внизу каждой страницы логарифмов чисел. При малом угле <em>X</em>
         значения <em>lg sinX</em> и <em>lg tgX</em> удобно находить по формулам</p>

      <p class="formula_description">$$lg\;SinX=lgX''+S$$</p>
      <p class="formula_description">$$lg\;TgX=lgX''+T$$</p>

      <p class="txt_description_general">где х&Prime; &ndash; величина угла X, выраженная в секундах градусной меры. Для
         перевода величины угла в секунды удобно воспользоваться переводами округленных значений углов, помещаемыми
         рядом с величинами S и T.</p>
      <p class="txt_description_general">Обратная задача, т. е. подыскивание малого угла <em>X</em> по данному <em>lg
            sinX</em> или <em>lg tgX</em>, выполняется по формулам</p>

      <p class="formula_description">$$lgX''=lg\;SinX-S$$</p>
      <p class="formula_description">$$lgX''=lg\;TgX-T$$</p>
      
      <p class="txt_description_general">Величины S и T в обратной задаче выбирают по предварительно найденному
         приближенному значению угла X.</p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>