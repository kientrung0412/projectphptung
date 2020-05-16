<?php


class cart
{

    private $cartId;
    private $cartName;

    public function cart($cartId, $cartName){
        $this->cartId = $cartId;
        $this->cartName = $cartName;
    }

    public function getCartId()
    {
        return $this->cartId;
    }

    public function setCartId($cartId): void
    {
        $this->cartId = $cartId;
    }

    public function getCartName()
    {
        return $this->cartName;
    }

    public function setCartName($cartName): void
    {
        $this->cartName = $cartName;
    }

}


$bmv = new cart(1, "BMV");
echo $bmv->getCartName();