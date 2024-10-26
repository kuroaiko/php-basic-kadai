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






      // ・9章 条件分岐のif文を理解しよう：if文の使い方について
      // ・12章 繰り返し処理のforeach文を理解しよう：foreach文の使い方について
      // ・14章 関数の引数・戻り値を理解しよう：関数の使い方について
      //・メッセージの表示はecho文で構いませんが、<br>を用いて改行してください。
      ?>
    </p>
  </body>

</html>