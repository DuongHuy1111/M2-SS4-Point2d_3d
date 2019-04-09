<?php

class Point3D extends Point2D
{
    private $z;
    private $arrayXYZ = [];

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    function getZ()
    {
        return $this->z;
    }

    function setZ($z)
    {
        $this->z = $z;
    }

    function getXYZ(){
        return $this->arrayXYZ;
    }

    function setXYZ($x, $y, $z)
    {
        array_push($this->arrayXYZ, $x, $y, $z);
    }

    function toString(){
        print_r($this->getXYZ());
    }
}

?>