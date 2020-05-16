<?php


class car
{

    private $cartId;
    private $cartName;

    public function car($cartId, $cartName){
        $this->cartId = $cartId;
        $this->cartName = $cartName;
    }

    public function getCarId()
    {
        return $this->cartId;
    }

    public function setCarId($cartId): void
    {
        $this->cartId = $cartId;
    }

    public function getCarName()
    {
        return $this->cartName;
    }

    public function setCarName($cartName): void
    {
        $this->cartName = $cartName;
    }

}

