@extends('layouts.panel')

@section('content')
<div class="row">
    <div class="col-xl-8 mb-5 mb-xl-0">
        <div class="card bg-gradient-default">
          <div class="card-header bg-transparent">
            <div class="row align-items-center">

             <div class="col-12">
             <div>
                 <h2 style="color: white">Editar Tarea</h2>
            </div>
             <div>
                <a href="{{route('tasks.index')}}" class="btn btn-primary">Volver</a>
            </div>
        </div>



    @if ($errors->any())
    <div class="alert alert-danger">
        <strong style="color: white"> las chancas de mi madre!</strong> Algo fue mal..<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong style="color: white">Tarea:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Tarea" value="{{$task->title}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong style="color: white">Descripción:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Descripción...">{{$task->description}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong style="color: white">Fecha límite:</strong>
                    <input type="date" name="due_date" class="form-control" id="" value={{$task->due_date}}>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong style="color: white">Estado (inicial):</strong>
                    <select name="status" class="form-select" id="">
                        <option value="">-- Elige el estado --</option>
                        <option value="Pendiente"@selected("Pendiente" == $task->status)>Pendiente</option>
                        <option value="En progreso"@selected("En progreso" == $task->status)>En progreso</option>
                        <option value="Completada"@selected("Completada" == $task->status)>Completada</option>
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
@endsection
