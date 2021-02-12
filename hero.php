<?php 
require_once('character.php');
class Hero extends Character {
    private $_weapon;
    private $_weaponDamage;
    private $_shield;
    private $_shieldValue;
    private $_attack;

     // getter weapon
     public function getWeapon()
     {
         return $this->_weapon;
     }
     // setter weapon
     public function setWeapon($Weapon)
     {
         return $this->_weapon = $Weapon;
     }

     // getter weapon damage
     public function getWeaponDamage()
     {
         return $this->_weaponDamage;
     }
     // setter weapon damage
     public function setWeaponDamage($weaponDamage)
     {
         return $this->_weaponDamage = $weaponDamage;
     }

     // getter shield
     public function getShield()
     {
         return $this->_shield;
     }
     // setter shield
     public function setShield($shield)
     {
         return $this->_shield = $shield;
     }

     // getter shield
     public function getShieldValue()
     {
         return $this->_shieldValue;
     }
     // setter shield
     public function setShieldValue($shieldValue)
     {
         return $this->_shieldValue = $shieldValue;
     }

       // getter
       public function getAttack()
       {
           return $this->_attack;
       }
       // setter
       public function setAttack($startAttack)
       {
           return $this->_attack = $startAttack;
       }

    //  method attacked
        public function takeAttack($startAttack) 
        {
            $this->_health -= $startAttack;
        }
  

     function __construct($Weapon, $Shield, $weaponDamage, $shieldValue) {
        $this->setWeapon($Weapon);
        $this->setShield($Shield);
        $this->setWeaponDamage($weaponDamage);
        $this->setshieldValue($shieldValue);

        echo '<p> L\'arme de ton héro est un ' . '<strong>' . $this->getWeapon() . '</strong>' . ' d\'une force de ' . '<strong>' .$this->getWeaponDamage() . '</strong>' . ' et ton bouclier est ' . '<strong>' . $this->getShield() . '</strong>' . ' avec ' . '<strong>' . $this->getShieldValue() . '</strong>' . ' de défense' .'</p>';
    }
}

$CharacterObject = new Hero('baton enchanté', 'bouclier magique', 50, 15);

?>