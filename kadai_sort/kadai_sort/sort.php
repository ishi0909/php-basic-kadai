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

      function sort_2way($array,$order) {

       if ($order === 0) {
          echo '昇順にソートします。<br>';
          sort($array);
        }

        elseif ($order === 1) {
          echo '降順にソートします。<br>';
          rsort($array);
        }

        foreach ($array as $value) {
          echo $value . '<br>';
        }
      }
      sort_2way($array,0);
      sort_2way($array,1);
      ?>
    </p>
  </body> 
</html>