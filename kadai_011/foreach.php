<DOCTYPE! html>
<html lang = "ja">
  <head> 
    <meta charset = "UTF-8">
    <title>kadai_011</title>
  </head>
  <body>
    <?php
      $products = [
        '名前' => '玉ねぎ',
        '値段' => 200,
        '産地' => '北海道'
      ];

      foreach ($products as $key => $value) {
        echo "{$key} : {$value}<br>";
      }
      echo '<br>';
    ?>
  </body> 
</html>