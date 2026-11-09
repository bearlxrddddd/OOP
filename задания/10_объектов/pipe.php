<?php
class pipe {
    public $material;
    public $size;
    public function move_something(){
        echo 'Перено какую либо жидкость';
    }
    public function rust(){
        echo 'Ржавеет';
    }
    }
    $obj = new pipe();
    $obj -> move_something();