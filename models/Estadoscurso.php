<?php
class Estadocurso{

    public $id;
    public $descricao;


    public function __construct($id, $descricao)
    {
        $this->id = $id;
        $this->descricao = $descricao;
    }

    public static function AllEstados()
    {
        $db = Db::getInstance();
        $db->set_charset("utf8");

        $req = $db->prepare("SELECT id, descricao FROM estadocurso");
        $req->execute();
        $req->bind_result($id, $descricao);
        $quotes = [];
        while($req->fetch())
        {
            $quotes[] = new Estadocurso($id, $descricao);
        }
        $req->close();
        return $quotes;
    }


}