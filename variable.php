<DOCTYPE! html>
<html lang = "ja">
  <head> 
    <meta charset = "UTF-8">
    <title>php基礎編</title>
  </head>
  <body>
    <p>
     <?php
        $user_name = '侍太郎';
        echo $user_name;

        echo '<br>';
        $user_name = 1000;
        echo $user_name;

        echo '<br>';
        $hello = 'こんにちは';
        $middle_name = 25;
        echo $hello . '私の名前は' . $middle_name . 'です。';
        echo '<br>';
        echo '{$middle_name}は私の名前だ。';

        echo '<br>';
        $num = 10;
        echo $num * 10;

        echo '<br>';
        $num = 50;
        echo $num * 10;

        echo '<br>';
        $abc = 'a' . 'b' . 'd';
        echo "最初は{$abc}から";
      

     ?>
    </p>
  </body> 
</html>