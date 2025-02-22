<DOCTYPE! html>
<html lang = "ja">
  <head> 
    <meta charset = "UTF-8">
    <title>php基礎編</title>
  </head>
  <body>
    <?php
      $num = mt_rand(0,4);
      $i = 1;
      echo "最初の値は{$num}です。<br>";
      while ($num !== 0) {
        $num = mt_rand(0,4);
        echo "現在の値は{$num}になっています。<br>";

        if ($i === 5) {
          echo '５回目なので繰り返し処理を終了します。';
          break;
        }
        $i++;
      }
      echo '<br>';
      echo '<br>';
      echo '<br>';

      $sum = 0;

      while ($sum < 20) {
        $num1 = mt_rand(1,10);
        echo "{$num1}が出ました。<br>";
        if ($num1 % 2 === 0) {
          echo '偶数なので加算なし。<br>';
          echo "現在の合計は{$sum}です！<br>";
          continue;
        }
        $sum += $num1;
        echo "現在の合計は{$sum}です！<br>";
      }
    ?>
  </body> 
</html>