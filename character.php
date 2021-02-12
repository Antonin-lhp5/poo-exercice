<?php 
class Character {
    private $_health = 500;
    private $_rage = 50;

    // getter
    public function getHealth()
    {
        return $this->_health;
    }
    // setter
    public function setHealth($Health)
    {
        return $this->_health = $Health;
    }

    public function getRage() {
        return $this->_rage;
    }

    public function setRage($Rage) {
        return $this->_rage = $Rage;
    }

    function __construct($Health, $Rage) {
        $this->setHealth($Health);
        $this->setRage($Rage);
        echo 'La vie de ton guerrier est de ' . $this->getHealth() . ' et ta rage est de ' . $this->getRage() . '. <br>';
    }

}   

$CharacterObject = new Character(500, 10);

echo 'La vie de ton guerrier est de ' . $CharacterObject->getHealth() . ' et ta rage est de ' . $CharacterObject->getRage() . '.';


// function __construct($startHealth)
//     {
//         $this->setHealth($startHealth);
//         echo 'Bienvenue, Aventurier, votre aventure commence ! <br>';
//         echo 'Votre santé est de ' . $this->getHealth() . ' point de vie. <br>';
//     }