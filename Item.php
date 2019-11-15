<?php 

class Item {
    private $carrito;
    private $product;
    private $qty = 1;

    public function setProduct(Product $product)
    {
        $this->product = $product;
    }

    public function setQty(int $qty = 1)
    {
        $this->qty = $qty;
    }

    public function getTotal() {
        return $this->product->getPrice() * $this->qty;
    }
}