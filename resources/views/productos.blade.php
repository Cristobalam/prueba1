@extends('layout.master')
@section('title', 'Productos')
@section('content')
    <div class="container pt-5 pb-5">
        <form>
            <div class="row col-12">
                <div class="mb-3 col-6">
                <label for="codprod" class="form-label">Código</label>
                <input type="text" class="form-control" id="codprod" required>
                </div>
                <div class="mb-3 col-6">
                <label for="nomprod" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nomprod" required>
                </div>
            </div>
            <div class="row col-12">
                <div class="mb-3 col-6">
                    <label for="catprod" class="form-label">Categoría</label>
                    <input type="text" class="form-control" id="catprod" required>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Sucursal</label>
                    <select class="form-select" aria-label="Default select example" required>
                        <option value="" selected>Seleccione una Sucursal</option>
                        <option value="1">Sucursal 1</option>
                        <option value="2">Sucursal 2</option>
                        <option value="3">Sucursal 3</option>
                    </select>
                </div>
            </div>
            <div class="row col-12">
                <div class="mb-3 col-6">
                    <label for="desprod" class="form-label">Descripción</label>
                    <input type="text" class="form-control" id="desprod" required>
                </div>
                <div class="mb-3 col-6">
                    <label for="cantprod" class="form-label">Cantidad</label>
                    <input type="text" class="form-control" id="cantprod" required>
                </div>
            </div>
            <div class="row col-12">
                <div class="mb-3 col-6">
                    <label for="pvprod" class="form-label">Precio Venta</label>
                    <input type="text" class="form-control" id="pvprod" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
          </form>
    </div>
  @stop