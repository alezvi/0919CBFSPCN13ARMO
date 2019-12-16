<?php 

class Product 
{
    private $price;

    public function setPrice(float $price) 
    {
        $this->price = $price;
    }

    public function getPrice() 
    {
        return $this->price;
    }
}
