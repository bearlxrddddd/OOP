<?php
class Animal1{
    protected $name;
    protected $color;
    public function makeSound($sound){
        //звук 
        $this-> name = $sound;
        echo "$sound";
    }
    public function move(){
        //движения
    }

}
class Cat extends Animal1
{

}
$cat = new Cat();

$cat -> makeSound('meow <br>');

class Dog extends Animal1{

}
$dog = new Dog();
$dog -> makeSound('voolf');