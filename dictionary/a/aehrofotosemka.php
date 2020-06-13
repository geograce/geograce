<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Аэрофотосъемка  фотографирование местности с самолета или какого-либо другого летательного аппарата">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/logo_geograce.svg">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
   <title>Аэрофотосъемка</title>
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
      <h1 class="h1_description_general">Аэрофотосъемка</h1>
      <p class="txt_description_general"><strong>Аэрофотосъемка</strong> &ndash; фотографирование местности с самолета
         или какого&ndash;либо другого летательного аппарата. Аэрофотосъемка производится для создания топографических
         карт по аэрофотоснимкам; изучения и учета лесных и земельных фондов; проектирования инженерных сооружений; при
         выполнении геологоразведочных работ и для ряда других народнохозяйственных целей. В войсках аэрофотосъемка
         ведется в целях разведки местности противника, его боевой техники и инженерных сооружений. Аэрофотосъемка
         выполняется специальными аэрофотоаппаратами (АФА) и подразделяется в зависимости от характера залета:
         одинарную, маршрутную и площадную; в зависимости от вида аэрофотоснимков &ndash; на плановую и перспективную.
      </p>
      <p class="list_description_general"><strong>Аэрофотосъемка одинарная</strong> &ndash; применяется при
         фотографировании отдельных объектов или группы их, когда они могут быть заняты на одном или немногих
         (2&ndash;3) снимках и нет надобности в стереоскопическом рассматривании сфотографированных объектов.</p>
      <p class="list_description_general"><strong>Аэрофотосъемка маршрутная</strong> &ndash; фотографирование местности
         вдоль какого&ndash;либо направления (маршрута). Выполняется в целях разведки дорог, рек, линий обороны и других
         протяженных объектов. Ширина снимаемой полосы C и число снимков L необходимое для аэрофотосъемки маршрута,
         определяются по формулам:</p>
      <p class="formula_description">$$C =l_ym; L= {D*10^7 \over l_x(100-p)m}+3$$</p>
      <p class="list_description_general" style="padding-bottom: 0;">где:</p>
      <p class="list_description_general" style="padding-bottom: 0;">l<sub>x</sub> и l<sub>y</sub> &ndash; длины
         продольной и поперечной сторон аэрофотоснимка в сантиметрах;</p>
      <p class="list_description_general" style="padding-bottom: 0;">D &ndash; длина маршрута в километрах;</p>
      <p class="list_description_general" style="padding-bottom: 0;">p &ndash; заданный процент продольного перекрытия;
      </p>
      <p class="list_description_general">m &ndash; знаменатель масштаба аэрофотосъемки;</p>
      <p class="list_description_general"><strong>Аэрофотосъемка площадная</strong> &ndash; съемка участка земной
         поверхности, превышающего по ширине площадь, фотографируемую одним маршрутом. При аэрофотосъемки площади
         прокладывается ряд параллельных между собой маршрутов с соблюдением заданного перекрытия между ними. Расстояние
         между маршрутами R и количество маршрутов K, необходимые для А. всей площади, при плановой А. рассчитываются по
         формулам:</p>
      <p class="formula_description">$$R=l_ym {100-q \over 100}$$</p>
      <p class="formula_description">$$K={S*10^7 \over l_y(100-q)m}+1$$</p>
      <p class="list_description_general" style="padding-bottom: 0;">где:</p>
      <p class="list_description_general" style="padding-bottom: 0;">q &ndash; величина поперечного перекрытия в
         процентах</p>
      <p class="list_description_general">S &ndash; ширина снимаемой площади в километрах;</p>
      <p class="list_description_general">Общее количество аэрофотоснимков N<sub>S</sub> при аэрофотосъемки заданной
         площади равно количеству аэрофотоснимков в маршруте L, умноженному на число маршрутов K, т.е.</p>
      <p class="formula_description">$$N_S=L*K$$</p>
      <p class="list_description_general"><strong>Аэрофотосъемка плановая</strong> &ndash; съемка при которой АФА
         устанавливается в самолете так, чтобы его оптическая ось во время фотографирования занимала отвесное положение;
         отклонение от такого положения на некоторый угол &alpha; происходит лишь вследствие неизбежного колебания
         самолета в воздухе. Величина угла &alpha; при плановой аэрофотосъемки обычно не превосходит 3&deg; (среднее
         значение &ndash; около 1,5&deg;), а с применением гиростабилизирующей установки она уменьшается до 30&Prime;.
         Приближенно о величине &alpha; можно судить по положению пузырька уровня, фиксируемому на аэрофотоснимке.
         Продольное перекрытие, как правило, устанавливают не менее 55%; поперечное (в зависимости от рельефа местности
         и способа фотограмметрической обработки аэрофотоснимков) &ndash; 30&ndash;40%.</p>
      <p class="list_description_general"><strong>Аэрофотосъемка перспективная</strong> &ndash; съемка при которой АФА
         установлен в самолете так, что его оптическая ось наклонена от отвесного положения на некоторый постоянный угол
         &alpha; получаемые при этом аэрофотоснимки называются перспективными. Перспективная аэрофотосъемка широко
         применяется при аэрофоторазведке, так как с равных высот и одинаковыми АФА фотографируется большая площадь, чем
         при плановой аэрофотосъемке, и, кроме того, нужные объекты можно сфотографировать с некоторого расстояния, не
         пролетая непосредственно над ними. Например, чтобы сфотографировать полосу местности шириной АВ (рис. 1), при
         плановой аэрофотосъемке нужно летать над серединой этой полосы (точка фотографирования S).</p>
      <figure class="figure_img_description_general" style="max-width: 450px;">
         <img class="img_description_general" style="max-width: 400px;" src="/img/dictionary/a/aerofotosyemka.svg"
            alt="Аэронивелирование">
         <figcaption class="figcaption_general">Рис. 1 Схема плановой и перспективной аэрофотосъемки</figcaption>
      </figure>
      <p class="txt_description_general">Перспективной же аэрофотосъемкой можно сфотографировать эту полосу, не долетая
         даже до нее (точка фотографирования S'), причем будет сфотографирована более широкая полоса A'B'. В
         разведывательных целях центральная полоса маршрута нередко покрывается плановыми, а боковые его части &ndash;
         перспективными аэрофотоснимками. Для этого применяют специальную аэрофотоустановку, называемую качающейся
         установкой, при помощи которой камера может принимать попеременно отвесное и отклоненное на некоторый заданный
         угол положение, что позволяет за один маршрут сфотографировать широкую полосу местности.</p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>