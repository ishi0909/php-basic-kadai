<DOCTYPE! html>
<html lang = "ja">
  <head> 
    <meta charset = "UTF-8">
    <title>php基礎編</title>
  </head>
  <body>
    <p>
    <?php
      function good_morning() {
        echo "おはよう<br>";
        echo "いい天気だね〜<br>";
      }
      function good_afternooon() {
        echo "こんばんは<br>";
        echo "そろそろ寝ようか〜<br>";
      }

      good_afternooon();
      good_morning();
      echo '<br>';
    ?>
    </p>
    <p>
      <?php

      function calculate_total($price) {
        return $price + 1 . '円';
      }
      echo calculate_total(1.2);
      ?>
    </p>
  </body> 
</html>