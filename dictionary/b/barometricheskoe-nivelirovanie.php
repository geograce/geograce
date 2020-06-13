<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Барометрическое нивелирование определение разностей высот
            точек путем измерения атмосферных давлений в этих точках при помощи барометров.">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/logo_geograce.svg">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
   <title>Барометрическое нивелирование</title>
</head>

<body>
   <?php
      require "../../module_php/menu_general.php";
   ?>

   <div class="description_general">
      <h1 class="h1_description_general">Барометрическое нивелирование</h1>
      <p class="txt_description_general"><strong>Барометрическое нивелирование</strong> &ndash; определение разностей
         высот
         точек путем измерения атмосферных давлений в этих точках при помощи барометров. Если в точках 1 и 2 измерить
         атмосферное давление соответственно B<sub>1</sub> и В<sub>2</sub>, а также температуру воздуха t<sub>1</sub>
         и t<sub>2</sub>, то разность высот H<sub>2</sub>&ndash;H<sub>1</sub> этих точек может быть найдена по
         следующей так называемой приближенной барометрической формуле:</p>
      <p class="formula_description">$$H_2-H_1=K_0(1+&alpha;t_{ср} )(lgB_1-lgB_2) \,\,\,\,\,\,(a)$$</p>
      <p class="txt_description_general">где:</p>
      <p class="txt_description_general">K<sub>0</sub> = 18470 &ndash; по определению М.В. Певцова;</p>
      <p class="txt_description_general">&alpha; = 1/273;</p>
      <p class="txt_description_general">t<sub>ср</sub> = 1/2*(t<sub>1</sub> + t<sub>2</sub>);</p>
      <p class="txt_description_general">lgB<sub>1</sub> и lgB<sub>2</sub> &ndash; десятичные логарифмы измеренных
         значений атмосферного давления, выраженного в мм рт. ст.</p>
      <p class="txt_description_general">При использовании таблиц барических ступеней высот формулу (а) представляют в
         виде:</p>
      <p class="formula_description">$$H_2-H_1= {k\over B_{ср}}(1+&alpha;t_{ср} )(B_1-B_2) \,\,\,\,\,\,(б)$$</p>
      <p class="txt_description_general">где:</p>
      <p class="txt_description_general">k = K<sub>0</sub>&mu; = 18470 * 0,4343 &asymp; 8000</p>

      <p class="txt_description_general">B<sub>ср</sub> = 1/2*(B<sub>1</sub> + B<sub>2</sub>);</p>
      <p class="txt_description_general">k/B<sub>ср</sub>(1 + &alpha;t<sub>ср</sub>) называется барической ступенью
         высоты.</p>
      <br>
      <p class="txt_description_general">Формулы (а) и (б) справедливы для невозмущенного состояния атмосферы, т. е.
         при условии, что изобарические поверхности параллельны уровенным поверхностям и что атмосферное давление в
         течение времени перехода с одной точки на другую остается в этих точках неизменным; практически же при
         условии, что изменение атмосферного давления и температуры при нивелировании происходит пропорционально
         времени, температурный градиент остается неизменным. Существует несколько способов барометрического
         нивелирования, основанных на этом условии.</p>
      <br>
      <p class="txt_description_general"><strong>Способ соответствующих наблюдений</strong> осуществляется двумя
         наблюдателями. Сверив в начальной точке показания барометров, термометров и часов, один наблюдатель остается
         на ней, производит и записывает отсчеты барометра, термометра и часов через равные промежутки времени,
         например через 30 мин. Второй наблюдатель производит на определяемых точках в моменты измерений такие же
         отсчеты и записи. Для вычисления разностей высот записанные первым наблюдателем показания барометра и
         термометра интерполируются на моменты отсчетов второго.</p>

      <p class="txt_description_general">При нивелировании площадей наблюдения производятся в условленные сроки на
         станции, выбранной в середине района, от которой прокладываются маршруты до определяемых точек, с
         возвращением на станцию для контроля показаний приборов. Более точные способы нивелирования учитывают
         наклоны (возмущения) изобарических поверхностей и изменения температурного градиента.</p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>