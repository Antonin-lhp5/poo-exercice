<?php 
require "model/Character.php";
require "model/Hero.php";
require "model/Orc.php";

// $character = new Character(0, 0);
$hero = new Hero(2000, 0, 'épée en mousse', 250, 'bouclier en savon', 600);
// $hero->attacked(30);
$orc = new Orc(500,0);
$orc->get_dammage($hero);



