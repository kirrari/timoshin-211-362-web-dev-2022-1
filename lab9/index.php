<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Тимошин Н.И. 211-362 Лабораторная работа №9 Вариант №1</title>
</head>

<body>
  <header class="header">
    <div class="header__content container">
      <img class="header__logo" src="assets/logo.png" alt="logo">
      <p class="header__text">Тимошин Н.И. 211-362 Лабораторная работа №9 Вариант №1</p>
    </div>
  </header>
  <main class="page">
    <div class="main__content container">
    <?php
      $min_value = -2000000;
      $max_value = 2000000;

      $min = PHP_INT_MAX;
      $max = PHP_INT_MIN;
      $avg;
      $sum = 0;

      $x = -10;	// начальное значение аргумента
      $encounting = 10000;	// количество вычисляемых значений
      $step = 2;	// шаг изменения аргумента
      $type = 'D';	// тип верстки

      switch ($type) {
        case 'B':
          echo '<ul>';
          break;
        case 'C': 
          echo '<ol>';
          break;
        case 'D': 
          echo '<table><tr><th>Номер строки </th><th>Значение аргумента</th><th>Значение функции</th>';
          break;
      }

      for($i = 0; $i < $encounting; $i++, $x += $step) {
        if ($x <= 10)	$f = 10 * $x - 5;
        else if ($x < 20) $f = ($x + 3) * ($x * $x);	
        else if ($x != 25) $f = 3 / ($x - 25);
        else {
          echo '<p>error</p>';
          continue;
        };

        $f = round($f, 3);

        $sum += $f;
        $avg = $sum / ($i + 1);

        if ($f < $min) $min = $f;
        if ($f > $max) $max = $f;

        switch ($type) {
          case 'A': 
            echo '<p class="main__function">f('.$x.') = '.$f.'</p>';
            break;
          case 'B':		
            echo '<li class="main__function">f('. $x.') = '.$f.'</li>';
            break;
          case 'C':
            echo '<li class="main__function">f('. $x.') = '.$f.'</li>';
            break;
          case 'D': 
            echo '<tr><td>'.$i.'.</td><td>'.$x.'</td><td>'.$f.'</td></tr>';
            break;
          case 'E':
            echo '<div class="main__function_div">f('. $x.') = '.$f.'</div>';
            break;
        }

        if ($f >= $max_value || $f < $min_value)	break;
      }

      switch ($type) {
        case 'B':
          echo '</ul>';
          break;
        case 'C': 
          echo '</ol>';
          break;
        case 'D': 
          echo '</table>';
          break;
      }

      echo '<br><br>';

      echo 'Минимальное: '.$min.'<br>';
      echo 'Максимальное: '.$max.'<br>';
      echo 'Сумма: '.round($sum, 3).'<br>';
      echo 'Среднее арифметическое: '.round($avg, 3);
    ?>
    </div>
  </main>
  <footer class="footer">
    <div class="footer__content container">
      <p class="footer__type">Тип верстки: 
      <?php 
        switch ($type) {
          case 'A': 
            echo 'A. Простая верстка текстом';
            break; 
          case 'B': 
            echo 'B. Маркированный список';
            break; 
          case 'C': 
            echo 'C. Нумерованный список';
            break; 
          case 'D': 
            echo 'D. Табличная верстка';
            break;     
          case 'E': 
            echo 'E. Блочная верстка';
            break; 
        }
      ?>
      </p>
    </div>
  </footer>
</body>

</html>