<?php

namespace App\Service;

use App\Entity\Cart;

class CartHandlerService
{
    public  static function getCart(): cart
    {
        if(isset($_SESSION["cart"])){
            self::setCart(new Cart())
        }
        return $_SESSION["cart"];
    }
}
