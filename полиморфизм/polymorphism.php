<?php
abstract class Animals{
    protected $name;
    protected $sound;
    abstract function Sing();
    function __construct($name, $sound)
    {
        $this -> name = $name;
        $this -> sound = $sound;
    }
}
class Tiger extends Animals
{
    public function Sing()
    {
        echo "yoyoyoyoyoyyo";
    }
}
class Bear extends Animals
{
    public function Sing()
    {
        echo "";
    }
}
class Owner
{
    public function Move(Animals $animal)
    {
        return $animal -> Sing();
    }
}
$tiger = new Tiger('Тигр','рррррр');
// $Tiger -> Sing();
$bear = new Bear('Медведь', 'грррррр');
$owner = new Owner();
$owner -> Move($tiger);
