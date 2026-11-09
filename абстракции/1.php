<?php

abstract class Animal{
    protected $name;
    protected $sound;
    abstract function makeSound();
    public function jump(){
        
    }
}
class Cat extends Animal{
        public function makeSound() {
        echo "meow";
    }
    public function jump(){
        
    }
}
class Dog extends Animal{
        public function makeSound(){
echo "voolf";
    }
    public function jump(){
        
    }
}
$myCat = new Cat();
$myCat -> makeSound();
