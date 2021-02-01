
<form class="row g-3" action="{{ route()) }}" method="post">



  <div class="col-md-6">
    <label for="identificacion" class="form-label">Documento</label>
    <input type="number" class="form-control" name="identificacion">
  </div>
  <div class="col-md-6">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre">
  </div>
  <div class="col-12">
    <label for="telefono" class="form-label">Telefono</label>
    <input type="text" class="form-control" name="telefono" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="direccion" class="form-label">Dirección</label>
    <input type="text" class="form-control" name="direccion" placeholder="Apartment, studio, or floor">
  </div>

  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>


</form>
