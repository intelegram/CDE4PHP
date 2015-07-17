<?php
namespace th\co\bpg\cde\core;
abstract class CWidget extends impl\CWidgetImpl{
    abstract  function render();
    
    function getRequest() {
        return parent::getRequest();
    }

    function getResponse() {
        return parent::getResponse();
    }

    function getCurrentUser() {
        return parent::getCurrentUser();
    }

    function getApplication() {
        return parent::getApplication();
    }

    function getRoute() {
        return parent::getRoute();
    }
}
