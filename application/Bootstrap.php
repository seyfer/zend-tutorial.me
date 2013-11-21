<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {

    public function _initDoctype()
    {
        $this->bootstrap('view');
        $view = $this->getResource("view");
        $view->doctype('XHTML1_STRICT');
    }

//    protected function _initDb()
//    {
//        $this->bootstrap('db');
//        $db = $this->getResource('db');
//        Zend_Registry::set('db', $db);
//    }

}
