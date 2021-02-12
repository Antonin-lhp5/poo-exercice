<?php
class Hero extends Character
{
    private $_weapon;
    private $_weaponDamage;
    private $_shield;
    private $_shieldValue;
    /**
     * Get the value of _weapon
     */
    public function get_weapon()
    {
        return $this->_weapon;
    }
    /**
     * Set the value of _weapon
     *
     * @return  self
     */
    public function set_weapon($_weapon)
    {
        $this->_weapon = $_weapon;

        return $this;
    }
    /**
     * Get the value of _shield
     */
    public function get_shield()
    {
        return $this->_shield;
    }
    /**
     * Set the value of _shield
     *
     * @return  self
     */
    public function set_shield($_shield)
    {
        $this->_shield = $_shield;

        return $this;
    }
    /**
     * Get the value of _weaponDamage
     */
    public function get_weaponDamage()
    {
        return $this->_weaponDamage;
    }
    /**
     * Set the value of _weaponDamage
     *
     * @return  self
     */
    public function set_weaponDamage($_weaponDamage)
    {
        $this->_weaponDamage = $_weaponDamage;

        return $this;
    }
    /**
     * Get the value of _shieldValue
     */
    public function get_shieldValue()
    {
        return $this->_shieldValue;
    }
    /**
     * Set the value of _shieldValue
     *
     * @return  self
     */
    public function set_shieldValue($_shieldValue)
    {
        $this->_shieldValue = $_shieldValue;

        return $this;
    }
    public function attacked($hit)
    {
        $noProtectedHit = $hit - $this->get_shieldValue();
        
        if ($noProtectedHit >= 0) {
            $this->setHealth($this->getHealth() - $noProtectedHit);
        }
        $this->addRage();
    }
    public function addRage(){
        parent::setRage(parent::getRage()+30);
    }
    public function __construct($arrayHero)
    {
        parent::__construct($arrayHero["health"], $arrayHero["rage"]);
        $this->set_weapon($arrayHero["weapon"])->set_weaponDamage($arrayHero["damage"])->set_shield($arrayHero["shield"])->set_shieldValue($arrayHero["armor"]);
    }
}
