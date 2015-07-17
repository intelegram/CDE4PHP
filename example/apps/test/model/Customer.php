<?php
namespace apps\loginx\model;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author loginx
 */
class Customer {

    public $name;
    public $surname;

    function fullName(){
        return $this->name."::".$this->surname;
    }
    function getName() {
        return $this->name;
    }

    function getSurname() {
        return $this->surname;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSurname($surname) {
        $this->surname = $surname;
    }

}
