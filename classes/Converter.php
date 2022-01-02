<?php
namespace classes;

class Converter{
    public $info;

    public function __construct($information)  //конструктор класса 
    {
        $this->info = $information;
    }

    public function getRadian(){
        $grad = (float) $this->info;
        $result = $grad * pi() / 180;
        return $result;
    }

    public function getClock(){
        $timegr = (int) $this->info;
        $hours = intdiv($timegr * 12, 360);
        $minutes = (($timegr * 12 /360) - $hours) * 60 ;
        if($hours < 10){
            $hours = "0".$hours;
        }
        if($minutes < 10){
            $minutes = "0".$minutes;
        }
        $result = $hours.":".$minutes;
        return $result;
    }
}