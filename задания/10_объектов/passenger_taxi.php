<?php
class Passenger_taxi{
    public $landing_point;
    public $drop_off_point;
    public function openDoors(){
        echo 'открыл двери';
    }
    public function closeDoors(){
        echo 'закрыл двери';
    }
}
$obj = new Passenger_taxi();
$obj -> openDoors();