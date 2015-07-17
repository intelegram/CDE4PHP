<?php
namespace th\co\bpg\cde\collection;
/** @MappedSuperclass */
abstract class CJEntity {

    /**
     * @Column(type="string",length=255, name="_remark") 
     */
    protected $_remark;

    /**
     * @Version @Column(type="integer",length=11, name="_version") 
     */
    protected $_version;

    /**
     * @Column(type="string",length=20, name="_status") 
     */
    protected $_status;

    /**
     * @Column(type="string",length=20, name="_createBy") 
     */
    protected $_createBy;

    /**
     * @Column(type="DateTime",length=20, name="_createTime") 
     */
    protected $_createTime;

    /**
     * @Column(type="string",length=20, name="_modifyBy") 
     */
    protected $_modifyBy;

    /**
     * @Column(type="DateTime",length=20, name="_modifyTime") 
     */
    protected $_modifyTime;

    /**
     * @Column(type="string",length=50, name="_dataDomain") 
     */
    protected $_dataDomain;

    /**
     * @Column(type="boolean",length=1, name="_active") 
     */
    protected $_active;

    /**
     * @Column(type="DateTime",length=20, name="_availableDate") 
     */
    protected $_availableDate;

    /**
     * @Column(type="DateTime",length=20, name="_expireDate") 
     */
    protected $_expireDate;

    function getRemark() {
        return $this->_remark;
    }

    function getVersion() {
        return $this->_version;
    }

    function getStatus() {
        return $this->_status;
    }

    function getCreateBy() {
        return $this->_createBy;
    }

    function getCreateTime() {
        return $this->_createTime;
    }

    function getModifyBy() {
        return $this->_modifyBy;
    }

    function getModifyTime() {
        return $this->_modifyTime;
    }

    function getDataDomain() {
        return $this->_dataDomain;
    }

    function getActive() {
        return $this->_active;
    }

    function getAvailableDate() {
        return $this->_availableDate;
    }

    function getExpireDate() {
        return $this->_expireDate;
    }

    function setRemark($_remark) {
        $this->_remark = $_remark;
    }

    function setVersion($_version) {
        $this->_version = $_version;
    }

    function setStatus($_status) {
        $this->_status = $_status;
    }

    function setCreateBy($_createBy) {
        $this->_createBy = $_createBy;
    }

    function setCreateTime($_createTime) {
        $this->_createTime = $_createTime;
    }

    function setModifyBy($_modifyBy) {
        $this->_modifyBy = $_modifyBy;
    }

    function setModifyTime($_modifyTime) {
        $this->_modifyTime = $_modifyTime;
    }

    function setDataDomain($_dataDomain) {
        $this->_dataDomain = $_dataDomain;
    }

    function setActive($_active) {
        $this->_active = $_active;
    }

    function setAvailableDate($_availableDate) {
        $this->_availableDate = $_availableDate;
    }

    function setExpireDate($_expireDate) {
        $this->_expireDate = $_expireDate;
    }

}
