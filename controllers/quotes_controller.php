<?php

require_once('base_controller.php');

class QuotesController extends BaseController{
    
    public function index()
    {
        require_once('views/quotes/index.php');
    }
    public function create(){

        session_start();
        require_once('views/quotes/create.php');
    }

    public function submitCurso()
    {
        require_once('models/Quote.php');
        $response=array();
        $res = Quote::submit($_POST['nomecurso'], $_POST['linkcurso'], $_POST['formadorcurso'],$_POST['duracaocurso'],$_POST['descricaocurso'],$_POST['dataIniciocurso'],
                            $_POST['dataFimcurso'], $_POST['categoriacurso'], $_POST['plataformacurso'], $_POST['estadocurso'],$_POST['prioridadecurso'],$_POST['obscurso']);
                            
        $response['data'] = $res;
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function getCursos()
    {
        require_once('models/Quote.php');
        $response=array();
        $quotes = Quote::allCursos();
        $response['data'] = $quotes;
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}