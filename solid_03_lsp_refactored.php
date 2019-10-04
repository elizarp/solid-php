<?php
/*

LSP	The Liskov Substitution Principle
Derived classes must be substitutable for their base classes.

### Refactored Code ###

*/

interface Quadrilateral
{
  public function setHeight($h);

  public function setWidth($w);

  public function getArea();
}

class Rectangle implements Quadrilateral
{ };

class Square implements Quadrilateral
{ };
