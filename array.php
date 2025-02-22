<DOCTYPE! html>
<html lang = "ja">
  <head> 
    <meta charset = "UTF-8">
    <title>配列処理</title>
  </head>
  <body>
    <p>
     <?php
      $user_names = ['name1','name2','name3','name4'];
      $user_nums = [1, 2, 3, 4,];

      print_r($user_names);
      echo '<br>';
      print_r($user_nums);
      echo '<br>';
      echo $user_names[2];
      $user_names[0] = 'name0';
      echo '<br>';
      echo $user_names[0];
     ?>
    </p>
  </body> 
</html>