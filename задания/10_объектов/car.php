<?php

abstract class Vehicle
{
    protected $color;
    protected $year;
    protected $model;
    public $engine;
abstract function EngineOn();
public function EngineOff()
    {
        echo "";
    }
}
class Car extends Vehicle
{
    public function __construct($color, $year, $model, $newEngine){
        $this -> color = $color;
        $this -> year = $year;
        $this -> model = $model;
        $this -> engine = $newEngine;
    }
	public function EngineOn()
    { 
        // $this -> engine->on();
    }
    public function EngineOff()
    {
        
    }
    public function changeColor($color)
    {
        echo "$color<br>";
    }
}
class Engine extends Vehicle
{
public function EngineOn() 
    {
        echo 'on <br>';
    }
// public function Off()
//     {

//     }
}
trait ExampleUse
{
    public function Way()
    {
        // echo 'Norm дорога';
    }
}
class ExampleTrait{
    use ExampleUse;
}

class Key 
{
    public function Go(Vehicle $key)
    {
        return $key -> EngineOn();
    }
}
$newEngine = new Engine();
$myCar = new Car('red',1975,'VAz', $newEngine);
$myCar -> EngineOn();
$myCar -> EngineOff();
$myCar -> changeColor('');
$exampleTrait = new ExampleTrait();
$exampleTrait -> Way();
$key = new Key();
$key -> Go($newEngine);