<?php
namespace th\co\bpg\cde\collection;
class CJContext {
    public $contextName;
    public $contextType;
    public $propertys = array();
    public function getPropertyValue($name) {
        foreach ($this->propertys as $p) {
            if ($p->name == $name) {
                return $p->value;
            }
        }
        return "";
    }
}
?>
    
