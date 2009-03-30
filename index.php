<?php

function __autoload($className) {
    include_once('action/'.$className.'.php');
    include_once('model/'.$className.'.php');
    include_once('view/'.$className.'.php');
}
require_once('param.php');

$paramobject = new Param();
$actionname = $paramobject->_param['action'];
new $actionname($paramobject);

?>