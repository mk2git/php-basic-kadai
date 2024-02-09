<?php 
    class Food {
      // プロパティ定義
      private $name;
      private $price;

      // コンストラクタ定義
       public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
      }
      // メソッド定義
      public function set_price(int $price){
        $this->price = $price;
      }
      public function show_price(){
        echo $this->price . '<br>';
      }
    }

    class Animal {
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      public function set_height(int $height){
        $this->height = $height;
      }
      public function show_height(){
        echo $this->height;
      }
      
    }

    // インスタンス化
    $potato = new Food('potato', 250);
    $dog = new Animal('dog', 60, 5000);

    // 出力
    print_r($potato);
    echo '<br>';
    print_r($dog);
    echo '<br>';

    // メソッドアクセス
    $potato->set_price(250);
    $potato->show_price();

    $dog->set_height(60);
    $dog->show_height();
?>