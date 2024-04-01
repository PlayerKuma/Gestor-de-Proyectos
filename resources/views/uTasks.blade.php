'@extends('layouts.uPanel')

@section('title', 'Tareas')

@section('content')
<div class="row">


    @if (Session::get('success'))
    <div class="alert alert-success">
        <strong>{{Session::get('success')}}</strong>

    </div>
@endif

<div class="col-xl-11 mb-5 mb-xl-0">
    <div class="card bg-gradient-default shadow">
      <div class="card-header bg-transparent">
        <div class="row align-items-center">
            <div class="col-12">
                <div>
                    <h2 style="color: white">Listado de Tareas</h2>
                </div>
                <div class="row mt-5">
                    <a href="{{route('uHome')}}" class="btn btn-primary">Volver</a>
                </div>
            </div>
          <div class="col-16 mt-4">
              <table class="table table-bordered text-white">
                  <tr class="text-secondary">
                      <th style="font-size: 14px" class="col-2 text-center" class="col-4">Tarea</th>
                      <th style="font-size: 14px" class="col-2 text-center" class="col-4">Descripción</th>
                      <th style="font-size: 14px" class="col-2 text-center" class="col-2">Fecha</th>
                      <th style="font-size: 14px" class="col-2 text-center" class="col-2">Estado</th>
                      <th style="font-size: 14px" class="col-2 text-center" class="col-4">Proyecto</th>
                  </tr>
                  @foreach ($tasks as $task)
                  <tr>
                      <td  style="white-space: pre-line" class="fw-bold">{{$task->title}}</td>
                      <td style="white-space: pre-line">{{$task->description}}</td>
                      <td>
                          {{$task->due_date}}
                      </td>
                      <td>
                          <span class="badge bg-warning fs-6">{{$task->status}}</span>
                      </td>

                      <td style="white-space: pre-line">
                        {{$task->project}}
                    </td>
                  </tr>
                  @endforeach

              </table><br><br>
              {{$tasks->links()}}
          </div>
        </div>
      </div>
</div>
@endsection
