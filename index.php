<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Lol');
$app->initLayout('Centered');

$button1 = $app ->add('Button');
$button1 -> set('Button1');
$button1 -> addClass('mini red');

$button2 = $app ->add('Button');
$button2 -> set('Button2');
$button2 -> addClass('massive blue');


$button3 = $app ->add('Button');
$button3 -> set('Button3');
$button3 -> addClass('standart yellow');

$button1 ->link('r1.txt');

$button4 = $app ->add('Button');
$button4 -> set('Button4');
$button4 -> addClass('big grey');

$button2 ->link(['1', 'kk' => '248' , 'bb'=>'Detected']);
