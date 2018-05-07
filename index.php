<?php
/*
1. Пространство имен - это область видимости для классов и объектов, это позволяет разграничить разные классы по цели и назначению классы, но при этом, например, сохранить одно имя для класса, если это необходимо. Пространство имен позволяет организовать код и разложить его "по полочкам".
2. Исключения - это способ отловить возможные ошибки в потенциально опасном коде, при этом быть уверенным в том, что он не вызовет фатальных ошибок и смерти программы. Также исключения помогают управлять потоком программы и направлять его в нужное русло. Исключения похожи на блок if-else, но с расширенным функционалом в плане безопасности работы программы.
*/

function myAutoLoad($ClassName) {
    $filePath = './Product/' . $className . '.class.php';
    if (file_exists($filePath)) {
        include "$filePath";
    }
}

spl_autoload_register('myAutoLoad');

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

namespace Order;

class ShoppingCart extends SuperProduct {
    protected $pcs;
    public $total;

    public function __get($price) {
        echo $this->price;
    }

    public function removeObject($object) {
        unset($object);
    }

    public function getTotal($pcs) {
        $this->pcs = $pcs;
        $total = $this->price * $this->pcs;
    }

}

class Order extends ShoppingCart {
    public function getMyOrder {
        echo 'Ваш заказ: ' . $this->name . $this->pcs . 'шт. ' . 'Итого: ' . $this->total;
    }
}

?>
