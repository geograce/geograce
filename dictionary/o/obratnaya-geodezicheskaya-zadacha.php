<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Обратная геодезическая задача смысл ее решения заключается в расчете дирекционного угла направления и расстояния между двумя пунктами, у которых известны координаты. Решение обратной геодезической задачи удобнее вычислять в электронных таблицах.">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap"
      rel="stylesheet">
   <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
   <title>Обратная геодезическая задача и решение задачи.</title>
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
      <h1 class="h1_description_general">Обратная геодезическая задача</h1>
      <p class="txt_description_general"><strong>ОБРАТНАЯ ГЕОДЕЗИЧЕСКАЯ ЗАДАЧА.</strong> Сущность ее решения заключается
         в вычислении дирекционного угла направления и расстояния между двумя пунктами, у которых известны координаты.
         Решение обратной геодезической задачи удобнее вычислять в электронных таблицах, а в основу расчета задачи лежат
         таблицы натуральных значений тригонометрических функций или таблицы логарифмов чисел и тригонометрических
         функций.</p>
      <h2 class="h2_description_general">Пример расчета обратной геодезической задачи</h2>
      <div class="header_table_pgz">
         <p class="length_number_pgz">Порядок действий</p>
         <p class="length_formula_pgz">Формулы и обозначения</p>
         <p class="length_data_pgz">Данные</p>
         <p class="length_footnote_pgz">Примечание</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_number_pgz">1</p>
         <p class="length_formula_pgz">X<sub>1</sub></p>
         <p class="length_data_pgz">1739.62</p>
         <p class="length_footnote_pgz2">Известная кооридината X первой точки</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_number_pgz">2</p>
         <p class="length_formula_pgz">Y<sub>1</sub></p>
         <p class="length_data_pgz">2983.82</p>
         <p class="length_footnote_pgz2">Известная кооридината Y первой точки</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_number_pgz">3</p>
         <p class="length_formula_pgz">X<sub>2</sub></p>
         <p class="length_data_pgz">1201.51</p>
         <p class="length_footnote_pgz2">Известная кооридината X второй точки</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_number_pgz">4</p>
         <p class="length_formula_pgz">Y<sub>2</sub></p>
         <p class="length_data_pgz">1036.53</p>
         <p class="length_footnote_pgz2">Известная кооридината Y второй точки</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_number_pgz">5</p>
         <p class="length_formula_pgz">&Delta;X=X<sub>2</sub>&ndash;X<sub>1</sub></p>
         <p class="length_data_pgz">&ndash;538.11</p>
         <p class="length_footnote_pgz2">Выч. приращение коорд. по оси X путем разностей двух коорд.
            X<sub>2</sub>&ndash;X<sub>1</sub></p>
      </div>
      <div class="data_table_pgz">
         <p class="length_number_pgz">6</p>
         <p class="length_formula_pgz">&Delta;Y=Y<sub>2</sub>&ndash;Y<sub>1</sub></p>
         <p class="length_data_pgz">&ndash;1947.29</p>
         <p class="length_footnote_pgz2">Выч. приращение коорд. по оси Y путем разностей двух коорд.
            Y<sub>2</sub>&ndash;Y<sub>1</sub></p>
      </div>
      <div class="data_table_pgz">
         <p class="length_number_pgz">7</p>
         <p class="length_formula_pgz">r=arctg&alpha;|&Delta;Y/&Delta;X|</p>
         <p class="length_data_pgz">74&deg;33&prime;9&Prime;ЮЗ</p>
         <p class="length_footnote_pgz2">Выч. румб путем нахождения арктангенса из отношения &Delta;X к &Delta;Y.</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_number_pgz">8</p>
         <p class="length_formula_pgz">&alpha;<sub>1-2</sub></p>
         <p class="length_data_pgz">254&deg;33&prime;9&Prime;</p>
         <p class="length_footnote_pgz2">Определяем дир. угол по формулам указанных в таблице (см. ниже).</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_number_pgz">9</p>
         <p class="length_formula_pgz">S=&Delta;X/cos&alpha;<sub>1-2</sub></p>
         <p class="length_data_pgz">2020.27</p>
         <p class="length_footnote_pgz2">Вычисляем расстояние путем деления &Delta;X на cos&alpha;<sub>1-2</sub></p>
      </div>
      <div class="data_table_pgz" style="border-bottom: 1px solid black; margin-bottom: 20px;">
         <p class="length_number_pgz">10</p>
         <p class="length_formula_pgz">S=&Delta;Y/sin&alpha;<sub>1-2</sub></p>
         <p class="length_data_pgz">2020.27</p>
         <p class="length_footnote_pgz2">Вычисляем расстояние путем деления &Delta;Y на sin&alpha;<sub>1-2</sub></p>
      </div>
      <p class="txt_description_general">При расчете обратной геодезической задачи в действии №8 необходимо найти
         дирекционный угол стороны, для нахождения удобнее всего воспользоваться таблицей, указанной ниже. Дирекционный
         угол определяется по знакам приращения координат &Delta;X и &Delta;Y. Для нашего примера знаки приращения
         координат равны &ndash;&Delta;X и &ndash;&Delta;Y, значит расчет будет производиться по формуле
         &alpha;=180&deg;+r= 180&deg;+74&deg;33&prime;09&Prime;=254&deg;33&prime;09&Prime;</p>
      <div class="header_table_pgz">
         <p class="length_dxdy_rumb">&Delta;X</p>
         <p class="length_dxdy_rumb">&Delta;Y</p>
         <p class="length_number_fourth_rumb">Номер четверти</p>
         <p class="length_formula_rumb">Формула расчета дир.угла</p>
         <p class="length_name_rumb">Направление румба</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_dxdy_rumb">+</p>
         <p class="length_dxdy_rumb">+</p>
         <p class="length_number_fourth_rumb">I</p>
         <p class="length_formula_rumb">&alpha;=r</p>
         <p class="length_name_rumb">СВ</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_dxdy_rumb">&ndash;</p>
         <p class="length_dxdy_rumb">+</p>
         <p class="length_number_fourth_rumb">II</p>
         <p class="length_formula_rumb">&alpha; = 180&deg; &ndash; r</p>
         <p class="length_name_rumb">ЮВ</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_dxdy_rumb">&ndash;</p>
         <p class="length_dxdy_rumb">&ndash;</p>
         <p class="length_number_fourth_rumb">III</p>
         <p class="length_formula_rumb">&alpha; = 180&deg; + r</p>
         <p class="length_name_rumb">ЮЗ</p>
      </div>
      <div class="data_table_pgz" style="border-bottom: 1px solid black; margin-bottom: 20px;">
         <p class="length_dxdy_rumb">+</p>
         <p class="length_dxdy_rumb">&ndash;</p>
         <p class="length_number_fourth_rumb">IV</p>
         <p class="length_formula_rumb">&alpha; = 360&deg; &ndash; r</p>
         <p class="length_name_rumb">СЗ</p>
      </div>
      <p class="txt_description_general">Так как &Delta;X и &Delta;Y являются катетами треугольника, то контролем
         правильности расчета обратной геодезической задачи будет теорема Пифагора.</p>
      <p class="formula_description">$$S = \sqrt{&Delta;X^2+&Delta;Y^2}=$$</p>
      <p class="formula_description">$$= \sqrt{-538.11^2+(-1947.29^2)}=2020.27$$</p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>