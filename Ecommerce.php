<?php 

class Ecommerce 
{
    private $carrito;
    
    private $usuario;

    private $catalogo = [];

    public function __construct()
    {
        $this->carrito = new Carrito;
    }

    public function getProducts() 
    {
        for ($i = 0; $i < rand(20, 30); $i++) {
            $producto = new Product;
            $producto->setPrice(rand(99, 99999));
            $this->catalogo[] = $producto;
        }

        return $this->catalogo;
    }

    public function addProduct(Product $product, int $qty = 1) 
    {
        $this->carrito->addProduct($product, 3);
    }

    public function findProduct(int $id) 
    {
        foreach ($this->catalogo as $product) {
            if ($product->getId() === $id) {
                return $product;
            }
        }
    }

    public function register(array $data) 
    {
        // creo un usuario
    }

    public function login(array $data) 
    {
        // guarda en sesion
    }
}
