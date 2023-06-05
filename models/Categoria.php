<?php
class Categoria{

    public $id;
    public $nome;
    public $descricao;
    public $classname;

    public function __construct($id, $nome, $descricao, $classname)
    {
        $this->id = $id;
        $this->nome =$nome;
        $this->descricao = $descricao;
        $this->classname = $classname;
    }

    public static function AllCategorias()
    {
        $db = Db::getInstance();
        $db->set_charset("utf8");

        $req = $db->prepare("SELECT id, descricao FROM categoriascursos");
        $req->execute();
        $req->bind_result($id, $descricao);
        $quotes = [];
        while($req->fetch())
        {
            $quotes[] = new Categoria($id, $nome, $descricao,$classname);
        }
        $req->close();
        return $quotes;
    }

    public function submit($nome, $descricao, $classname)
    {
        $db = Db::getInstance();
        $db->set_charset("utf-8");
        $req = $db->prepare("INSERT INTO categoriascursos (nome, descricao, classname) VALUES(?,?,?)");
        $req->bind_param('sss', $nome, $descricao, $classname);
        $req->execute();
        $inserted = mysqli_affected_rows($db);
        $req->close();
        return $inserted;
    }
}