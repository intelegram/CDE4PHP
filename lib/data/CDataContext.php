<?php
namespace th\co\bpg\cde\data;
use  th\co\bpg\cde\data\inf\CIDataContext;
use  th\co\bpg\cde\data\impl\CDataContextImpl;

class CDataContext extends CDataContextImpl implements CIDataContext {

    public function __construct($contextName=NULL) { 
       return parent::__construct($contextName);
    }
    public function Begin() {
        return parent::Begin();
    }

    public function Commit() {
        return parent::Commit();
    }

    public function Rollback() {
        return parent::Rollback();
    }

    public function getLastMessage() {
        return parent::getLastMessage();
    }

    public function getObject($object, $params = NULL, $MaxResults = NULL, $FirstResult = NULL) {
        return parent::getObject($object, $params, $MaxResults, $FirstResult);
    }

    public function nativeQuery($object, $params = NULL, $MaxResults = NULL, $FirstResult = NULL) {
        return parent::nativeQuery($object, $params, $MaxResults, $FirstResult);
    }
    
    public function pdoQuery($ql, $params = null,$className=null) {
        return parent::pdoQuery($ql, $params,$className);
    }

    public function removeObject(&$object, $params = NULL) {
        return parent::removeObject($object, $params);
    }

    public function saveObject(&$object, $params = NULL) {
        return parent::saveObject($object, $params);
    }

    public function updateObject(&$object, $params = NULL) {
        return parent::updateObject($object, $params);
    }

}
