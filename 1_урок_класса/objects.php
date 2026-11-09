<?PHP
//САМ ОБЪЕКТ
class mouse
{
    public $var1;
    public $var2;
    public $var3;

    public function action1()
    {
        echo "Действие 1: ";
    }

    public function action2()
    {
        echo "Действие 2: ";
    }

    public function action3()
    {
        echo "Действие 3: ";
    }
}
//ЕГО ЗНАЧЕНИЯ
$obj = new mouse();
$obj->var1 = "";          
$obj->var2 = "";
$obj->var3 = "";

$obj->action1();
$obj->action2();
$obj->action3();