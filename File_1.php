<?php
require 'vendor.autoload.php'
$app = new \atk4\ui\App('Lol');
$app->initLayout('Centered');
$button = $app ->add('Button');
$button -> set('Button1');
