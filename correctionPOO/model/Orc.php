<?php 
class Orc extends Character{
    private $_dammage;
    
    /**
     * Get the value of _dammage
     */ 
    public function get_dammage()
    {
        return $this->_dammage;
    }

    /**
     * Set the value of _dammage
     *
     * @return  self
     */ 

    public function set_dammage($_dammage)
    {
        $this->_dammage = $_dammage;

        return $this;
    }

    public function __construct($setHealth,$setRage)
    {
        parent::__construct($setHealth,$setRage);
        $this->dammage = $this->attack();
    }

    public function attack() {
        return rand(600,800);
    }
}