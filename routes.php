<?php
require_once('connection.php');
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

/* Note: Nancy
PHP allows to user modify some og its settings mentioned in php.init using ini_set(). This function requires two string arguments.
The first one is the name of the setting to be modified and the second one is the new value to assigned to it.
This 3 lines of code will quickly show all PHP errors.
--------------------------------------------------------------
Is the same to go to PHP.ini file and enable this var :
PHP.ini
display_errors = on
*/

$controllers = array(
    'pages'         => ['home', 'error', 'getNotification', 'getTask'],
    'auth'          => ['login', 'autenticate','logout','getUser'],
    'quotes'        => ['create','index', 'listaCategorias', 'submitCurso','submit','listaEstados','getCursos','allCursos'],
    'plataformas'   => ['listaPlataformas','submitPlataforma', 'submit'],
    'categorias'   => ['listaCategorias','submitCategoria'],
    'estados'       => ['listaEstados',],
);

if(isset($_GET['controller']) && isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];

    if (array_key_exists($controller, $controllers)){
        if (in_array($action, $controllers[$controller])){
              call($controller, $action);
        }
         else
         {
            call('pages', 'error');
         }     
                
    }
    else{
        call('pages','error');
    }
}
else
{
    if(isset($_POST['controller']) && isset($_POST['action']))
    {
        $controller = $_POST['controller'];
        $action = $_POST['action'];

        if (array_key_exists($controller, $controllers))
        {
            if (in_array($action, $controllers[$controller]))
            {
                call($controller, $action);
            }
            else
            {
                call('pages', 'error');
            }
        }
        else{
            call('pages', 'error');
        }
    }
    else
    {
        call('pages', 'error');
    }
}

function call($controllerN, $action)
{
    //CONTROLLER
    require_once('controllers/'.$controllerN.'_controller.php');

    switch($controllerN)
    {
        case 'pages':
            $controller = new PagesController();
            break;
        case 'quotes':
            require_once('models/Quote.php');
            $controller = new QuotesController();
            break;
        case 'categorias':
            require_once('models/Categoria.php');
            $controller = new CategoriasController();
            break;
        case 'plataformas':
            require_once('models/Plataforma.php');
            $controller = new PlataformasController();
            break;
        case 'estados':
            require_once('models/Estadoscurso.php');
            $controller = new EstadoscursoController();
            break;
       
        default:
            $action ="error";
            $controller = new PagesController();
    }

    //function definePage($controller, $action) =>/controller/base_controller.php
    $controller->definePage($controllerN, $action);
    //call the action
    $controller->{ $action }();

}
