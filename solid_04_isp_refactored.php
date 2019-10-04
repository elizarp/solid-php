<?php
/*

ISP	The Interface Segregation Principle	
Make fine grained interfaces that are client specific.

### Refactored Code ###

*/

interface Birds
{
    public function setLocation($longitude, $latitude);
    public function renderize();
}

interface FlyingBirds extends Birds
{
    public function setAltitude($altitude);
}

class Parrot implements FlyingBirds
{
    public function setLocation($longitude, $latitude)
    {
        //Do something
    }

    public function setAltitude($altitude)
    {
        //Do something
    }

    public function renderize()
    {
        //Do something
    }
}

class Penguin implements Birds
{
    public function setLocation($longitude, $latitude)
    {
        //Do something
    }

    public function renderize()
    {
        //Do something
    }
}
