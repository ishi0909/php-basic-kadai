<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>正規表現</title>
</head>
<body>
  <h2>
    <?php
    $str = 'Appleが5個あります。Orangeは1個しかありません。';
    echo '検索対象は' . $str . 'です。';
    ?>
  </h2>
  <p>
    <?php
    echo '英数字が含まれているかどうかを正規表現で検索し、検索結果を配列に代入します。<br>';
    if (preg_match_all('/[a-zA-Z0-9]/', $str, $results)) {
      echo '>検索結果：';
      print_r($results);
    } else {
      echo '>正規表現に一致しませんでした。';
    }
    ?>
  </p>
</body>
</html>