<?php

class Products
{
    public $image;
    public $name;
    public $category;
    public $price;

    public function __construct($image, $name, $category, $price)
    {
        $this->setImage($image);
        $this->setName($name);
        $this->setCategory($category);
        $this->setPrice($price);
    }

    public function getImage(){
        return $this->image;
    }
    public function getName(){
        return $this->name;
    }
    public function getCategory(){
        return $this->category;
    }
    public function getPrice(){
        return $this->price;
    }
  
    public function setImage($image){
        $this->image = $image;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setCategory($category){
        $this->category = $category;
    }
    public function setPrice($price){
        $this->price = $price;
    }
}


