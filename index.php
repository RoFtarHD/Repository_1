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
$button3 -> addClass('big yellow');

$button1 ->link('r1.txt');
