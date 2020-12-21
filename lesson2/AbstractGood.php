<?php
abstract class AbstractGood
{
    public $name;
    public $price;

    public function getValue () {
        echo "Название: $this->name <br>";
        echo "Цена: $this->price <br> <br>";
    }
}