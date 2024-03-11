<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Proyectos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      </head>
      <body>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Nuevo proyecto</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo proyecto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
        <div class="form-group">
        <div class="form-content">
            <label for="name">Cliente</label>
            <input for="text" id="cliente" name="cliente" placeholder="Cliente"></label>
        </div>
      </div>
      <div class="form-group">
        <div class="form-content">
            <label for="name">Nombre del Proyecto</label>
            <input for="text" id="proyecto" name="proyect" placeholder="Nombre del proyecto"></label>
        </div>
      </div>
      <div class="form-group">
        <div class="form-content">
            <label for="name">Año auditado</label>
            <input for="date" id="auditado" name="auditado" placeholder="Año Auditado"></label>
        </div>
        <div class="form-content">
            <label for="name">Fecha de cierre de proyecto</label>
            <input for="date" id="cierre" name="cierre" placeholder="Fecha de cierre de proyecto"></label>
        </div>
        <div class="form-content">
            <label for="name">Horas presupuestadas</label>
            <input for="text" id="horas" name="horas" placeholder="Horas presupuestadas"></label>
        </div>
      </div>
      <div class="form-group">
        <div class="form-content">
            <label for="name">Año auditado</label>
            <input for="date" id="auditado" name="auditado" placeholder="Año Auditado"></label>
        </div>
        <div class="form-content">
            <label for="name">Fecha de cierre de proyecto</label>
            <input for="date" id="cierre" name="cierre" placeholder="Fecha de cierre de proyecto"></label>
        </div>
        <div class="form-content">
            <label for="name">Horas presupuestadas</label>
            <input for="text" id="horas" name="horas" placeholder="Horas presupuestadas"></label>
        </div>
      </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
    <div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre del proyecto</th>
      <th scope="col">Año Auditado</th>
      <th scope="col">Fecha de Cierre</th>
      <th scope="col">Horas Presupuestadas</th>
      <th scope="col">Progreso</th>
      <th scope="col">Estado</th>
      <th scope="col">Cliente</th>
      <th scope="col">Gerente de Proyecto</th>
    </tr>
  </thead>
  <tbody>


    <tr>
      <th scope="row">Prueba</th>
      <td>2015</td>
      <td>15/04/2024</td>
      <td>500</td>
      <td>20%</td>
      <td>Activo</td>
      <td>NISSAN</td>
      <td>C.P. CARLOS ALBERTO PEREZ</td>
    </tr>
  </tbody>
</table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

      </body>
      </html>
       
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->