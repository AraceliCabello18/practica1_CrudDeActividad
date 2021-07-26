

<!-- Modal -->
<div class="modal fade" id="modalAgregarPersona" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agrega Nueva Persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregaPersona" method="post" onsubmit="return agregarNuevaPersona()">
            <label for="idu">id</label>
            <input type="text" class="form-control" id="idu" name="idu">
            <label for="nombreu">Nombre</label>
            <input type="text" class="form-control" id="nombreu" name="nombreu">
            <label for="apellidosu">Apellidos</label>
            <input type="text" class="form-control" id="apellidosu" name="apellidosu">
            <label for="fechau">Fecha de Nacimiento</label>
            <input type="text" class="form-control" id="fechau" name="fechau">
            <label for="sexou">Sexo</label>
            <input type="text" class="form-control" id="sexou" name="sexou">
            <br>
            <button class="btn btn-primary">Agregar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>