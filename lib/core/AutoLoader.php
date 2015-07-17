<?php
require dirname(__FILE__) . '/impl/CLoaderImpl.php';
spl_autoload_register(array('\th\co\bpg\cde\core\impl\CLoaderImpl', 'autoload'));
