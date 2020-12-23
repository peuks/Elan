<?php

use App\Entity;
use App\Entity\Product;

class Cart
{
    private static $Linemodel = [
        "product" => "",
        "quantity" => "",
        "total" => ""
    ];

    private $lines = [];
    private $nbProducts = 0;
    private $total = 0;

    function addProduct(Product $product)
    {
        $self = self::$Linemodel; //on crée une nouvelle ligne de panier
        $line["product"] = $product; //on ajoute le produit dans la ligne
        $line["quantity"]++; // On incrémente la quantité de la ligne
        $line["total"] = $product->getPrice() * $line["quantity"];

        // $this->ligne[] =;
        // this->nbproducts += $ligne["quantity"];
    }
    function removeProduct($var = null)
    {
        # code...
    }
    function getLines($var = null)
    {
        # code...
    }
    function getNbProducts($var = null)
    {
        # code...
    }
    function isEmpty($var = null)
    {
        # code...
    }
    function getTotal($var = null)
    {
        # code...
    }
}
