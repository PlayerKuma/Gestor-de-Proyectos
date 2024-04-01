@extends('layouts.panel')

@section('content')
<div class="row">
    <div class="col-xl-8 mb-5 mb-xl-0">
        <div class="card bg-gradient-default">
          <div class="card-header bg-transparent">
            <div class="row align-items-center">
              <div class="col-12">
                <div>
                    <h2 style="color: white;">Crear Tarea</h2>
                </div>
                <div>
                    <a href="{{route('tasks.index')}}" class="btn btn-primary">Volver</a>
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

    <form class="form-white-label" action="{{route('tasks.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong style="color: white;">Tarea:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Tarea" >
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
                    <strong style="color: white;">Fecha límite:</strong>
                    <input type="date" name="due_date" class="form-control" id="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong style="color: white;">Estado (inicial):</strong>
                    <select name="status" class="form-select" id="">
                        <option value="">-- Elige el estado --</option>
                        <option value="Pendiente">Pendiente</option>
                        <option value="En progreso">En progreso</option>
                        <option value="Completada">Completada</option>
                    </select>
                </div>
                <div class="form-group">
                    <strong style="color: white;">Proyecto:</strong>
                    <select name="project" class="form-select" id="">
                        <option value="">-- Elige el proyecto --</option>
                        @foreach ($projects as $project)
                        <option value="{{ $project->name }}">{{ $project->name }}</option>
                    @endforeach
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
