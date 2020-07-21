<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Вычисление сторон сети треугольников. Решение треугольников проводят как по таблицам натуральных значений тригонометрических функций, так и по таблицам логарифмов.">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,500,700&display=swap" rel="stylesheet">
   <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
   <title>Вычисление сторон треугольников. Расчет сети треугольников.</title>
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

   <article class="main_box_article">
      <h1 class="h1_article">Вычисление сторон треугольников</h1>
      <p class="txt_article">При развитии аналитических сетей, в которых измеряют только углы, одним из процессов
         вычислительных работ является вычисление сторон треугольников сети (сокращенно этот процесс называют решением
         треугольников).</p>
      <p class="txt_article">Решение треугольников проводят как по таблицам натуральных значений тригонометрических
         функций, так и по таблицам логарифмов. Способ вычислений выбирают в зависимости от вида вычислений. Если в
         дальнейших вычислениях участвуют логарифмы сторон, треугольники решают по таблицам логарифмов, если необходимы
         натуральные значения сторон, то рационально вычисления выполнять по таблицам натуральных значений
         тригонометрических функций. С появлением электронных таблиц вычисления быстрее и удобнее производить в них, тут
         же будет рассказываться об основах вычисления сторон треугольников по пятизначным таблицам логарифмов и по
         шестизначным таблицам натуральных значений. Решение треугольников будем производить в определенном формуляре,
         где значение сторон будут записываться у тех углов, против которых они лежат.</p>
      <figure class="figure_img_article" style="max-width: 300px;">
         <img class="img_article" src="/img/blog/vychislenie-storon-treugolnikov/skhema-seti-treugolnikov.svg"
            alt="Схема сети треугольников">
         <figcaption class="figcaption_article">Рис. 1 Схема сети</figcaption>
      </figure>
      <br>
      <p class="txt_article">Вычисления производят в следующей последовательности:</p>
      <p class="txt_article" style="margin-bottom: 0;">1. Составляют схему сети (рис. 1)</p>
      <p class="txt_article" style="margin-bottom: 0;">2. В формуляре (табл. 1) вычисления сторон выписывают подряд все
         треугольники: в графу 1 &ndash; номер треугольника, в графу 2 &ndash; названия вершин треугольника и в графу 3
         &ndash; измеренные углы.</p>
      <p class="txt_article" style="margin-bottom: 0;">3. Подсчитывают сумму углов в каждом треугольнике и вычисляют их
         невязки по формуле W&ndash;&sum;B&ndash;180&deg;, где B &ndash; измеренные углы.</p>
      <p class="txt_article" style="margin-bottom: 0;">4. В графу 4 записывают поправки в измеренные углы, равные 1/3
         невязки треугольника (W) с обратным знаком, т.е. &ndash;W/3</p>
      <p class="txt_article" style="margin-bottom: 0;">5. В графу 5 записывают углы, исправленные поправкой &ndash;W/3.
         Контролем вычислений служит сумма углов в треугольнике, которая после исправления углов должна быть
         180&deg;00&prime;00&Prime;.</p>
      <p class="txt_article" style="margin-bottom: 0;">6. Затем в графу 6 выписывают логарифмы синусов или синусы
         исправленных углов в зависимости от того, по каким таблицам ведут вычисления.</p>
      <p class="txt_article" style="margin-bottom: 0;">7. В графу 7 записывают логарифмы твердых сторон треугольников
         или их натуральные значения в метрах. При этом придерживаются следующего правила: каждую сторону записывают
         против того угла, против которого она лежит. Значения твердых сторон необходимо подчеркнуть или записать
         красными чернилами.</p>
      <p class="txt_article">8. Далее приступают к решению треугольников по формулам,
         полученным в соответствии с теоремой синусов (схема треугольника к формулам изображена на рис. 2):</p>
      <p class="formula_blog">$$a = {b \over sinB}*sinA={c \over sinC}*sinA\,;$$</p>
      <p class="formula_blog">$$b = {a \over sinA}*sinB={c \over sinC}*sinB\,;$$</p>
      <p class="formula_blog">$$c = {a \over sinA}*sinC={b \over sinB}*sinC\,;$$</p>
      <figure class="figure_img_article" style="max-width: 200px;">
         <img class="img_article" src="/img/blog/vychislenie-storon-treugolnikov/skhema-treugolnika.svg"
            alt="Схема треугольника">
         <figcaption class="figcaption_article">Рис. 2 Схема треугольника</figcaption>
      </figure>
      <br>
      <p class="txt_article">Для вычислений треугольников по таблицам логарифмам используют следующие формулы:</p>
      <p class="formula_blog">$$lg\,a=lg\,b-lg\,sinB+lg\,sinA$$</p>
      <p class="formula_blog" style="margin-bottom: 30px;">$$lg\,a=lg\,c-lg\,sinC+lg\,sinA$$</p>
      <p class="formula_blog">$$lg\,b=lg\,a-lg\,sinA+lg\,sinB$$</p>
      <p class="formula_blog" style="margin-bottom: 30px;">$$lg\,b=lg\,c-lg\,sinC+lg\,sinB$$</p>
      <p class="formula_blog">$$lg\,c=lg\,a-lg\,sinA+lg\,sinC$$</p>
      <p class="formula_blog">$$lg\,c=lg\,b-lg\,sinB+lg\,sinC$$</p>
      <p class="txt_article">Давайте рассмотрим прилагаемую схему решения (рис.1 треугольник 1).</p>
      <p class="txt_article" style="text-align: center;"><em>Вычисление по таблицам натуральных значений</em></p>
      <p class="txt_article" style="margin-bottom: 0;">
         lgS<sub>Покровское&ndash;Казаково</sub>=4127.89/ 0.960947*0.909524=3907.00 м,</p>
      <p class="txt_article">lgS<sub>Покровское&ndash;Заозерный</sub>=4127.89/ 0.960947*0.651113=2796.95 м.</p>
      <p class="txt_article">Если какой&ndash;то треугольник не имеет твердой стороны, то для расчета его берется
         смежная сторона соседнего треугольника, который был рассчитан ранее (см. треугольники 2 и 3).Полный расчет
         представлен в таблице 1.</p>
      <p class="txt_article" style="text-align: right;"><em>Таблица 1</em></p>
      <div class="header_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov" style="font-weight: 500;">Номер тр-ка</p>
         <p class="length_name_vychislenie_treugolnikov" style="text-align: center;">Названия вершин</p>
         <p class="length_dimension_vychislenie_treugolnikov">Измеренные углы &beta;</p>
         <p class="length_w3_vychislenie_treugolnikov">&ndash;(W/3)</p>
         <p class="length_fixes_vychislenie_treugolnikov">Исправленные углы</p>
         <p class="length_sinus_vychislenie_treugolnikov">Синусы испр. углов</p>
         <p class="length_side_vychislenie_treugolnikov">Длины сторон в м</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov"
         style="color: rgb(122, 122, 122); border-bottom: 1px solid black;">
         <p class="length_number_vychislenie_treugolnikov" style="font-weight: normal;">1</p>
         <p class="length_name_vychislenie_treugolnikov" style="text-align: center;">2</p>
         <p class="length_dimension_vychislenie_treugolnikov">3</p>
         <p class="length_w3_vychislenie_treugolnikov">4</p>
         <p class="length_fixes_vychislenie_treugolnikov">5</p>
         <p class="length_sinus_vychislenie_treugolnikov">6</p>
         <p class="length_side_vychislenie_treugolnikov">7</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Покровское</p>
         <p class="length_dimension_vychislenie_treugolnikov">73&deg;56&prime;02&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">+3</p>
         <p class="length_fixes_vychislenie_treugolnikov">73&deg;56&prime;05&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">0.960947</p>
         <p class="length_side_vychislenie_treugolnikov" style="border-bottom: 1px solid black;">4127.89</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov">1</p>
         <p class="length_name_vychislenie_treugolnikov">Заозерный</p>
         <p class="length_dimension_vychislenie_treugolnikov">65&deg;26&prime;20&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">+3</p>
         <p class="length_fixes_vychislenie_treugolnikov">65&deg;26&prime;23&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">0.909524</p>
         <p class="length_side_vychislenie_treugolnikov">3907.00</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Казаково</p>
         <p class="length_dimension_vychislenie_treugolnikov">40&deg;37&prime;30&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">+2</p>
         <p class="length_fixes_vychislenie_treugolnikov">40&deg;37&prime;32&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">0.651113</p>
         <p class="length_side_vychislenie_treugolnikov">2796.95</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov" style="border-bottom: 1px solid black;">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">W=&ndash;8&Prime;</p>
         <p class="length_dimension_vychislenie_treugolnikov" style="font-weight: 500;">179&deg;59&prime;52&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov" style="font-weight: 500;">+8</p>
         <p class="length_fixes_vychislenie_treugolnikov" style="font-weight: 500;">180&deg;00&prime;00&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov"></p>
         <p class="length_side_vychislenie_treugolnikov"></p>
      </div>

      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Покровское</p>
         <p class="length_dimension_vychislenie_treugolnikov">106&deg;39&prime;20&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">-3</p>
         <p class="length_fixes_vychislenie_treugolnikov">106&deg;39&prime;17&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">0.958049</p>
         <p class="length_side_vychislenie_treugolnikov" style="border-bottom: 1px solid black;">6440.65</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov">2</p>
         <p class="length_name_vychislenie_treugolnikov">Трудный</p>
         <p class="length_dimension_vychislenie_treugolnikov">24&deg;35&prime;07&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">-3</p>
         <p class="length_fixes_vychislenie_treugolnikov">24&deg;35&prime;04&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">0.416034</p>
         <p class="length_side_vychislenie_treugolnikov">2796.86</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Заозерный</p>
         <p class="length_dimension_vychislenie_treugolnikov">48&deg;45&prime;41&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">-2</p>
         <p class="length_fixes_vychislenie_treugolnikov">48&deg;45&prime;39&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">0.751964</p>
         <p class="length_side_vychislenie_treugolnikov">5055.21</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov" style="border-bottom: 1px solid black;">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">W=&ndash;8&Prime;</p>
         <p class="length_dimension_vychislenie_treugolnikov" style="font-weight: 500;">180&deg;00&prime;08&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov" style="font-weight: 500;">-8</p>
         <p class="length_fixes_vychislenie_treugolnikov" style="font-weight: 500;">180&deg;00&prime;00&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov"></p>
         <p class="length_side_vychislenie_treugolnikov"></p>
      </div>

      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Знаменка</p>
         <p class="length_dimension_vychislenie_treugolnikov">79&deg;14&prime;28&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">-1</p>
         <p class="length_fixes_vychislenie_treugolnikov">79&deg;14&prime;27&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">0.982421</p>
         <p class="length_side_vychislenie_treugolnikov">5055.21</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov">3</p>
         <p class="length_name_vychislenie_treugolnikov">Трудный</p>
         <p class="length_dimension_vychislenie_treugolnikov">52&deg;50&prime;57&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">-1</p>
         <p class="length_fixes_vychislenie_treugolnikov">52&deg;50&prime;56&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">0.797046</p>
         <p class="length_side_vychislenie_treugolnikov">4101.33</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Покровское</p>
         <p class="length_dimension_vychislenie_treugolnikov">47&deg;54&prime;37&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">0</p>
         <p class="length_fixes_vychislenie_treugolnikov">47&deg;54&prime;37&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">0.742096</p>
         <p class="length_side_vychislenie_treugolnikov">3818.58</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov" style="border-bottom: 1px solid black;">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">W=+8&Prime;</p>
         <p class="length_dimension_vychislenie_treugolnikov" style="font-weight: 500;">180&deg;00&prime;02&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov" style="font-weight: 500;">-2</p>
         <p class="length_fixes_vychislenie_treugolnikov" style="font-weight: 500;">180&deg;00&prime;00&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov"></p>
         <p class="length_side_vychislenie_treugolnikov"></p>
      </div>

      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Знаменка</p>
         <p class="length_dimension_vychislenie_treugolnikov">51&deg;02&prime;15&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">-5</p>
         <p class="length_fixes_vychislenie_treugolnikov">51&deg;02&prime;10&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">0.777542</p>
         <p class="length_side_vychislenie_treugolnikov" style="border-bottom: 1px solid black;">3715.17</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov">4</p>
         <p class="length_name_vychislenie_treugolnikov">Трудный</p>
         <p class="length_dimension_vychislenie_treugolnikov">75&deg;55&prime;09&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">-5</p>
         <p class="length_fixes_vychislenie_treugolnikov">75&deg;55&prime;04&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">0.969948</p>
         <p class="length_side_vychislenie_treugolnikov">4634.50</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Талый</p>
         <p class="length_dimension_vychislenie_treugolnikov">53&deg;02&prime;52&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">-6</p>
         <p class="length_fixes_vychislenie_treugolnikov">53&deg;02&prime;46&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">0.799120</p>
         <p class="length_side_vychislenie_treugolnikov">3818.27</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov" style="border-bottom: 1px solid black;">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">W=+16&Prime;</p>
         <p class="length_dimension_vychislenie_treugolnikov" style="font-weight: 500;">180&deg;00&prime;16&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov" style="font-weight: 500;">-16</p>
         <p class="length_fixes_vychislenie_treugolnikov" style="font-weight: 500;">180&deg;00&prime;00&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov"></p>
         <p class="length_side_vychislenie_treugolnikov"></p>
      </div>

      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Знаменка</p>
         <p class="length_dimension_vychislenie_treugolnikov">129&deg;25&prime;04&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">+1</p>
         <p class="length_fixes_vychislenie_treugolnikov">129&deg;25&prime;05&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">0.772534</p>
         <p class="length_side_vychislenie_treugolnikov" style="border-bottom: 1px solid black;">7241.00</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov">5</p>
         <p class="length_name_vychislenie_treugolnikov">Талый</p>
         <p class="length_dimension_vychislenie_treugolnikov">20&deg;56&prime;53&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">+1</p>
         <p class="length_fixes_vychislenie_treugolnikov">20&deg;56&prime;54&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">0.357526</p>
         <p class="length_side_vychislenie_treugolnikov">3351.11</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Болотный</p>
         <p class="length_dimension_vychislenie_treugolnikov">29&deg;38&prime;00&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">+1</p>
         <p class="length_fixes_vychislenie_treugolnikov">29&deg;38&prime;01&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">0.494452</p>
         <p class="length_side_vychislenie_treugolnikov">4634.52</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov" style="border-bottom: 1px solid black; margin-bottom: 30px;">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">W=-3&Prime;</p>
         <p class="length_dimension_vychislenie_treugolnikov" style="font-weight: 500;">179&deg;59&prime;57&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov" style="font-weight: 500;">+3</p>
         <p class="length_fixes_vychislenie_treugolnikov" style="font-weight: 500;">180&deg;00&prime;00&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov"></p>
         <p class="length_side_vychislenie_treugolnikov"></p>
      </div>
      <p class="txt_article" style="text-align: center;"><em>Вычисление по таблицам логарифмов</em></p>
      <p class="txt_article" style="margin-bottom: 0;">
         lgS<sub>Покровское&ndash;Казаково</sub>=3.61573&ndash;9.98270+9.95881=3.59184,</p>
      <p class="txt_article">lgS<sub>Покровское&ndash;Заозерный</sub>=3.61573&ndash;9.98270+9.81365=3.44668.</p>
      <p class="txt_article">Полный расчет по таблицам логарифмов представлен в таблице 2.</p>
      <p class="txt_article" style="text-align: right;"><em>Таблица 2</em></p>

      <div class="header_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov" style="font-weight: 500;">Номер тр-ка</p>
         <p class="length_name_vychislenie_treugolnikov" style="text-align: center;">Названия вершин</p>
         <p class="length_dimension_vychislenie_treugolnikov">Измеренные углы &beta;</p>
         <p class="length_w3_vychislenie_treugolnikov">&ndash;(W/3)</p>
         <p class="length_fixes_vychislenie_treugolnikov">Исправленные углы</p>
         <p class="length_sinus_vychislenie_treugolnikov">Лог. синусов испр. углов</p>
         <p class="length_side_vychislenie_treugolnikov">Логарифмы синусов</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov"
         style="color: rgb(122, 122, 122); border-bottom: 1px solid black;">
         <p class="length_number_vychislenie_treugolnikov" style="font-weight: normal;">1</p>
         <p class="length_name_vychislenie_treugolnikov" style="text-align: center;">2</p>
         <p class="length_dimension_vychislenie_treugolnikov">3</p>
         <p class="length_w3_vychislenie_treugolnikov">4</p>
         <p class="length_fixes_vychislenie_treugolnikov">5</p>
         <p class="length_sinus_vychislenie_treugolnikov">6</p>
         <p class="length_side_vychislenie_treugolnikov">7</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Покровское</p>
         <p class="length_dimension_vychislenie_treugolnikov">73&deg;56&prime;02&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">+3</p>
         <p class="length_fixes_vychislenie_treugolnikov">73&deg;56&prime;05&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">9.98270</p>
         <p class="length_side_vychislenie_treugolnikov" style="border-bottom: 1px solid black;">3.61573</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov">1</p>
         <p class="length_name_vychislenie_treugolnikov">Заозерный</p>
         <p class="length_dimension_vychislenie_treugolnikov">65&deg;26&prime;20&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">+3</p>
         <p class="length_fixes_vychislenie_treugolnikov">65&deg;26&prime;23&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">9.95881</p>
         <p class="length_side_vychislenie_treugolnikov">3.59184</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Казаково</p>
         <p class="length_dimension_vychislenie_treugolnikov">40&deg;37&prime;30&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">+2</p>
         <p class="length_fixes_vychislenie_treugolnikov">40&deg;37&prime;32&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">9.81365</p>
         <p class="length_side_vychislenie_treugolnikov">3.44668</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov" style="border-bottom: 1px solid black;">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">W=&ndash;8&Prime;</p>
         <p class="length_dimension_vychislenie_treugolnikov" style="font-weight: 500;">179&deg;59&prime;52&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov" style="font-weight: 500;">+8</p>
         <p class="length_fixes_vychislenie_treugolnikov" style="font-weight: 500;">180&deg;00&prime;00&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov"></p>
         <p class="length_side_vychislenie_treugolnikov"></p>
      </div>

      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Покровское</p>
         <p class="length_dimension_vychislenie_treugolnikov">106&deg;39&prime;20&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">-3</p>
         <p class="length_fixes_vychislenie_treugolnikov">106&deg;39&prime;17&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">9.98139</p>
         <p class="length_side_vychislenie_treugolnikov" style="border-bottom: 1px solid black;">3.80893</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov">2</p>
         <p class="length_name_vychislenie_treugolnikov">Трудный</p>
         <p class="length_dimension_vychislenie_treugolnikov">24&deg;35&prime;07&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">-3</p>
         <p class="length_fixes_vychislenie_treugolnikov">24&deg;35&prime;04&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">9.61911</p>
         <p class="length_side_vychislenie_treugolnikov">3.44665</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Заозерный</p>
         <p class="length_dimension_vychislenie_treugolnikov">48&deg;45&prime;41&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">-2</p>
         <p class="length_fixes_vychislenie_treugolnikov">48&deg;45&prime;39&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">9.87620</p>
         <p class="length_side_vychislenie_treugolnikov">3.70374</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov" style="border-bottom: 1px solid black;">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">W=&ndash;8&Prime;</p>
         <p class="length_dimension_vychislenie_treugolnikov" style="font-weight: 500;">180&deg;00&prime;08&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov" style="font-weight: 500;">-8</p>
         <p class="length_fixes_vychislenie_treugolnikov" style="font-weight: 500;">180&deg;00&prime;00&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov"></p>
         <p class="length_side_vychislenie_treugolnikov"></p>
      </div>

      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Знаменка</p>
         <p class="length_dimension_vychislenie_treugolnikov">79&deg;14&prime;28&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">-1</p>
         <p class="length_fixes_vychislenie_treugolnikov">79&deg;14&prime;27&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">9.99230</p>
         <p class="length_side_vychislenie_treugolnikov">3.70374</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov">3</p>
         <p class="length_name_vychislenie_treugolnikov">Трудный</p>
         <p class="length_dimension_vychislenie_treugolnikov">52&deg;50&prime;57&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">-1</p>
         <p class="length_fixes_vychislenie_treugolnikov">52&deg;50&prime;56&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">9.90149</p>
         <p class="length_side_vychislenie_treugolnikov">3.61293</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Покровское</p>
         <p class="length_dimension_vychislenie_treugolnikov">47&deg;54&prime;37&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">0</p>
         <p class="length_fixes_vychislenie_treugolnikov">47&deg;54&prime;37&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">9.87046</p>
         <p class="length_side_vychislenie_treugolnikov">3.58190</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov" style="border-bottom: 1px solid black;">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">W=+8&Prime;</p>
         <p class="length_dimension_vychislenie_treugolnikov" style="font-weight: 500;">180&deg;00&prime;02&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov" style="font-weight: 500;">-2</p>
         <p class="length_fixes_vychislenie_treugolnikov" style="font-weight: 500;">180&deg;00&prime;00&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov"></p>
         <p class="length_side_vychislenie_treugolnikov"></p>
      </div>

      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Знаменка</p>
         <p class="length_dimension_vychislenie_treugolnikov">51&deg;02&prime;15&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">-5</p>
         <p class="length_fixes_vychislenie_treugolnikov">51&deg;02&prime;10&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">9.89072</p>
         <p class="length_side_vychislenie_treugolnikov" style="border-bottom: 1px solid black;">3.56998</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov">4</p>
         <p class="length_name_vychislenie_treugolnikov">Трудный</p>
         <p class="length_dimension_vychislenie_treugolnikov">75&deg;55&prime;09&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">-5</p>
         <p class="length_fixes_vychislenie_treugolnikov">75&deg;55&prime;04&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">9.98675</p>
         <p class="length_side_vychislenie_treugolnikov">3.66601</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Талый</p>
         <p class="length_dimension_vychislenie_treugolnikov">53&deg;02&prime;52&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">-6</p>
         <p class="length_fixes_vychislenie_treugolnikov">53&deg;02&prime;46&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">9.90261</p>
         <p class="length_side_vychislenie_treugolnikov">3.58187</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov" style="border-bottom: 1px solid black;">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">W=+16&Prime;</p>
         <p class="length_dimension_vychislenie_treugolnikov" style="font-weight: 500;">180&deg;00&prime;16&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov" style="font-weight: 500;">-16</p>
         <p class="length_fixes_vychislenie_treugolnikov" style="font-weight: 500;">180&deg;00&prime;00&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov"></p>
         <p class="length_side_vychislenie_treugolnikov"></p>
      </div>

      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Знаменка</p>
         <p class="length_dimension_vychislenie_treugolnikov">129&deg;25&prime;04&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">+1</p>
         <p class="length_fixes_vychislenie_treugolnikov">129&deg;25&prime;05&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">9.88792</p>
         <p class="length_side_vychislenie_treugolnikov" style="border-bottom: 1px solid black;">3.85980</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov">5</p>
         <p class="length_name_vychislenie_treugolnikov">Талый</p>
         <p class="length_dimension_vychislenie_treugolnikov">20&deg;56&prime;53&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">+1</p>
         <p class="length_fixes_vychislenie_treugolnikov">20&deg;56&prime;54&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">9.55331</p>
         <p class="length_side_vychislenie_treugolnikov">3.52519</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">Болотный</p>
         <p class="length_dimension_vychislenie_treugolnikov">29&deg;38&prime;00&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov">+1</p>
         <p class="length_fixes_vychislenie_treugolnikov">29&deg;38&prime;01&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov">9.69412</p>
         <p class="length_side_vychislenie_treugolnikov">3.66600</p>
      </div>
      <div class="data_table_vychislenie_treugolnikov" style="border-bottom: 1px solid black; margin-bottom: 30px;">
         <p class="length_number_vychislenie_treugolnikov"></p>
         <p class="length_name_vychislenie_treugolnikov">W=-3&Prime;</p>
         <p class="length_dimension_vychislenie_treugolnikov" style="font-weight: 500;">179&deg;59&prime;57&Prime;</p>
         <p class="length_w3_vychislenie_treugolnikov" style="font-weight: 500;">+3</p>
         <p class="length_fixes_vychislenie_treugolnikov" style="font-weight: 500;">180&deg;00&prime;00&Prime;</p>
         <p class="length_sinus_vychislenie_treugolnikov"></p>
         <p class="length_side_vychislenie_treugolnikov"></p>
      </div>
      <p class="txt_article">Так как в каждом треугольнике за исходную принимается только одна сторона, то частное после
         деления значения исходной стороны на синус противолежащего угла будет общим для вычисления двух других сторон.
         Поэтому это частное записывают в графу 6 выше значения синуса первого угла треугольника. При расчете сети
         треугольников, в которой одна и та же сторона входит в два-три соседних треугольника, допускаются расхождения
         этой стороны, полученных из разных треугольников. Величина расхождения зависит от точности измерения углов. Для
         того чтобы расхождений в сторонах не было, сеть треугольников нужно уравнять по способу наименьших квадратов.
      </p>
      <a href="https://docs.google.com/spreadsheets/d/1NbHJEaTD4bXWbl8aKYxRVJQEelrDSXiU2hVu5QVkz8I/edit?usp=sharing" target="_blank" class="link_article">Excel</a>
   </article>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>