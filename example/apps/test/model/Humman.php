<?php
namespace apps\loginx\entity;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author somchit
 */
class Humman {
    //put your code here
    public $name;
    public $surname;
    public $countDog;
    public $dogs;
    
    function getName() {
        return $this->name;
    }

    function getSurname() {
        return $this->surname;
    }

    function getDogs() {
        return $this->dogs;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSurname($surname) {
        $this->surname = $surname;
    }

    function setDogs($dogs) {
        $this->dogs = $dogs;
    }
    
    function getCountDog() {
        return $this->countDog;
    }

    function setCountDog($countDog) {
        $this->countDog = $countDog;
    }




    
}
