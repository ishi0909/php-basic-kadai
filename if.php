<DOCTYPE! html>
<html lang = "ja">
  <head> 
    <meta charset = "UTF-8">
    <title>php基礎編</title>
  </head>
  <body>
    <p>
    <?php
      echo 45 + 18;
      echo '<br>';
      var_dump(45 > 18);
      echo '<br>';
      var_dump('5' == 5);
      echo '<br>';
      var_dump('5' === 5);

      echo '<br>';
      $num = mt_rand(0 , 4);
      if ($num === 4) {
        echo $num;
        echo "この値は「{$num}」です！";
      }
      elseif ($num === 2) {
        echo $num;
        echo "この値は「{$num}」です！";
      }
      else {
        echo "この値は４以外です！";
      }

      echo '<br>';
      $num2 = 20;
      if ($num2 > 10 && $num2 < 30) {
        echo 'この値は１０以上３０以下です';
      }
      else {
        echo 'この値は１０以上または３０以下の値ではない';
      }

      echo '<br>';
      $num3 = 20;
      if ($num3 >= 10 || $num3 <= 10) {
        echo $num3;
        echo 'この値は１０以上か、１０以下です。';
      }

    ?>
    <p>
  </body> 
</html>