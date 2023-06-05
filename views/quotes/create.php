
<section class="content">
 <div class="container-fluid">

    <div class="card card-default">
        <div class="card-header">
        <h3 class="card-title">Novo Curso</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-11">
                        <div class="form-group">
                            <label>Selecione a Categoria: </label>
                            <select id="formCategorias" name="categoria" class="form-control select2" style="width: 100%;">
                                <option value=-2>Selecione uma Categoria</option>
                            </select>
                        </div>  
                    </div>
                    <div class="col-md-1">
                        <button type="button" id="formNovaCategoria" style="margin-top:40px;" class="btn btn-outline-success btn-xs"><i class="fa fa-plus"></i> </button>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md-11">
                        <div class="form-group">
                            <label>Selecione a Plataforma:</label>
                            <select id="formPlataformas" name="plataforma" class="form-control select2" style="width=100%;">
                                <option value=-2>Selecione uma Plataforma</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button type="button" id="formNovaPlataforma" style="margin-top:40px;" class="btn btn-outline-success btn-xs"><i class="fa fa-plus"></i> </button>
                    </div>
                </div>
                <div class="form-group">
                    <label>Nome do Curso: </label>
                    <input id="formNomeCurso" class="form-control" style="width=100%;" type="text" name="nome">
                </div>
                <div class="form-group">
                    <label>Link: </label>
                    <input id="formLink" class="form-control" style="width=100%;" type="text" name="link">
                </div>
                <div class="form-group">
                    <label>Formador </label>
                    <input id="formFormador" class="form-control" style="width=100%;" type="text" name="formador">
                </div>
                <div class="form-group">
                    <label>Duração: </label>
                    <input id="formDuracao" class="form-control" style="width=100%;" type="text" name="duracao">
                </div>
                <div class="form-group">
                    <label>Descrição: </label>
                    <textarea id="formDescricao" style="width:100%;" name="descricao"></textarea>
                </div>
                <div class="form-group">
                    <label>Data Início: </label>
                    <input id="formDataInicio" class="form-control" style="width=100%;" type="date" name="data_inicio">
                </div>
                <div class="form-group">
                    <label>Data Fim: </label>
                    <input id="formDataFim" class="form-control" style="width=100%;" type="date" name="date_fim">
                </div>
                <div class="form-group">
                    <label>Estado:</label>
                    <select id="formEstado" name="estadoscurso" class="form-control select2" style="width=100%;">
                        <option value=-2>Selecione um estado</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Prioridade:</label>
                    <select id="formPrioridade" name="prioridade" class="form-control select2" style="width=100%;">
                        <option value=-2>Selecione a prioridade</option>
                        <option value=1>Sim</option>
                        <option value=2>Não</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Observações: </label>
                    <textarea id="formObs" style="width:100%;" name="obs"></textarea>
                </div>
                <button id="submitCurso" class="btn btn-success">Guardar</button>

            </div>
            <div class="col-md-6"> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div id="formCriaNovaCategoria" >
                                    <div class="card-header">
                                        <h3 id="h3Categoria" class="card-title">Nova Categoria</h3>
                                    </div>
                                    <div class="card-body row ">
                                        <div class="form-group col-md-12 ">
                                            <label>Nome Categoria</label>
                                            <input type="text" id="nomecategoria" class="form-control" style="width=100%;" />
                                        </div>
                                        <div class="form-group col-md-12 ">
                                            <label>Descrição</label>
                                            <input type="text" id="descricaocategoria" class="form-control" style="width=100%;" />
                                        </div>
                                        <div class="form-group col-md-12 ">
                                            <label>ClassName</label>
                                            <input type="text" id="classnamecategoria" class="form-control" style="width=100%;" />
                                        </div>
                                        <button id="submitCategoria" class="btn btn-success">Guardar</button>
                                    </div>
                            </div>
                            <div id="formCriaNovaPlataforma"> 
                                    <div class="card-header">
                                        <h3 id="h3Plataforma" class="card-title">Nova Plataforma</h3>
                                    </div>
                                    <div class="card-body row">
                                        <div class="form-group col-md-12">
                                            <label>Nome Plataforma</label>
                                            <input type="text"  id="nomeplataforma"  class="form-control" style="width=100%;" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Descrição</label>
                                            <input type="text"  id="descricaoplataforma"  class="form-control" style="width=100%;" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Link</label>
                                            <input type="text"  id="linkplataforma"  class="form-control" style="width=100%;" />
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>ClassName</label>
                                            <input type="text"  id="classnameplataforma"  class="form-control" style="width=100%;" />
                                        </div>
                                        <button id="submitPlataforma" class="btn btn-success">Guardar</button>
                                    </div>
                            </div>
                        </div><!-- card-->
                    </div>
                </div><!-- row-->

            </div>
            <!-- /.col -->     
        </div>
        <!-- /.row -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">   
        </div>
    </div>
</div>
</section>
<script>
$(document).ready(function(){
    $('#formCriaNovaCategoria').hide();
    $('#formCriaNovaPlataforma').hide();
    $('#h3Categoria').css('color', 'orange');
    $('#h3Plataforma').css('color', 'purple');
    loadCategorias();
    loadPlataformas();
    loadEstados();

    //SUBMITS
    $("#submitCurso").click('on', function(){
        submitCurso();
    });
    $('#submitCategoria').click('on', function(){
        submitCategoria();
    });
    $('#submitPlataforma').click('on', function(){
        submitPlataforma();
    });


    $("#formNovaCategoria").click('on', function(){
        $('#formCriaNovaCategoria').show();
        $('#formCriaNovaPlataforma').hide();
    });

    $("#formNovaPlataforma").click('on', function(){
        $('#formCriaNovaCategoria').hide();
        $('#formCriaNovaPlataforma').show();
    });
}); 
function loadCategorias(){
    $.ajax({
        url:'http://localhost/MVC/gestor_cursos/routes.php?controller=categorias&action=listaCategorias',
        type:'POST',
        cache: false,
        dataType: "json",
        success: function(data)
        {
            var response = data['data'];
            var options ='';
          
            for(var x = 0; x< response.length; x++)
            {
                options += "<option value="+response[x]['id']+">"+response[x]['descricao']+"</option>";
            }
            $('#formCategorias').html($('#formCategorias').html()+options);
        },
        error: function(err)
        {
            console.log('erro na requisição');
    
        }
    });
}

function loadPlataformas(){
    $.ajax({
        url: 'http://localhost/MVC/wint2/routes.php?controller=plataformas&action=listaPlataformas',
        type: 'GET',
        cache: false,
        dataType:"json",
        success: function(data)
        {
            var response = data['data'];
            var options = '';
    
            for (var x = 0; x < response.length; x++)
            {
                options += '<option value="'+response[x]['id']+'">'+response[x]['descricao']+'</option>';
            }
            $('#formPlataformas').html($('#formPlataformas').html()+options);
            
        },
        error: function(error)
        {console.log('Erro na request');}
    });
}
function loadEstados(){
    $.ajax({
        url:'http://localhost/MVC/wint2/routes.php?controller=estados&action=listaEstados',
        type:'POST',
        cache: false,
        dataType: "json",
        success: function(data)
        {
            var response = data['data'];
            var options ='';
          
            for(var x = 0; x< response.length; x++)
            {
                options += "<option value="+response[x]['id']+">"+response[x]['descricao']+"</option>";
            }
            $('#formEstado').html($('#formEstado').html()+options);
        },
        error: function(err)
        {
            console.log('erro na requisição');
        }
    });
}

function submitCurso()
{
    var categoria = $('#formCategorias').val();
    var plataforma =  $('#formPlataformas').val();
    var nome = $('#formNomeCurso').val();
    var link = $('#formLink').val();
    var formador = $('#formFormador').val();
    var duracao = $('#formDuracao').val();
    var descricao = $('#formDescricao').val();
    var dataInicio = $('#formDataInicio').val();
    var dataFim = $('#formDataFim').val();
    var estado = $('#formEstado').val();
    var prioridade = $('#formPrioridade').val();
    var obs = $('#formObs').val();

   $.ajax({

    url: 'http://localhost/MVC/wint2/routes.php?controller=quotes&action=submitCurso',
    type: 'POST',
    cache: false,
    dataType:"json",
    data:{
        categoriacurso : categoria,
        plataformacurso : plataforma,
        nomecurso : nome,
        linkcurso : link,
        formadorcurso : formador,
        duracaocurso : duracao,
        descricaocurso : descricao,
        dataIniciocurso: dataInicio,
        dataFimcurso : dataFim,
        estadocurso : estado,
        prioridadecurso : prioridade,
        obscurso : obs,
    },
    success: function(data){
        var response = data['data'];
        load_page('quotes','create',{});
    },
    error: function(error)
    {console.log('erro na request');console.log(err);}


   });
}

function submitCategoria(){
    var nomecategoria = $('#nomecategoria').val();
    var descricaocategoria = $('#descricaocategoria').val();
    var classnamecategoria = $('#classnamecategoria').val();
    $.ajax({
        url:'http://localhost/MVC/wint2/routes.php?controller=categorias&action=submitCategoria',
        type: 'POST',
        cache: false,
        dataType: "json",
        data:{

            nome_categoria : nomecategoria,
            descricao_categoria : descricaocategoria,
            classname_categoria : classnamecategoria,
        },
        success: function(data)
        {
            var response = data['data'];
            load_page('quotes','create',{})        
        },
        error: function(xhr, status, error){
            console.log(error);
         }
    });
}

function submitPlataforma(){
    var nomeplataforma = $('#nomeplataforma').val();
    var descricaoplataforma = $('#descricaoplataforma').val();
    var linkplataforma = $('#linkplataforma').val();
    var classnameplataforma = $('#classnameplataforma').val();
    $.ajax({
        url:'http://localhost/MVC/wint2/routes.php?controller=plataformas&action=submitPlataforma',
        type: 'POST',
        cache: false,
        dataType: "json",
        data:{

            nome_plataforma : nomeplataforma,
            descricao_plataforma : descricaoplataforma,
            link_plataforma : linkplataforma,
            classname_plataforma : classnameplataforma,
        },
        success: function(data)
        {
            var response = data['data'];
            
            load_page('quotes','create',{})        
        },
        error: function(xhr, status, error){
            console.log(error);
    
         }
    });
}
</script>
