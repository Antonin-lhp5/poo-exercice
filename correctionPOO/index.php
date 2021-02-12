<?php 
require "controller/index_controller.php";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Exercice</title>
</head>
<body>
    <div class="container mx-auto max-w-lg mt-20">
        <div class="text-4xl font-semibold pb-2">Création de notre héro</div>
        <p><?php echo 'La vie de votre héro : ' . $hero->getHealth(); ?></p>
        <p><?php echo 'La rage de votre héro : ' . $hero->getRage(); ?></p>

        <p class="my-2"><?php echo 'Votre héro est équipé d\'un(e) ' . $hero->get_weapon() . ' et d\'un(e) ' . $hero->get_shield() . '.'?></p>
        <p><?php echo ' Votre arme vous donne ' . $hero->get_weaponDamage() . ' de force et votre bouclier vous procure ' . $hero->get_shieldValue() . ' de défense. ' ?></p>

        <p class="mt-2"><?php echo ' la vie de l\'orc : ' . $orc->getHealth() ?></p>
        <p><?php echo 'La rage de votre orc : ' . $hero->getRage(); ?></p>
    </div>
</body>
</html>
