<?php 

class Quote{
    

    public $id;
    public $nome;
    public $link;
    public $formador;
    public $duracao;
    public $descricao;
    public $data_inicio;
    public $data_fim;
    public $categoriaid;
    public $plataformaid;
    public $estado;
    public $prioridade;
    public $obs;

    public function __construct($id,$nome, $link, $formador, $duracao, $descricao, $data_inicio, $data_fim, $categoriaid, $plataformaid,
                                $estado, $prioridade, $obs)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->link = $link;
        $this->formador = $formador;
        $this->duracao = $duracao;
        $this->descricao = $descricao;
        $this->data_inicio = $data_inicio;
        $this->data_fim = $data_fim;
        $this->categoriaid = $categoriaid;
        $this->plataformaid = $plataformaid;
        $this->estado = $estado;
        $this->prioridade = $prioridade;    
        $this->obs = $obs;    
    }

    //create a new course
    public static function submit($nome, $link, $formador, $duracao, $descricao, $data_inicio, $data_fim, $categoriaid, $plataformaid, $estado, $prioridade, $obs)
    {
         $db = Db::getInstance();
         $db->set_charset("utf8");
         $req = $db->prepare("INSERT INTO cursos (nome, link, formador, duracao, descricao, data_inicio, data_fim, CategoriaID, PlataformaID, EstadosID, prioridade, obs) 
                             VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
         $req->bind_param('sssssssiiiis',$nome, $link,$formador, $duracao, $descricao, $data_inicio, $data_fim, $categoriaid, $plataformaid, $estado, $prioridade, $obs);
         $req->execute();
         $inserted = mysqli_affected_rows($db);
         $req->close();
         return $inserted;
    }

    //list all courses
    public static function allCursos()
    {
        $db = Db::getInstance();
        $db->set_charset("utf8");

       // $req = $db->prepare("SELECT id, nome, link, formador, duracao, data_inicio, data_fim, CategoriaID, PlataformaID, EstadosID, prioridade, obs FROM cursos");
        $req = $db->prepare("SELECT cursos.id, cursos.nome, cursos.link, cursos.formador, cursos.duracao, cursos.data_inicio, cursos.data_fim, categoriascursos.descricao, plataformas.descricao , estadocurso.descricao , cursos.prioridade, cursos.obs
                            FROM (((cursos
                            INNER JOIN categoriascursos ON cursos.CategoriaID = categoriascursos.id)
                            INNER JOIN plataformas ON cursos.PlataformaID = plataformas.id )
                            INNER JOIN estadocurso ON cursos.EStadosID = estadocurso.id) 
                            ");
        $req->execute();
        $req->bind_result($id, $nome, $link, $formador, $duracao,$data_inicio, $data_fim, $categoriaid, $plataformaid, $estado, $prioridade, $obs );
        $cursos = [];
        while($req->fetch())
        {
            $cursos[] = new Quote($id,$nome, $link, $formador, $duracao, $descricao, $data_inicio, $data_fim, $categoriaid, $plataformaid,
            $estado, $prioridade, $obs);
        }
        $req->close();
        return $cursos;
    }
    


}