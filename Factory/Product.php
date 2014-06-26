<?php

abstract class Product {

    private $sku;
    private $name;
    protected $type = null;

    //creates a new product
    public function __construct($sku, $name) {
        $this->sku = $sku;
        $this->name = $name;
    }

    //getter for sku
    public function getSku() {
        return $this->sku;
    }

    //getter for name
    public function getName() {
        return $this->name;
    }

    //getter for type
    public function getType() {
        return $this->type;
    }

}

