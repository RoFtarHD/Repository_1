<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Registration');
$app->initLayout('Centered');
/*$button = $app->add('Button');
$button->set('button');
$button->icon = 'plus';
$button->link('https://www.youtube.com/');
$button->set(['primary'=> true]);*/
$name = 2;
for ($L = 1; $L <= 9; $L++) {
  $button = $app->add('Button');
  $button->set(' '.$name);
  $name = $name +2;
  if (($L %2) ==1)  {
    $button->set(['primary'=> true]);

  }
}
