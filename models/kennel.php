<?php

class Kennel extends Products 
{
    protected $kennelDimension;
    public function __construct($image, $name, $category, $price, $kennelDimension)
    {
        $this->setImage($image);
        $this->setName($name);
        $this->setCategory($category);
        $this->setPrice($price);
        $this->kennelDimension = $kennelDimension;
    }

    public function getKennelDimension(){
        return $this->kennelDimension;
    }
}