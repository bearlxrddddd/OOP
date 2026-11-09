<?php
trait myCreeting{
    private $name;
    private $person;
    public function sayHello($name){
echo 'Hello! ' . $name . '<br>';
    }
    public function  greet($person){
        echo 'Здравствуйте ' . $person;
    }
}

class Person{
    use myCreeting;
    // public function sayHello()
    // {
    //     echo 'hello goose'; 
    // }
}
$person = new Person();
$person-> sayHello('Mirzhan');
$person-> greet('Миржан');
