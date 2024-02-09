<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
          function sort_2way($array, $order) {
            if ($order === TRUE){
              echo '昇順にソートします。<br>';
              $array = array(15, 4, 18, 23, 10);
              sort($array);
              foreach ($array as $key => $value){
                echo $value . '<br>';
              }
            }else{
              echo '降順にソートします。<br>';
              $array = array(15, 4, 18, 23, 10);
              rsort($array);
              foreach ($array as $key => $value){
                echo $value . '<br>';
              }
            }
          }
          $array = [15, 4, 18, 23, 10];

          echo sort_2way($array, true);
          echo sort_2way($array, false);
        
        ?>
    </p>
</body>

</html>
