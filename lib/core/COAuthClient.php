<?php

namespace th\co\bpg\cde\core;

use th\co\bpg\cde\core\inf\CIOAuthClient;
use th\co\bpg\cde\core\impl\COAuthClientImpl;

abstract class COAuthClient extends COAuthClientImpl implements CIOAuthClient {

    public function __construct($params) {
        parent::__construct($params);
    }
    
    public function authorization() {
        parent::authorization();
    }
    
    public function authenticate(){
        return parent::authenticate();
    }

    public function getAccessToken() {
        return parent::getAccessToken();
    }

    public function getUserInfo() {
        return parent::getUserInfo();
    }


}
