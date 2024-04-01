@extends('layouts.panel')

@section('content')
<div class="row">
    <div class="col-xl-8 mb-5 mb-xl-0">
        <div class="card bg-gradient-default">
          <div class="card-header bg-transparent">
            <div class="row align-items-center">
              <div class="col-12">
                <div>
                    <h2 style="color: white;">Crear Proyecto</h2>
                </div>
                <div>
                    <a href="{{route('projects.index')}}" class="btn btn-primary">Volver</a>
                </div>
                    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>¡Ha ocurrido un error!</strong> Contacte al administrador<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form class="form-white-label" action="{{route('projects.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong style="color: white;">Nombre del Proyecto:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Nombre del Proyecto" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong style="color: white;">Descripción:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Descripción..."></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong style="color: white;">Estado (inicial):</strong>
                    <select name="status" class="form-select" id="">
                        <option value="">-- Elige el estado --</option>
                        <option value="En Discusión">En Discusión</option>
                        <option value="Aprobado">Aprobado</option>
                        <option value="En Ventas">En Ventas</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
            </div>
            </div>
            </div>
          </div>
@endsection
