<?php
class Fugaview extends Commonview {
    
    var $_html;
    
    function __construct(&$modelobject) {
        foreach ( $modelobject->_records as $rs ) {
            $this->_html .= $rs[baz];
        }
    }
    function bar () {
        echo $this->_html;
    }

}
?>