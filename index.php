<?php 

require 'Product.php';
require 'Carrito.php';
require 'Item.php';
require 'Ecommerce.php';

$e = new Ecommerce;

if (isset($_GET['action'])) {
    if ($_GET['action'] === 'products') {
        foreach($e->getProducts() as $product) {
            echo $product->getPrice() . '<br>';
        }
    } else if ($_GET['action'] == 'comprar') {
        // Producto que esta en el catalogo
        $e->addProduct($producto);
    }
}
