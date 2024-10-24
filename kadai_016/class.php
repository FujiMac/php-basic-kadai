<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
     <?php

      class Food{
        public $name;
        public $price;
        
        public function __construct(string $name,string $price){
          $this->name = $name;
          $this->price = $price;
        }

        public function show_price(string $name){
          echo $this->price.'<br>';
        }
      }

      class Animal{
        public $name;
        public $height;
        public $weight;

        public function __construct(string $name,string $height,string $weight){
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }

        public function show_height(string $name){
          echo $this->height.'<br>';
        }
      }

      $food = new Food('トマト',398);
      print_r($food);

      echo '<br>';

      $animal = new Animal('トラ',300,400);
      print_r($animal);

      echo '<br>';

      $food->show_price('トマト');
      $animal->show_height('トラ');
      ?>
     </p>

 </body>
 
 </html>