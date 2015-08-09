<?php

namespace apps\oauth\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use th\co\bpg\cde\data\CDataContext;
use apps\oauth\interfaces\IAuthenService;
use Firebase\JWT\JWT;

class AuthenService extends CServiceBase implements IAuthenService {

    // public $datacontext;

    function __construct() {
        //  $this->datacontext = new CDataContext();
    }

    public function authorization() {
        $code = $this->getRequest()->code;
        if ($this->getRequest()->username && $this->getRequest()->password) {
            $username = $this->getRequest()->username;
            $password = $this->getRequest()->password;
            if ($username == "admin" && $password == "admin") {
                $data = base64_decode($code);
                $datas = explode("|", $data);
                $cc = (array) JWT::decode($datas[1], "123456", array('HS256'));
                $authUrl = $cc['OAUTH2_CALLBACK_URL'] . "?code=admin";
                header('Location: ' . $authUrl);
                exit;
            } else {
                $view = new CJView("signin", CJViewType::HTML_VIEW_ENGINE);
                $view->code = $code;
                $view->username = $username;
                $view->password = $password;
                return $view;
            }
        } else {
            $view = new CJView("signin", CJViewType::HTML_VIEW_ENGINE);
            $view->code = $code;
            return $view;
        }
    }

    public function authenticate() {
        $acc=new \th\co\bpg\cde\collection\CJAccount();
        $acc->code="xxx";
        return $acc;
    }

}
