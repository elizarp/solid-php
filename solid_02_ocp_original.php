<?php
/*

OCP	The Open Closed Principle
You should be able to extend a classes behavior, without modifying it.

*/
class Rectangle
{
    public $width;
    public $height;
}

class Board
{
    public $rectangles = [];
    public function calculateArea()
    {
        $area = 0;
        foreach ($this->rectangles as $rectangle) {
            $area += $rectangle->width * $rectangle->height;
        }
    }
}
