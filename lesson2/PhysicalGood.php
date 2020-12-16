<?php
require_once 'AbstractGood.php';

class PhysicalGood extends AbstractGood
{
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}