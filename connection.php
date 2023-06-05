<?php 

class Db{

    private static $instance = NULL;

    private function __construct(){

    }

    private function __clone(){}

    public static function getInstance(){

        self::$instance = new mysqli("localhost","root", "", "meu_britix");
        return self::$instance;
    }
}