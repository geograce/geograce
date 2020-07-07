<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Барометрическое нивелирование нахождение превышений между пунктами. Существует несколько методов производства барометрического нивелирования.">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
   <title>Барометрическое нивелирование - это... Что означает Барометрическое нивелирование?</title>
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
      <h1 class="h1_description_general">Барометрическое нивелирование</h1>
      <p class="txt_description_general"><strong>БАРОМЕТРИЧЕСКОЕ НИВЕЛИРОВАНИЕ</strong> &ndash; нахождение превышений
         между точками методом измерения атмосферного давления в данных точках. Барометрическое нивелирование
         производится с помощью барометра. Если в точках B<sub>1</sub> и В<sub>2</sub> измерить атмосферное давление и
         температуру воздуха t<sub>1</sub> и t<sub>2</sub>, то превышение между точками
         H<sub>2</sub>&ndash;H<sub>1</sub> можно определить по приближенной барометрической формуле:</p>
      <p class="formula_description">$$H_2-H_1=$$</p>
      <p class="formula_description">$$=K_0(1+&alpha;t_{ср} )(lgB_1-lgB_2) \,\,\,(a)$$</p>
      <p class="txt_description_general">где:</p>
      <p class="txt_description_general" style="margin-bottom: 0;">K<sub>0</sub> = 18470 &ndash; согласно определению
         Певцова М.В.;</p>
      <p class="txt_description_general" style="margin-bottom: 0;">&alpha; = 1/273;</p>
      <p class="txt_description_general" style="margin-bottom: 0;">t<sub>ср</sub> = 1/2*(t<sub>1</sub> + t<sub>2</sub>);
      </p>
      <p class="txt_description_general">lgB<sub>1</sub> и lgB<sub>2</sub> &ndash; представлены в виде десятичных
         логарифмов измеренных значений атмосферного давления (мм рт. ст.)</p>
      <p class="txt_description_general">Когда используют таблицы барических ступеней высот, то формула (а) приобретает
         вид:</p>
      <p class="formula_description">$$H_2-H_1=$$</p>
      <p class="formula_description">$$= {k\over B_{ср}}(1+&alpha;t_{ср} )(B_1-B_2) \,\,\,\,(б)$$</p>
      <p class="txt_description_general">где:</p>
      <p class="txt_description_general" style="margin-bottom: 0;">k = K<sub>0</sub>&mu; = 18470 * 0,4343 &asymp; 8000
      </p>
      <p class="txt_description_general" style="margin-bottom: 0;">B<sub>ср</sub> = 1/2*(B<sub>1</sub> + B<sub>2</sub>);
      </p>
      <p class="txt_description_general">k/B<sub>ср</sub>(1 + &alpha;t<sub>ср</sub>) называется барической ступенью
         высоты.</p>
      <p class="txt_description_general">Вышеуказанные формулы применимы, когда атмосфера находится в невозмущенном
         состоянии, т.е. когда изобарическая поверхность становится параллельна уровенной поверхности и при этом
         атмосферное давление должно быть неизменным в этих точках за промежуток времени при переходе с одной точки на
         другую. На основе этого условия есть несколько методов барометрического нивелирования.</p>
      <p class="txt_description_general"><strong>Метод соответствующих наблюдений</strong>, который производится двумя
         наблюдателями. В исходном пункте сверяют показания часов, барометров и термометров, первый наблюдатель остается
         на исходном пункте и снимает отсчеты с приборов через равные интервалы времени, к примеру через 20 минут.
         Второй наблюдатель перемещается на определяемые точки и снимает какие же показания с приборов. Чтобы определить
         превышения между точками данные барометра и термометра интерполируют на моменты взятия отсчетов второго.</p>
      <p class="txt_description_general">Если нужно произвести барометрическое нивелирование площади какого&ndash;либо
         участка, то наблюдения делают на станции в условленные сроки. Станция устанавливается в середине определяемой
         площади и от нее уж прокладывают путь до определяемых точек, при этом возвращаются на станцию, чтобы
         производить контроль показаний приборов. При проведении более точного барометрического нивелирования нужно
         учитывать такие параметры как наклон изобарических поверхностей, а также изменение температурного градиента.
      </p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>