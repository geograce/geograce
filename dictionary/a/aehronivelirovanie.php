<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Аэронивелирование способ определения высот точек местности с помощью радиовысотомера и статоскопа при производстве аэрофотосъемки.">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/logo_geograce.svg">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
   <title>Аэронивелирование</title>
</head>

<body>
   <?php
      require "../../module_php/menu_general.php";
   ?>
   <div class="description_general">
      <h1 class="h1_description_general">Аэронивелирование</h1>
      <p class="txt_description_general"><strong>Аэронивелирование</strong> &ndash; способ определения высот точек
         местности с
         помощью радиовысотомера и статоскопа при производстве аэрофотосъемки. По показаниям радиовысотомера находят
         высоты H<sub>K</sub> (рис. 1) точек фотографирования S<sub>K</sub> над точками земной поверхности
         M<sub>K</sub>, а по показаниям статоскопа &ndash; превышения h<sub>K</sub> точек фотографирования над некоторой
         барической поверхностью BB. Зная высоту Н'<sub>1</sub> начальной точки M<sub>1</sub> аэропивелирного маршрута
         M<sub>1</sub> &ndash; M<sub>n</sub> , находят высоту H'<sub>K</sub> любой его точки M<sub>K</sub> по следующей
         формуле (справедливой при условии, что барическая поверхность BB параллельна отсчетной уровенной поверхности
         VV):</p>
      <p class="formula_description">$$H'_K=H'_1+(H_1-H_K)-(h_1-h_K)$$</p>
      <figure class="figure_img_description_general" style="max-width: 450px;">
         <img class="img_description_general" style="max-width: 400px;" src="/img/dictionary/a/aeronivelirovaniye.svg"
            alt="Аэронивелирование">
         <figcaption class="figcaption_general">Рис. 1 Схема аэронивелирования</figcaption>
      </figure>
      <p class="txt_description_general">Высоты начальной точки M<sub>1</sub> и конечной M<sub>n</sub> определяются
         геодезическим способом. Разность между вычисленной и геодезической высотой конечной точки маршрута называется
         его невязкой, обусловленной наклоном барической поверхности и ошибками измерений. Невязку устраняют введением
         поправок в вычисленные значения высот точек пропорционально их удалению от начальной. Точность определения
         высот зависит от свойств подстилающей поверхности и рельефа местности и колеблется в пределах 1,5&ndash;5 м.
         Высоты
         характерных точек местности, необходимые для рисовки рельефа, определяются на фотограмметрических приборах
         относительно точек, полученных аэронивелированием. В горных и закрытых районах аэронивелирование не
         обеспечивает необходимой точности и поэтому не применяется.</p>

   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>