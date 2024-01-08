@extends('layouts.registrar')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{url('agregar')}}" method="post">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">nombre del producto</label>
          <input name="nombre" type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">fecha de vencimiento</label>
          <input name="fecha" type="date" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">precio</label>
            <input name="precio" type="number" class="form-control" id="exampleInputPassword1" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">stock</label>
                <input name="stock" type="number" class="form-control" id="exampleInputPassword1">
            </div>  
            <div>
                <label for="inputStatus">Categoria</label>
                <select name="id_categoria" id="inputStatus" class="form-control custom-select">
                    @foreach($categorias as $item)
                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                    @endforeach
                    
                  </select>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
  </div>
@endsection