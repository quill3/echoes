<?php
class Param {
    
    var $_param;
    
    function __construct() {
        
        require_once('config.php');
        
        foreach ( $regexpparam as $key => $value ) {
            if (preg_match($value,$_REQUEST[$key])) {
                $this->_param[$key] = $_REQUEST[$key];
            } else {
                $this->_param[$key] = $defaultparam[$key];
            }
            if ($key == 'action' || $key == 'model' || $key == 'view') {
                if (file_exists($key.'/'.$this->_param[$key].$key.'.php') &&
                $this->_param[$key] != 'common') {
                    $this->_param[$key] .= $key;
                } else {
                    $this->_param[$key] = $defaultparam[$key].$key;
                }
            }
        }
    }
    
}
?>