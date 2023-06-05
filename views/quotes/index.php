<section class="content">
    <div class="container-fluid">
        
    <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Buttons
                </h3>
              </div>
              <div class="card-body pad table-responsive">
                <div class="margin">
                    <div class="btn-group">
                        <button type="button" onclick="load_page('quotes','create',{})" class="btn btn-success">Novo Curso</button> 
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">Action</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Action</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger">Action</button> 
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-warning">Action</button>
                    </div>
                </div>

              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- ./row -->

        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Cursos</h3>
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
                    
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Bootstrap Switch</h3>
              </div>
              <div class="card-body">
                        Ativos <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch>
                         <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
              </div>
            </div>

                <div class="card card-secondary">
                <div class="card-header">
                <h3 class="card-title">Bootstrap Switch</h3>
                </div>
                <div class="card-body">
                <div class="col-md-2">
                    <select type="form-control" name="f_status" class="form-control">
                        <option value="">Selecione Estado</option>
                        <option value="Active">Sim</option>
                        <option value="Inactive">Não</option>
                    </select>
                </div>
                </div>
                </div>

                    <br>
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Formador</th>
                            <th>Duração</th>
                            <th>Data Início</th>
                            <th>Categoria</th>
                            <th>Plataforma</th>
                            <th>Estado</th>
                            <th>Prioridade</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th>Formador</th>
                            <th>Duração</th>
                            <th>Data Início</th>
                            <th>Categoria</th>
                            <th>Plataforma</th>
                            <th>Estado</th>
                            <th>Prioridade</th>
                        </tr>
                    </tfoot>
                    </table>

                
            </div>
        </div><!-- card card-default-->
    </div>
</section>

<script>
 $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

$(document).ready(function(){
    
    $('#example').DataTable({
        ajax: {
            url: 'http://localhost/MVC/gestor_cursos/routes.php?controller=quotes&action=getCursos',
            type: 'POST',
        },
        columns: [
            { data: 'nome' },
            { data: 'formador' },
            { data: 'duracao' },
            { data: 'data_inicio' },
            { data : 'categoriaid'},
            { data: 'plataformaid'},
            { data: 'estado'},
            { data: 'prioridade'}
        ],
    });
});


</script>