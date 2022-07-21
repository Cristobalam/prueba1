@extends('layout.master')
@section('title', 'Sucursales')



@section('content')
    <div class="container pt-5 pb-5">
        <form>
            <div class="row col-12">
                <div class="mb-3 col-6">
                    <label class="form-label">Sucursal Producto</label>
                    <select class="form-select" aria-label="Default select example" required>
                        <option value="" selected>Seleccione un Producto</option>
                        <option value="1">Producto 1</option>
                        <option value="2">Producto 2</option>
                        <option value="3">Producto 3</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

  @stop