<DOCTYPE! html>
<html lang = "ja">
  <head> 
    <meta charset = "UTF-8">
    <title>php基礎編</title>
  </head>
  <body>
    <p>
      <?php
      class Product {
        public $name;
        public function set_name(string $name) {
          $this -> name = $name;
        }
        public function show_name() {
          echo $this -> name . '<br>';
        }
      }

      $coffee = new Product();
      
      $coffee -> set_name('コーヒー');
      $coffee -> show_name();

      $shampoo = new Product;

      $shampoo -> name = 'シャンプー';

      echo $shampoo -> name;
      ?>
    </p>
  </body> 
</html>
