<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {

    public function _initDoctype()
    {
        $this->bootstrap('view');
        $view = $this->getResource("view");
        $view->doctype('XHTML1_STRICT');
    }

    protected function _initAutoloader()
    {
        $loader = function($className) {
            $className = str_replace('\\', '_', $className);
            Zend_Loader_Autoloader::autoload($className);
        };

        $autoloader = Zend_Loader_Autoloader::getInstance();
        $autoloader->pushAutoloader($loader, 'Application\\');
    }

//    protected function _initDb()
//    {
//        $this->bootstrap('db');
//        $db = $this->getResource('db');
//        Zend_Registry::set('db', $db);
//    }
}
