<?php
require_once('base_controller.php');

class EstadoscursoController extends BaseController{

    public function listaEstados()
    {
        require_once('models/Estadoscurso.php');
        $response=array();
        $quotes = Estadocurso::AllEstados();
        $response['data'] = $quotes;
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}