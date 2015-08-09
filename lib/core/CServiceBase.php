<?php
namespace th\co\bpg\cde\core;
use th\co\bpg\cde\core\inf\CIServiceBase;
use th\co\bpg\cde\core\impl\CServiceBaseImpl;
abstract class CServiceBase extends CServiceBaseImpl implements CIServiceBase {
    
    public function getApplication() {
        return parent::getApplication();
    }

    public function getContentType() {
         return parent::getContentType();
    }

    public function getCurrentUser() {
         return parent::getCurrentUser();
    }
    
    public function getRequest() {
         return parent::getRequest();
    }

    public function getResponse() {
         return parent::getResponse();
    }

    public function getRoute() {
         return parent::getRoute();
    }

    public function getStatusCode() {
         return parent::getStatusCode();
    }

   

    public function setContentType($contentType) {
        parent::setContentType($contentType);
    }

  
   

    public function setResponse($response) {
        parent::setRoute($response);
    }

   
    public function setStatusCode($statusCode) {
        parent::setStatusCode($statusCode);
    }

    public function uploadFile($Option, $dirname, $filename, $userfile) {
        parent::uploadFile($Option, $dirname, $filename, $userfile);
    }

    
    public function setContentDisposition($disposition) {
        parent::setContentDisposition($disposition);
    }

    public function getContentDisposition() {
        parent::getContentDisposition();
    }
}
