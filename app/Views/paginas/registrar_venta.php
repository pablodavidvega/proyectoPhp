<h2>Registrar una Venta</h2>

<form>
  <div class="mb-3">
    <label for="producto" class="form-label">Producto</label>
    <input type="text" class="form-control" id="producto" placeholder="Nombre del producto">
  </div>

  <div class="mb-3">
    <label for="cliente" class="form-label">Cliente</label>
    <input type="text" class="form-control" id="cliente" placeholder="Nombre del cliente">
  </div>

  <div class="mb-3">
    <label for="cantidad" class="form-label">Cantidad</label>
    <input type="number" class="form-control" id="cantidad" value="1" min="1">
  </div>

  <div class="mb-3">
    <label for="metodo_pago" class="form-label">Método de pago</label>
    <select class="form-select" id="metodo_pago">
      <option value="">Selecciona</option>
      <option value="efectivo">Efectivo</option>
      <option value="tarjeta">Tarjeta</option>
      <option value="transferencia">Transferencia</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
