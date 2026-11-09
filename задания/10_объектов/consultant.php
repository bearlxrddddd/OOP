<?php
class consultant{
public $ability_consulting;
public $knowledge;

public function comeOver(){
    echo 'Пришел на работу';
    }
public function consultation(){
echo 'Консультация';
}
public function sale() {
    echo 'Продажа';
}
}
$obj = new consultant();
$obj -> comeOver();