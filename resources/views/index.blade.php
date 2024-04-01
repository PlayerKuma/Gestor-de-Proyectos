'@extends('layouts.panel')

@section('title', 'Tareas')

@section('content')
<div class="row">


    @if (Session::get('success'))
    <div class="alert alert-success">
        <strong>{{Session::get('success')}}</strong>

    </div>
@endif

<div class="col-xl-14 mb-5 mb-xl-0">
    <div class="card bg-gradient-default shadow">
      <div class="card-header bg-transparent">
        <div class="row align-items-center">
            <div class="col-12">
                <div>
                    <h2 style="color: white">Listado de Tareas</h2>
                </div>
                <div class="row mt-5">
                    <a href="{{route('tasks.create')}}" class="btn btn-primary">Crear tarea</a>
                    <a href="{{route('home')}}" class="btn btn-primary">Volver</a>
                </div>
            </div>
          <div class="col-14 mt-4">
            <table class="table table-bordered text-white" style="font-size: 14px;">
                <tr class="text-secondary">
                    <th style="font-size: 14px" class="col-2 text-center">Tarea</th>
                    <th style="font-size: 14px" class="col-2 text-center">Descripción</th>
                    <th style="font-size: 14px" class="col-2 text-center">Fecha</th>
                    <th style="font-size: 14px" class="col-2 text-center">Estado</th>
                    <th style="font-size: 14px" class="col-2 text-center">Acción</th>
                    <th style="font-size: 14px" class="col-2 text-center">Proyecto</th>
                </tr>
                @foreach ($tasks as $task)
                <tr>
                    <td class="fw-bold">{{$task->title}}</td>
                    <td style="white-space: pre-line;">{{$task->description}}</td>
                    <td>{{$task->due_date}}</td>
                    <td><span class="badge bg-warning fs-6">{{$task->status}}</span></td>
                    <td>
                        <a href="{{route('tasks.edit',$task)}}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{route('tasks.destroy',$task)}}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                    <td style="white-space: pre-line;">{{$task->project}}</td>
                </tr>
                @endforeach
            </table><br><br>
              {{$tasks->links()}}
          </div>
        </div>
      </div>
</div>
@endsection
