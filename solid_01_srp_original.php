<?php
/*

SRP	The Single Responsibility Principle	
A class should have one, and only one, reason to change.

*/

class Hero{
    private $id;
    private $name;
    private $health;
    private $power;

    public function __construct($pId, $pName, $pHealth, $pPower)
    {
        $this->id = $pId;
        $this->name = $pName;
        $this->health = $pHealth;
        $this->power = $pPower;
    }

    public function toHtml(){
        $str = "<p>";
        $str .= "<span>Name: $this->name</span><br/>";
        $str .= "<span>Health: $this->health</span><br/>";
        $str .= "<span>Power: $this->power</span><br/>";
        $str .= "</p>";
        return $str;
    }
}
$hulk = new Hero(1, "Hulk", 100, 200);
$ironman = new Hero(2, "Ironman", 50, 100);

print $hulk->toHtml();
print $ironman->toHtml();
?>