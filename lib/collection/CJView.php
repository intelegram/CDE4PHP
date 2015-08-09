<?php

namespace th\co\bpg\cde\collection;

use th\co\bpg\cde\collection\inf\CIView;
use th\co\bpg\cde\collection\impl\CJViewImpl;

class CJView extends CJViewImpl implements CIView {

    public function __construct($file, $fileType) {
        parent::__construct($file, $fileType);
    }

    public function setContentType($contextType) {
        parent::setContentType($contextType);
    }

    public function setContentDisposition($disposition) {
        parent::setContentDisposition($disposition);
    }

    public function getContentDisposition() {
        parent::getContentDisposition();
    }

    public function getContentType() {
        parent::getContentType();
    }

}
