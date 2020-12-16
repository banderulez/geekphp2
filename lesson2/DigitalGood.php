<?php
require_once 'PhysicalGood.php';

    class DigitalGood extends PhysicalGood {
        public function __construct($name, $price)
        {
            parent::__construct($name, $price);
            $this->setValue($price);
        }
        private function setValue ($price)
        {
            $this->price = $price / 2;
        }

    }