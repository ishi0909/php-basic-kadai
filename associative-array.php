<DOCTYPE! html>
<html lang = "ja">
  <head> 
    <meta charset = "UTF-8">
    <title>配列処理</title>
  </head>
  <body>
    <p>
     <?php
      $personal_data = ['name' => 'aaa', 'age' => '10', 'gender' => '男性'];
      print_r($personal_data);
      echo $personal_data['name'];
      $personal_data['name'] = 'bbb';
      echo $personal_data['name'];
      $personal_data['example'] = 'example';
      echo $personal_data['example'];
      $personal_data['age'] = '33';
      echo '<br>';
      print_r($personal_data);

      echo '<br>';
      echo "私の名前は{$personal_data['name']}です。";
      echo '<br>';
      echo '私の名前は' . $personal_data['name'] . 'です。';
      echo '<br>';
      echo $personal_data['gender'];
     ?>
    </p>
  </body> 
</html>