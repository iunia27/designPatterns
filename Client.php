<?php

require_once 'Factory.php';

class Client {

    public function create($product_type, $sku, $name) {
        //build a new product in the factory
        $product = Factory::build($product_type, $sku, $name);
        return $product;
    }

}