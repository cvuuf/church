<?php

abstract class Core_DB_Table_Abstract extends Zend_Db_Table_Abstract

{
      function Core_DB_Table_Abstract($config = null) {

            if (isset ( $this->_use_adapter )) 
            {
                  $dbAdapters = Zend_Registry::get ( 'dbAdapters' );
                  $config = ($dbAdapters [$this->_use_adapter]);
            }
            return parent::__construct ( $config );
      }
}


?>