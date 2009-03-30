<?php
class Piyomodel extends Commonmodel {
    
    var $_dbh;
    var $_records;
    
    function __construct() {
        try {
            $this->_dbh = new PDO('sqlite:piyo.db','','');
        } catch (PDOException $exception) {
            var_dump($exception->getMessage());
            exit();
        }
    }
    
    function foo($op1,$op2) {
        try {
            $sql = '';
            $this->_records = $this->_dbh->prepare($sql);
            $this->_records->execute();
        } catch (PDOException $exception) {
            var_dump($exception->getMessage());
            exit();
        }
    }
    
}
?>