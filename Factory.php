<?php

require_once('ConcreteProduct_Sofa.php');
require_once('ConcreteProduct_Chair.php');
require_once('ConcreteProduct_Bookcase.php');
require_once('ConcreteProduct_Table.php');

class Factory {

    public static function build($product_type, $sku, $name) {
        $product = "ConcreteProduct_" . ucwords($product_type);
        //product becomes "ConcreteProduct_$Type" -> ex: "ConcreteProducrt_Sofa"
        if (class_exists($product)) {
            //if the class exists
            return new $product($sku, $name);  //create new product
        } else {
            throw new Exception("Invalid product type given."); //throw exception
        }
    }

}