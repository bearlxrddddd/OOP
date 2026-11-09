<?php
class jacket{
    public $zipper;
    public $material;
    public $sleeves;
    public function purchase() {
        echo 'покупка';
    }
    public function wear(){
        echo 'Носка';
    }
    public function utilization() {
        echo 'Утилизация';
    }
}
$obj = new jacket();
$obj -> wear();