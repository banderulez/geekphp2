<?php
include_once 'PhysicalGood.php';

class WeightGood extends PhysicalGood {
    public $weight;
    public $oneJoke;

    public function __construct($name, $price, $weight)
    {
        parent::__construct($name, $price);
        $this->weight = $weight;
        $this->oneJoke = $price;
        $this->setValue($price);
    }
    private function setValue ($price) {
        $this->price = $price * $this->weight;
    }
    public function getValue()
    {
        parent::getValue();
        echo "Цена за кг: $this->oneJoke <br>";
        echo "Общий вес: $this->weight кг <br>";
    }
}