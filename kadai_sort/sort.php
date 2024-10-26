<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
      // 第2引数に指定したソート方向で配列をソートする関数を作る
      function sort_2way($array, $order) {
        if ($order === TRUE) {
          // 配列を昇順でソート
          sort($array);
          echo '昇順にソートします。<br>';        
        } else {
          // 配列を降順でソート
          rsort($array);
          echo '降順にソートします。<br>'; 
        }

        // 指定されたソート方向で配列を表示する
        foreach($array as $nums) {
          echo "{$nums}<br>";
        }
      }

      // ソートする配列を宣言
      $nums = [15, 4, 18, 23, 10];

      // 関数を呼び出し、引数として配列とソート方向を渡す
      sort_2way($nums, TRUE);
      sort_2way($nums, FALSE);
      ?>
    </p>
  </body>

</html>