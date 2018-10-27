<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 27.10.2018
 * Time: 11:09
 */

class Slesar
{
    /*Артибуты*/
    public $name;
    public $surname;
    public $alkash;
    public $zapoy;

    public function __construct($name, $surname, $alkash)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->alkash = $alkash;
        if ($this->alkash > 50) {
            $this->zapoy = true;
        }
    }

    public function bitten($q)
    {
        return $this->zapoy * $q > 50;
    }

    public function present()
    {
        echo 'Имя ' . $this->name . '<p>' . ' Фамилия ' . $this->surname . '<p>';
        if ($this->zapoy) {
            echo 'Вероятность запоя 100%' . $this->name . ' в запое на работе';
        } else {
            echo 'На удивление трезв';
        }


        if($this->isWorked()){
            echo 'It`s Worked';
        }
    }

    public function isWorked(){
         return !$this->bitten(rand(0,100)) &&!$this->zapoy;
    }
}

$object = new Slesar('Vasya', 'Pupkin', rand(10, 100));
$object->present();

/*
 * if($object->isWorked()){
    echo 'It`s Worked';
}*/
