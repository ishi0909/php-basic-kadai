<DOCTYPE! html>
<html lang = "ja">
  <head> 
    <meta charset = "UTF-8">
    <title>kadai_sort</title>
  </head>
  <body>
    <p>
     <?php
      $array = [15, 4, 18, 23, 10 ];
      $order = mt_rand(0,1);

      if ($order === 0) {
        echo '昇順にソートします。<br>';
        sort($array);
        foreach ($array as $value) {
          echo $value . '<br>';
        }
      }
      
      elseif ($order === 1) {
        echo '降順にソートします。<br>';
        rsort($array);
        foreach ($array as $value) {
          echo $value . '<br>';
        }
      }
      echo '<br>';
      ?>
    </p>
  </body> 
</html>