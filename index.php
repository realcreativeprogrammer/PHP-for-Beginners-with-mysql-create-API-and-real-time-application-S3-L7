<?php
abstract class Car{
    abstract function Myname() : string;
}

class Toyota extends Car{
    function Myname() : string{
        return 'implemented methond';
    }
}

$obj=new Toyota();
echo $obj->Myname();
?>