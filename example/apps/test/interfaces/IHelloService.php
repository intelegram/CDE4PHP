<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace apps\loginx\interfaces;


/**
 * @name HelloService
 * @uri /testx
 * @description ทดสอบ
 */
interface IHelloService {
   
    /**
     * @name hello
     * @uri /hello
     * @param String name  Description 
     * @return String hello Description
     * @description xxxxx
     */ 
    public function hello($name);
    
     /**
     * @name test
     * @uri /view
     * @param String name  Description 
     * @return html test Description
     * @description xxxxx
     */ 
    public function test($name);
    
    
    /**
     * @name add
     * @uri /add
     * @param int x Description
     * @param int y Description
     * @return int add Description
     * @description xxxx
     */
    public function add($x,$y);
    
    
    /**
     * @name dogs
     * @uri /dogs
     * @return int dogs Description
     * @description xxxx
     */
    public function dogs();
    
     /**
     * @name save
     * @uri /dogs/save
     * @param apps\loginx\entity\Humman dog Description
     * @return int dogs Description
     * @description xxxx
     */
    public function save($dog);
}
