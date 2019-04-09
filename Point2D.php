<?php

class Point2D
{
    private $x;
    private $y;
    private $arrayXY = [];

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    function getX()
    {
        return $this->x;
    }

    function getY()
    {
        return $this->y;
    }

    function setX($x)
    {
        $this->x = $x;
    }

    function setY($y)
    {
        $this->y = $y;
    }

    function setXY($x, $y)
    {
        array_push($this->arrayXY, $x, $y);
    }

    function getXY()
    {
        return $this->arrayXY;
    }

    function toString()
    {
        print_r($this->getXY());
    }

}

?>