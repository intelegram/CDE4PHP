<?php
namespace apps\loginx\service;
use th\co\bpg\cde\core\CServiceBase;
use apps\loginx\interfaces\IHelloService;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;

use apps\loginx\entity\Humman;
use apps\loginx\entity\Dog;

class HelloService  extends CServiceBase implements IHelloService{
    
    public function hello($name) {
        return "Hello : " .$name;
    }

    public function test($name) {
        //$_G
       // $this->getApplication()->configs->get("about");
       // $this->getCurrentUser()->
        $view=new CJView("test",CJViewType::HTML_VIEW_ENGINE);
        $view->name=$name;
        $view->surname="chanudom";
        
        $view->datas=array("aaa","bbb","ccc");
        
        $datas[]=array();
        for($i=0;$i<10;$i++){
            $cus=new \apps\loginx\model\Customer();
            $cus->setName("ccc".$i);
             $cus->setSurname("xxxx".$i);
             $datas[]=$cus;
        }
       // $this->getResponse()->add("name","socmhit");
         $this->getResponse()->add("surname","chanudom");
        $view->cuss=$datas;
        return $view;
    }

    public function add($x, $y) {
        return $x+$y;
    }

    public function dogs() {
       $h=new Humman();
       $h->setName("somchit");
       $h->setSurname("chanudom");
       for($i=0;$i<2;$i++){
           $d=new Dog();
           $d->setName("dog-".$i);
           $h->dogs[]=$d;
       }
       $h->setCountDog(2);
       return $h;
    }

    public function save($dog) {
        //print_r($dog);
        
        return $dog;
    }

}