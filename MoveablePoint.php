<?php
include_once "Point.php";

class MoveablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        array_push($this->array, $this->x, $this->y, $this->xSpeed, $this->ySpeed);
        return $this->array;
    }

    public function toString()
    {
        foreach ($this->getSpeed() as $items) {
            echo $items . " ";
        }


    }

    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return $this->x ." ". $this->y;
    }
}