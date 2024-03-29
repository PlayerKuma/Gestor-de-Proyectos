'@extends('layouts.panel')

@section('title', 'Tareas')

@section('content')
<div class="row">


    @if (Session::get('success'))
    <div class="alert alert-success">
        <strong>{{Session::get('success')}}</strong>

    </div>
@endif

<div class="col-xl-10 mb-5 mb-xl-0">
    <div class="card bg-gradient-default shadow">
      <div class="card-header bg-transparent">
        <div class="row align-items-center">
            <div class="col-12">
                <div>
                    <h2 style="color: white">Listado de Tareas</h2>
                </div>
                <div>
                    <a href="{{route('tasks.create')}}" class="btn btn-primary">Crear tarea</a>
                </div>
            </div>
          <div class="col-16 mt-4">
              <table class="table table-bordered text-white">
                  <tr class="text-secondary">
                      <th>Tarea</th>
                      <th>Descripción</th>
                      <th>Fecha</th>
                      <th>Estado</th>
                      <th>Acción</th>
                  </tr>
                  @foreach ($tasks as $task)
                  <tr>
                      <td class="fw-bold">{{$task->title}}</td>
                      <td>{{$task->description}}</td>
                      <td>
                          {{$task->due_date}}
                      </td>
                      <td>
                          <span class="badge bg-warning fs-6">{{$task->status}}</span>
                      </td>
                      <td>
                          <a href="" class="btn btn-warning">Editar</a>

                          <form action="{{route('tasks.destroy',$task)}}" method="post" class="d-inline">
                              @csrf
                              @method( 'DELETE' )
                              <button type="submit" class="btn btn-danger">Eliminar</button>
                          </form>
                      </td>
                  </tr>
                  @endforeach

              </table>
              {{$tasks->links()}}
          </div>
        </div>
      </div>
</div>
@endsection
