<?php

require_once('Animal.php');
require_once('Ape.php');
require_once('frog_.php');

$kambing = new Animal('Shaun');
echo "Name : $kambing->name"."<br>";
echo "Legs : $kambing->legs"."<br>";
echo "Cool_Blooded : $kambing->cool_blooded"."<br><br>";

$frog = new frog('Buduk');
$jump= $frog->jump();
echo "Name : $frog->name"."<br>";
echo "Legs : $frog->legs"."<br>";
echo "Cool_Blooded : $frog->cool_blooded"."<br>";
echo "Jump : $jump"."<br><br>";

$ape = new Ape('Kera Sakti');
$yell= $ape->yell();
echo "Name : $ape->name"."<br>";
echo "Legs : $ape->legs"."<br>";
echo "Cool_Blooded : $kambing->cool_blooded"."<br>";
echo "Yell : $yell"."<br><br>";


?>
