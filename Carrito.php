<?php

class Carrito 
{
    private $items = [];

    public function addProduct(Product $product, int $qty = 1) 
    {
        $item = new Item;
        $item->setProduct($product);
        $item->setQty($qty);

        $this->items[] = $item;
    }

    public function getTotal() 
    {
        $total = 0;

        foreach ($this->items as $item) {
            $total = $total + $item->getTotal();
        }

        return $total;
    }
}

