<DOCTYPE! html>
<html lang = "ja">
  <head> 
    <meta charset = "UTF-8">
    <title>php基礎編</title>
  </head>
  <body>
    <?php
      for ($i = 1; $i <= 10; $i++) {
        echo $i . '<br>';
      }
      echo '<br>';

      for ($i = 1; $i <= 20; $i++) {
        $num = mt_rand(1 , 20);
        echo "{$i}回目の結果は{$num}です。<br>";
        if ($num === 20) {
          echo '２０が出たので繰り返し処理を強制終了します。';
          break;
        }
      }

      echo '<br>';
      for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 === 1) {
          continue;
        }
        echo $i . '<br>';
      }
    ?>
  </body> 
</html>