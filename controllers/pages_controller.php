<?php

require_once('base_controller.php');

class PagesController extends BaseController
{
    public function home(){

        session_start();
        require_once('views/pages/home.php');
    }
}