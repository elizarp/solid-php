<?php
/*

OCP	The Open Closed Principle
You should be able to extend a classes behavior, without modifying it.

### Refactored Code ###

*/

interface Shape
{
    public function area();
}

class Rectangle implements Shape
{
    public function area()
    {
        return $this->width * $this->height;
    }
}

class Circle implements Shape
{
    public function area()
    {
        return $this->radius * $this->radius * pi();
    }
}

class Board
{
    public $shapes;

    public function calculateArea()
    {
        $area = 0;
        foreach ($this->shapes as $shape) {
            $area += $shape->area();
        }
        return $area;
    }
}
