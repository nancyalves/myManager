<?php
require_once('base_controller.php');

class CategoriasController extends BaseController{

      public function listaCategorias()
    {
        require_once('models/Categoria.php');
        $response=array();
        $quotes = Categoria::AllCategorias();
        $response['data'] = $quotes;
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function submitCategoria()
    {
        require_once('models/Categoria.php');
        $response = array();
        $res = Categoria::submit($_POST['nome_categoria'], $_POST['descricao_categoria'], $_POST['classname_categoria']);
        $response['data'] = $res;
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}