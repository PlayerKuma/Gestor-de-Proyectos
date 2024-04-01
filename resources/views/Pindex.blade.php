@extends('layouts.panel')

@section('title', 'Proyectos')

@section('content')
<div class="row">

    @if (Session::get('success'))
    <div class="alert alert-success">
        <strong>{{Session::get('success')}}</strong>
    </div>
    @endif

    <div class="container-fluid col-xl-11 mb-5 mb-xl-0">
        <div class="card bg-gradient-default shadow">
            <div class="card-header bg-transparent">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div>
                            <h2 style="color: white">Listado de Proyectos</h2>
                        </div>
                        <div class="row mt-5">
                            <a href="{{route('projects.create')}}" class="btn btn-primary">Crear proyecto</a>
                            <a href="{{route('home')}}" class="btn btn-primary">Volver</a>
                        </div>



                    </div>
                    <div class="col-16 mt-4">
                        <table class="table table-bordered text-white ">
                            <tr class="text-secondary">
                                <th style="font-size: 14px" class="col-2 text-center" class="col-4">Proyecto</th>
                                <th style="font-size: 14px" class="col-2 text-center" class="col-4">Descripción</th>
                                <th style="font-size: 14px" class="col-2 text-center" class="col-2">Estado</th>
                                <th style="font-size: 14px" class="col-2 text-center" class="col-4">Acción</th>
                            </tr>
                            @foreach ($projects as $project)
                            <tr>
                                <td style="white-space: pre-line;" class="fw-bold">{{$project->name}}</td>
                                <td style="white-space: pre-line;">{{$project->description}}</td>
                                <td>
                                    <span class="badge bg-warning fs-6">{{$project->status}}</span>
                                </td>
                                <td>
                                    <a href="{{route('projects.edit', $project)}}" class="btn btn-warning">Editar</a>

                                    <form action="{{route('projects.destroy', $project)}}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </table><br><br>
                        {{$projects->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
