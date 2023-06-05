<?php
require_once('base_controller.php');

class PlataformasController extends BaseController{

    public function listaPlataformas()
    {
        require_once('models/Plataforma.php');
        $response = array();
        $plataformas = Plataforma::AllPlataformas();
        $response['data'] = $plataformas;
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function submitPlataforma()
    {
        require_once('models/Plataforma.php');
        $response = array();
        $res = Plataforma::submit($_POST['nome_plataforma'], $_POST['descricao_plataforma'], $_POST['link_plataforma'], $_POST['classname_plataforma']);
        $response['data'] = $res;
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}