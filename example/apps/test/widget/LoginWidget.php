<?php
namespace apps\loginx\widget;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class LoginWidget extends \th\co\bpg\cde\core\CWidget{
    
    var $datacontext;
    function __construct() {
      //  $this->datacontext=new \th\co\bpg\cde\data\CDataContext(NULL);
    }

    public function render() {
        
        $view = new \th\co\bpg\cde\collection\CJView("login",
                 \th\co\bpg\cde\collection\CJViewType::HTML_VIEW_ENGINE);
       // $this->
         /// $this->getResponse()->add("name","socmhit");
        // $this->getResponse()->add("surname","chanudom");
        //$view->name= $this->getRequest()->get("name");
       // $view->surname= $this->getResponse()->get("surname");
        
      ///  print_r($this->getApplication()->routeTables);
        
        $view->route=$this->getRoute();
        $view->routes=$this->getApplication()->routeTables;
        return $view;
      //  print_r($this->getRequest());
      //  return "Hello simple widget";
    }

}