<?php
abstract class Clothes{
    protected $size;
    protected $color;
    private $price;
    public function __construct($size, $color, $price){
$this -> size = $size;
$this -> color = $color;
$this -> price = $price;
}
    abstract function purchase($size);
    public function wear(){
        
    }
        public function utilization(){
    }
}
class Backpack extends Clothes{
public function purchase($size)
    {
        echo "Size:" . $size;
    }
    // public function purchase(){
    //     echo 'Покупка<br>';
    // }

    // public function wear(){
    //     echo'Носка<br>';
    //     echo 'Size: ' . $this -> size;
    // }
}
$backpack = new Backpack('L', '', '');
$backpack -> purchase('L');
$backpack -> wear();