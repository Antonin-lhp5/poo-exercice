<?php
require "controller/index_controller.php";

echo $hero->getHealth()." ". $hero->getRage(), $hero->get_weapon(), $hero->get_weaponDamage(), $hero->get_shield(), $hero->get_shieldValue();
echo "<p>".$orc->getHealth()." " . $orc->getRage()."</p>";
echo "<p>".$orc->get_damage()."</p>";