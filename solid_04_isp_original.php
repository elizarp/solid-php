<?php
/*

ISP	The Interface Segregation Principle	
Make fine grained interfaces that are client specific.

*/
interface Birds
{
    public function setLocation($longitude, $latitude);
    public function setAltitude($altitude);
    public function renderize();
}

class Parrot implements Birds
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
    public function setLocalizacao($longitude, $latitude)
    {
        //Do something
    }

    // The Birds Interface is forcing the Penguin Class to implement this method.
    // This violates the ISP principle
    public function setAltitude($altitude)
    {
        //Do nothing ... Penguins are birds that don't fly!
    }

    public function renderize()
    {
        //Do something
    }
}
