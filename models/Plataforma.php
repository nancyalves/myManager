<?php
class Plataforma{

    public $id;
    public $nome;
    public $descricao;
    public $link;
    public $classname;

    public function __construct($id, $nome, $descricao, $link, $classname)
    {
        $this->id = $id;
        $this->nome =$nome;
        $this->descricao = $descricao;
        $this->link = $link;
        $this->classname = $classname;
    }

    public static function AllPlataformas()
    {
        $db = Db::getInstance();
        $db->set_charset("utf-8");

        $req = $db->prepare("SELECT id,descricao FROM plataformas");
        $req->bind_result($id, $descricao);
        $req->execute();
        $plataformas = [];
        while($req->fetch())
        {
            $plataformas[] = new Plataforma($id, $nome, $descricao, $link, $classname);
        }
        $req->close();
        return $plataformas;

    }

    public function submit($nome, $descricao, $link, $classname)
    {
        $db = Db::getInstance();
        $db->set_charset("utf-8");
        $req = $db->prepare("INSERT INTO plataformas(nome, descricao, link, classname) VALUES (?,?,?,?)");
        $req->bind_param('ssss',$nome, $descricao, $link, $classname);
        $req->execute();
        return true;

    }

}