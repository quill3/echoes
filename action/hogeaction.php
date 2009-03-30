<?php
class Hogeaction extends Commonaction {
    
    function __construct(&$paramobject) {
        
        $modelname = $paramobject->_param['model'];
        $viewname = $paramobject->_param['view'];
        $op1 = $paramobject->_param['op1'];
        $op2 = $paramobject->_param['op2'];
        
        $modelobject = new $modelname();
        $modelobject->foo($op1,$op2);
        $viewobject = new $viewname($modelobject);
        $viewobject->bar();
    }
    
}
?>