<?php
/*
1. Пространство имен - это область видимости для классов и объектов, это позволяет разграничить разные классы по цели и назначению классы, но при этом, например, сохранить одно имя для класса, если это необходимо. Пространство имен позволяет организовать код и разложить его "по полочкам".
2. Исключения - это способ отловить возможные ошибки в потенциально опасном коде, при этом быть уверенным в том, что он не вызовет фатальных ошибок и смерти программы. Также исключения помогают управлять потоком программы и направлять его в нужное русло. Исключения похожи на блок if-else, но с расширенным функционалом в плане безопасности работы программы.
*/

namespace Product;

abstract class SuperProduct {
    protected $price;
    public $category;
    public $weight;
    
    public function __construct($title, $category, $price, $weight) {
        $this->title = $title;
        $this->category = $category;
        $this->price = $price;
        $this->weight = $weight;
    }
    
    public function getPrice() {
        echo $this->price;
        echo "<br>";
    }
}

class TV extends SuperProduct {
    public $diagonal;
    public $remoteControl;
    
}


class Pen extends SuperProduct {
    public $refillColor;
    public $penLid;
}


class Duck extends SuperProduct {
    public $color;
    public $age;
    
}


?>