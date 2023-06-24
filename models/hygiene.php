<?php

class Hygiene extends Products 
{
    protected $toilet;
    public function __construct($image, $name, $category, $price, $toilet)
    {
        $this->setImage($image);
        $this->setName($name);
        $this->setCategory($category);
        $this->setPrice($price);
        $this->toilet = $toilet;
    }

    public function getToilet(){
        return $this->toilet;
    }
}