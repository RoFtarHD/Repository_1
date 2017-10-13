<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Lol');
$app->initLayout('Centered');

$button1 = $app ->add('Button');
$button1 -> set('1');
$button1 -> addClass('mini red');

$button2 = $app ->add('Button');
$button2 -> set('2');
$button2 -> addClass('massive blue');


$button3 = $app ->add('Button');
$button3 -> set('3');
$button3 -> addClass('standart yellow');

$button1 ->link(['1', 'kk' => '1']);

$button2 ->link(['1', 'kk' => '2']);

$button3 ->link(['1', 'kk' => '3']);
