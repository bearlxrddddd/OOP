<?php
// цвет, год выпуска, производитель автщ
class car
{//атрибуты класса авто
    private $color;
    private $year;
    public $model;

    function __construct($color, $year, $model){
    $this -> changeColor($color);
    $this -> year = $year;
    $this -> model = $model;
    }
    //меняем данные привата 
public function changeColor($color){
if (is_string($color)) {
$this -> color = $color;
}else
die('цвет должен быть строкой');
}
public function displayColor(){
return $this-> color;
}
//описание метода
public function startEngine(){
    //большой кусок 
    echo 'ready<br>';
}

public function go(){
    //большой кусок 
    echo 'go';
}
    }

// $myCar = new car();
$obj = new car('red', 2020, 'lada');
// $obj -> color = 'red';
// $obj -> changeColor(1);
echo $obj ->displayColor();
