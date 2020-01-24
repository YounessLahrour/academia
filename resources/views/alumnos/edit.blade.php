@extends('plantillas.plantilla')
@section('titulo')
    Editar Alumno
@endsection
@section('cabecera')
Editar Alumno
@endsection
@section('contenido')
<div class="container mt-3">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
<form name="editar" action="{{route('alumnos.update', $alumno)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" value="{{$alumno->nombre}}" name="nombre" required>
          </div>
          <div class="col">
            <input type="text" class="form-control" value="{{$alumno->apellido}}"  name="apellido" required>
          </div>
          
        </div>
        <div class="row mt-3">
                <div class="col">
                  <input type="email" class="form-control" value="{{$alumno->email}}"  name="email"  required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" value="{{$alumno->direccion}}"   name="direccion">
                </div>        
                <div class="col">
                    <input type="text" class="form-control" value="{{$alumno->telefono}}"   name="telefono">
                  </div>       
              </div>
                  <div class="row mt-3">
                        <div class="col">
                            <input type="submit" class="btn btn-info normal" value="Editar">
                            <input type="reset" class="btn btn-danger normal">
                        <a href="{{route('alumnos.index')}}" class="btn btn-success">Volver</a>
                        </div>
                                    
                      </div>
      </form>
@endsection