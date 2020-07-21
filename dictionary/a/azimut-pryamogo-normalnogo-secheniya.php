<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Азимут прямого нормального сечения  двугранный угол, образованный плоскостью геодезического меридиана исходной точки и плоскостью, проходящей через нормаль к поверхности эллипсоида в этой точке и заданную вторую точку.Азимут прямого нормального сечения отсчитывается от северного направления">
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/media.css">
   <link rel="icon" href="/img/general/favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,700&display=swap" rel="stylesheet">
   <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js"></script>
   <title>Азимут прямого нормального сечения -это... Что такое азимут прямого сечения?</title>
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
      <h1 class="h1_description_general">Азимут прямого нормального сечения</h1>
      <p class="txt_description_general"><strong>АЗИМУТ ПРЯМОГО НОРМАЛЬНОГО СЕЧЕНИЯ</strong> &ndash; это двугранный
         угол, образованный плоскостью геодезического меридиана исходной точки и плоскостью, проходящей через нормаль к
         поверхности эллипсоида в этой точке и заданную вторую точку. Азимут прямого нормального сечения отсчитывается
         от северного направления меридиана по ходу часовой стрелки от 0 до 360 градусов. Азимут A<sub>1,2</sub>
         нормального в точке 1 (B<sub>1</sub>, L<sub>1</sub>) сечения, проходящего через точку 2(B<sub>2</sub>,
         L<sub>2</sub>), может быть рассчитан по формулам, которые предложил Б. С. Кузьмин:</p>
      <p class="formula_description">$$m=(1-e^2)tgB_2$$
         $$n=e^2\frac{N_1sinB_1}{N_2sinB_2}$$
         $$ctg\omega=m(1+n)$$
         $$p=ctg\omega*cosB_1$$
         $$q=cos(L_2-L_1)sinB_1$$
         $$tgA_{1.2}=\frac{sin(L_2-L_1)}{p-q}$$</p>
      <p class="txt_description_general">где:</p>
      <p class="txt_description_general" style="margin-bottom: 0;">B<sub>1</sub>, B<sub>2</sub> и L<sub>1</sub>,
         L<sub>2</sub> &ndash;
         географические (геодезические) широты и долготы точек;</p>
      <p class="txt_description_general" style="margin-bottom: 0;">N<sub>1</sub> и N<sub>2</sub> &ndash; радиусы
         кривизны первого вертикала для точек с широтами B<sub>1</sub> и B<sub>2</sub>;</p>
      <p class="txt_description_general">e<sup>2</sup> = 0,006693421623 (для эллипсоида Красовского) &ndash; квадрат
         эксцентриситета меридианного эллипса;</p>
      <p class="formula_description">$$e'\;^2=\frac{e^2}{1-e^2}=0,006738525415$$</p>
      <p class="txt_description_general">Данные формулы дают точное значение азимута прямого нормального сечения на
         любых расстояниях.</p>
      <p class="txt_description_general"><strong>Пример</strong></p>
      <p class="txt_description_general" style="margin-bottom: 0;">Дано: B<sub>1</sub> = 43&deg;15&prime;24.76&Prime;;
         B<sub>2</sub> = 63&deg;18 &prime;34.65&Prime;; L<sub>1</sub> &ndash; L<sub>2</sub> = &ndash;30&deg;12
         &prime;59.72&Prime;</p>
      <p class="txt_description_general">По вышеуказанным формулам рассчитаем A<sub>1,2</sub> = 329&deg;29
         &prime;42.5&Prime;</p>
   </div>

   <?php
      require "../../module_php/footer_general.php";
   ?>

   <script src="/js/mobile_menu_general.js"></script>
</body>

</html>