<?php
class Character
{
    private $_health;
    private $_rage;
    public function __construct($setHealth, $setRage)
    {
        $this->setHealth($setHealth)->setRage($setRage);
    }
    /**
     * get life value
     * @return int
     */
    
    public function getHealth()
    {
        return $this->_health;
    }
    public function setHealth($setHealth)
    {
        $this->_health = $setHealth;
        return $this;
    }
    public function getRage()
    {
        return $this->_rage;
    }
    public function setRage($setRage)
    {
        $this->_rage = $setRage;
        return $this;
    }
}
