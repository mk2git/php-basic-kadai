<?php
    $product = [
      '名前' => '玉ねぎ',
      '値段' => 200,
      '産地' => '北海道'
    ];
    foreach ($product as $key => $value){
      echo "{$key} : {$value}<br>";
    }
?>