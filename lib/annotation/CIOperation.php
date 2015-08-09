<?php
namespace th\co\bpg\cde\annotation;
/**
 *@name xxxx
 *@uri /xxx
 *@param type name Description
 *@param type name Description
 *@description xxxx
 *@return type name Description
 *@authen true|false
 *@resource *
 */
class CIOperation{
    public $name;
    public $uri;
    public $params=array();
    public $returnName;
    public $returnType;
    public $returnDesc;
    public $description;
    public $sitemap=false;
    public $authen=false;
    public $resource="*";
}
?>
