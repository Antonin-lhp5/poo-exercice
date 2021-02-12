<?php 
class Orc extends Character {
    private $_damage;
    
    public function __construct($setHealth,$setRage)
    {
        parent::__construct($setHealth,$setRage);
    }
    /**
     * Get the value of _damage
     */ 
    public function get_damage()
    {
        return $this->_damage;
    }

    /**
     * Set the value of _damage
     *
     * @return  self
     */ 
    public function set_damage($_damage)
    {
        $this->_damage = $_damage;

        return $this;
    }
    public function setRandomDamage(){
        $this->set_damage(rand(600,800));
    }
   

}