<?php

class Food extends Products 
{
    protected $weight;
    protected $expiry;
    public function __construct($image, $name, $category, $price, $weight, $expiry)
    {
        $this->setImage($image);
        $this->setName($name);
        $this->setCategory($category);
        $this->setPrice($price);
        $this->weight = $weight;
        $this->expiry = $expiry;
    }

    public function getWeight(){
        return $this->weight;
    }
    public function getExpiry(){
        return $this->expiry;
    }
}