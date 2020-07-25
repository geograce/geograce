<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Прямая геодезическая задача смысл ее решения состоит в определении координат второй точки по имеющимся координатам первой точки, дирекционному углу и расстоянию между этими точками. Решение прямой геодезической задачи удобнее производить в электронных таблицах">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap"
      rel="stylesheet">
   <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
   <title>Прямая геодезическая задача и решение задачи.</title>
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
      <h1 class="h1_description_general">Прямая геодезическая задача</h1>
      <p class="txt_description_general"><strong>ПРЯМАЯ ГЕОДЕЗИЧЕСКАЯ ЗАДАЧА.</strong> Сущность ее решения
         состоит в определении координат второй точки по имеющимся координатам первой точки, дирекционному углу и
         расстоянию между этими точками. Решение прямой геодезической задачи удобнее производить в электронных таблицах,
         а в основу расчета задачи лежат таблицы натуральных значений тригонометрических функций или таблицы логарифмов
         чисел и тригонометрических функций.</p>
      <h2 class="h2_description_general">Пример расчета прямой геодезической задачи</h2>
      <div class="header_table_pgz">
         <p class="length_number_pgz">Порядок действий</p>
         <p class="length_formula_pgz">Формулы и обозначения</p>
         <p class="length_data_pgz">Данные</p>
         <p class="length_footnote_pgz">Примечание</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_number_pgz">1</p>
         <p class="length_formula_pgz">&alpha;<sub>1-2</sub></p>
         <p class="length_data_pgz">91&deg;47&prime;22&Prime;</p>
         <p class="length_footnote_pgz2">Исходный дирекционный угол стороны 1-2</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_number_pgz">2</p>
         <p class="length_formula_pgz">X<sub>1</sub></p>
         <p class="length_data_pgz">6630270.57</p>
         <p class="length_footnote_pgz2">Известная кооридината X первой точки</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_number_pgz">3</p>
         <p class="length_formula_pgz">Y<sub>1</sub></p>
         <p class="length_data_pgz">89418.64</p>
         <p class="length_footnote_pgz2">Известная кооридината Y первой точки</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_number_pgz">4</p>
         <p class="length_formula_pgz">S</p>
         <p class="length_data_pgz">4127.89</p>
         <p class="length_footnote_pgz2">Известное расстояние между точками 1 и 2</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_number_pgz">5</p>
         <p class="length_formula_pgz">sin&alpha;<sub>1-2</sub></p>
         <p class="length_data_pgz">0.999512</p>
         <p class="length_footnote_pgz2">Находим синус дирекционного угла &alpha;<sub>1-2</sub></p>
      </div>
      <div class="data_table_pgz">
         <p class="length_number_pgz">6</p>
         <p class="length_formula_pgz">cos&alpha;<sub>1-2</sub></p>
         <p class="length_data_pgz">&ndash;0.031227</p>
         <p class="length_footnote_pgz2">Находим косинус дирекционного угла &alpha;<sub>1-2</sub></p>
      </div>
      <div class="data_table_pgz">
         <p class="length_number_pgz">7</p>
         <p class="length_formula_pgz">&Delta;X=S*cos&alpha;<sub>1-2</sub></p>
         <p class="length_data_pgz">&ndash;128.90</p>
         <p class="length_footnote_pgz2">Выч. приращение коорд. по оси X путем умножения расстояния (S) на
            косинус дир.угла</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_number_pgz">8</p>
         <p class="length_formula_pgz">&Delta;Y=S*sin&alpha;<sub>1-2</sub></p>
         <p class="length_data_pgz">+4125.88</p>
         <p class="length_footnote_pgz2">Выч. приращение коорд. по оси Y путем умножения расстояния (S) на
            синус дир.угла</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_number_pgz">9</p>
         <p class="length_formula_pgz">X<sub>2</sub>=X<sub>1</sub>+&Delta;X</p>
         <p class="length_data_pgz" style="font-weight: 500;">6630141.67</p>
         <p class="length_footnote_pgz2">Выч. неизвестную коорд. X<sub>2</sub> путем сложения коорд.
            X<sub>1</sub> и приращения &Delta;X</p>
      </div>
      <div class="data_table_pgz" style="border-bottom: 1px solid black; margin-bottom: 20px;">
         <p class="length_number_pgz">10</p>
         <p class="length_formula_pgz">Y<sub>2</sub>=Y<sub>1</sub>+&Delta;Y</p>
         <p class="length_data_pgz" style="font-weight: 500;">93544.52</p>
         <p class="length_footnote_pgz2">Выч. неизвестную коорд. Y<sub>2</sub> путем сложения коорд.
            Y<sub>1</sub> и приращения &Delta;Y</p>
      </div>
      <p class="txt_description_general">Если при расчете прямой геодезической задачи необходимо определить румб, то
         удобнее всего воспользоваться таблицей, указанной ниже. Румб можно определить двумя способами, по знакам
         приращения координат &Delta;X и &Delta;Y, а также по дирекционному углу. Для нашего примера знаки приращения
         координат равны -&Delta;X и +&Delta;Y, значит расчет будет производиться по формуле r = 180&deg; &ndash; &alpha;
         = 180&deg; &ndash; 91&deg;47&prime;22&Prime; = 88&deg;12&prime;38&Prime;ЮВ.
      </p>
      <div class="header_table_pgz">
         <p class="length_dxdy_rumb">&Delta;X</p>
         <p class="length_dxdy_rumb">&Delta;Y</p>
         <p class="length_dir_rumb">Значение дир. угла</p>
         <p class="length_number_fourth_rumb">Номер четверти</p>
         <p class="length_formula_rumb">Формула расчета румба</p>
         <p class="length_name_rumb">Направление румба</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_dxdy_rumb">+</p>
         <p class="length_dxdy_rumb">+</p>
         <p class="length_dir_rumb">0&deg; &ndash; 90&deg;</p>
         <p class="length_number_fourth_rumb">I</p>
         <p class="length_formula_rumb">r = &alpha;</p>
         <p class="length_name_rumb">СВ</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_dxdy_rumb">&ndash;</p>
         <p class="length_dxdy_rumb">+</p>
         <p class="length_dir_rumb">90&deg; &ndash; 180&deg;</p>
         <p class="length_number_fourth_rumb">II</p>
         <p class="length_formula_rumb">r = 180&deg; &ndash; &alpha;</p>
         <p class="length_name_rumb">ЮВ</p>
      </div>
      <div class="data_table_pgz">
         <p class="length_dxdy_rumb">&ndash;</p>
         <p class="length_dxdy_rumb">&ndash;</p>
         <p class="length_dir_rumb">180&deg; &ndash; 270&deg;</p>
         <p class="length_number_fourth_rumb">III</p>
         <p class="length_formula_rumb">r = &alpha; &ndash; 180&deg;</p>
         <p class="length_name_rumb">ЮЗ</p>
      </div>
      <div class="data_table_pgz" style="border-bottom: 1px solid black; margin-bottom: 20px;">
         <p class="length_dxdy_rumb">+</p>
         <p class="length_dxdy_rumb">&ndash;</p>
         <p class="length_dir_rumb">270&deg; &ndash; 360&deg;</p>
         <p class="length_number_fourth_rumb">IV</p>
         <p class="length_formula_rumb">r = 360&deg; &ndash; &alpha;</p>
         <p class="length_name_rumb">СЗ</p>
      </div>
      <p class="txt_description_general">Так как &Delta;X и &Delta;Y являются катетами треугольника, то контролем
         правильности расчета прямой геодезической задачи будет теорема Пифагора.</p>
      <p class="formula_description">$$S = \sqrt{&Delta;X^2+&Delta;Y^2}=$$</p>
      <p class="formula_description">$$= \sqrt{-128.90^2+4125.88^2}=4127.89$$</p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>