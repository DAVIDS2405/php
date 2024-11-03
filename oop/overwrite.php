<?php

class Discount
{
    protected $discount = 0;


    public function __construct($discount)
    {
        $this->discount = $discount;
    }

    public function getDiscount($price)
    {
        echo "Se aplica un descuento \n";

        return $price * $this->discount;
    }
}

class SpecialDiscount extends Discount
{
    const SPECIAL_DISCOUNT = 2;


    // sobre escritura
    public function getDiscount($price)
    {
        echo "Se aplico un descuento especial";
        return $price * $this->discount * self::SPECIAL_DISCOUNT;
    }
}


$discount = new SpecialDiscount(0.1);
$discountAmount = $discount->getDiscount(100);
echo $discount;
