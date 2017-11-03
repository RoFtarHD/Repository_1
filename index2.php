<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Registration');
$app->initLayout('Centered');





if(isset ($_GET['min'])){
  $min = $_GET['min'];
  $max = $_GET['max'];
  $number = round(($min + $max)/2);
  $label = $app->add(['Label', $number]);
  if(isset ($_GET['greater'])){
    $min = $number;
  }
  if(isset ($_GET['less'])){
    $max = $number;
  }

}else{
    $label = $app->add(['Label', 'Выбери число между 1 и 100']);
  $min = 1;
  $max = 100;
}


$button1 = $app->add(['Button', 'Less']);
$button1 -> link(['index', 'min'=> $min, 'max' => $max, 'less' => TRUE]);

$button2 = $app->add(['Button', 'greater']);
$button2 -> link(['index', 'min'=> $min, 'max' => $max, 'greater' => TRUE]);

$button3 = $app->add(['Button', 'It is my number']);
