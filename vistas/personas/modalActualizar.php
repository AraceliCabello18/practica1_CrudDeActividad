

<!-- Modal -->
<div class="modal fade" id="modalActualizarPersona" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmActualizaPersona" method="post" onsubmit="return actualizarPersona()">
            <label for="id">id</label>
            <input type="text" class="form-control" id="id" name="id">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos">
            <label for="sexo">Sexo</label>
            <input type="text" class="form-control" id="sexo" name="sexo">
            <label for="fecha">Fecha de Nacimiento</label>
            <input type="text" class="form-control" id="fecha" name="fecha">
            <br>
            <button class="btn btn-warning">Actualizar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>