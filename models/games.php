<?php

class Games extends Products 
{
    protected $material;
    public function __construct($image, $name, $category, $price, $material)
    {
        $this->setImage($image);
        $this->setName($name);
        $this->setCategory($category);
        $this->setPrice($price);
        $this->material = $material;
    }

    public function getMaterial(){
        return $this->material;
    }
}