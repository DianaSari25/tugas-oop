<?php

class Person {
    public $firstName;
    public $lastName;

    function sayHello($name){
        echo "Hello $name, my name is $this->firstName $this->lastName <br>";
    }

    function sayGoodBye($name){
        echo "Good Bye $name <br>";
    }
}

class Car {
    public $name;
    public $brand;

    function startEngine(){
        echo "Engine $this->name ($this->brand) started <br>";
    }

    function stopEngine(){
        echo "Engine $this->name ($this->brand) stopped <br>";
    }
}

$eko = new Person();
$eko->firstName = "Eko";
$eko->lastName = "Eko";

$joko = new Person();
$joko->firstName = "Joko";
$joko->lastName = "Nugroho";

$eko->sayHello("Joko");
$joko->sayHello("Budi");
$eko->sayGoodBye("Eko");

echo "<hr>";

$car1 = new Car();
$car1->name = "Almaz";
$car1->brand = "Wuling";
$car1->startEngine();

$car2 = new Car();
$car2->name = "Avanza";
$car2->brand = "Toyota";
$car2->startEngine();

$car3 = new Car();
$car3->name = "Mobilio";
$car3->brand = "Honda";
$car3->stopEngine();

?>