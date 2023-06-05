<?php 

error_reporting(E_ERROR | E_PARSE);

class BaseController{

    public $controller_help;
    public $action_help;

    public function definePage($controller, $action)
    {
        $this->controller_help = $controller;
        $this->action_help = $action;
        
    }
}