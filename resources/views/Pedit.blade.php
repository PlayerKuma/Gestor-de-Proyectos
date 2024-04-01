@extends('layouts.panel')

@section('content')
<div class="row">
    <div class="col-xl-8 mb-5 mb-xl-0">
        <div class="card bg-gradient-default">
          <div class="card-header bg-transparent">
            <div class="row align-items-center">
              <div class="col-12">
                <div>
                    <h2 style="color: white;">Editar Proyecto</h2>
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

    <form class="form-white-label" action="{{route('projects.update',$project)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong style="color: white;">Nombre del Proyecto:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Nombre del Proyecto" value="{{$project->name}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong style="color: white;">Descripción:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Descripción...">{{$project->description}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong style="color: white;">Estado (inicial):</strong>
                    <select name="status" class="form-select" id="" value={{$project->status}}>
                        <option value="">-- Elige el estado --</option>
                        <option value="En Discusión"@selected("En Discusión" == $project->status)>En Discusión</option>
                        <option value="Aprobado"@selected("Aprobado" == $project->status)>Aprobado</option>
                        <option value="En Ventas"@selected("En Ventas" == $project->status)>En Ventas</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
</div>
            </div>
            </div>
            </div>
          </div>
@endsection
