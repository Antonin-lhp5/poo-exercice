<?php
require "model/Character.php";
require "model/Hero.php";
require "model/Orc.php";
$arrayHero = ["health" => 2000, "rage" => 0, "weapon" => 'hache de guerre de la horde', "damage" => 50000, "shield" => 'bouclier de seigneur de guerre Tauren', "armor" => 600];
$hero = new Hero($arrayHero);
$orc = new Orc(500, 0);
$hero->attacked(601);
$orc->setRandomDamage();
