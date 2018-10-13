<?php

class Car
{
    var $color;
    function Car($color = "green"){
        return $this -> color = $color;
    }
    function What_color(){
        return $this -> color;
    }
}

$c = new Car("red");
echo $c -> What_color();
