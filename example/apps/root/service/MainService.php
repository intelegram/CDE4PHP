<?php

namespace apps\root\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use apps\root\interfaces\IMainService;

class MainService extends CServiceBase implements IMainService {

   

    function __construct() {
      
    }

    public function index() {
        $view = new CJView("home", CJViewType::HTML_VIEW_ENGINE);
        return $view; 
    }

}
