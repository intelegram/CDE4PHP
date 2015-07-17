<?php

namespace apps\loginx\entity;


class Dog {

    public $name;

    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

}
