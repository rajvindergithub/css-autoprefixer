<?php 

include ('vendor/autoload.php');

use Padaliyajay\PHPAutoprefixer\Autoprefixer;

$unprefixed_css = file_get_contents('css/main.css'); // CSS code

$autoprefixer = new Autoprefixer($unprefixed_css);
$prefixed_css = $autoprefixer->compile();

echo $prefixed_css; 

?>