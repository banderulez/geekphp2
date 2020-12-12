<?php

            class products {	

            public $id_product;
            public $category;
            public $name;
            public $description;
            public $price;

            function __construct($id_product, $category, $name, $description, $price) {
                    $this->id_product = $id_product;
                    $this->category = $category;
                    $this->name = $name;
                    $this->description = $description;
                    $this->price = $price;							
            }

            function getInfo() {
                    $info  = "идентификатор: {$this->id_product};";
                    $info .= "категория: {$this->category};";
                    $info .= "название: {$this->name};";
                    $info .= "описание: {$this->quantityInPack};";
                    $info .= "цена: {$this->price} руб.";
                    return $info;
            }

        }

        $goods = new products (1, "Жесткие диски" , "WD Blue", "SATA III, 5400 rpm, кэш память - 128 Мб, объем 1ТБ", 3799);
        echo $goods->getInfo(); 
