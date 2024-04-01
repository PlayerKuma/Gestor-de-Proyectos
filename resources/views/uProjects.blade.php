@extends('layouts.uPanel')

@section('title', 'Proyectos')

@section('content')
<div class="row">

    @if (Session::get('success'))
    <div class="alert alert-success">
        <strong>{{Session::get('success')}}</strong>
    </div>
    @endif

    <div class="container-fluid col-xl-8 mb-5 mb-xl-0">
        <div class="card bg-gradient-default shadow">
            <div class="card-header bg-transparent">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div>
                            <h2 style="color: white">Listado de Proyectos</h2>
                        </div>
                        <div class="row mt-5">
                            <a href="{{route('uHome')}}" class="btn btn-primary">Volver</a>
                        </div>



                    </div>
                    <div class="col-16 mt-4">
                        <table class="table table-bordered text-white">
                            <tr class="text-secondary">
                                <th style="font-size: 14px" class="col-4 text-center"><strong>Proyecto</strong></th>
                                <th style="font-size: 14px" class="col-4 text-center"><strong>Descripción</strong></th>
                                <th style="font-size: 14px" class="col-2 text-center"><strong>Estado</strong></th>
                            </tr>
                            @foreach ($projects as $project)
                            <tr>
                                <td style="white-space: pre-line" class="fw-bold">{{$project->name}}</td>
                                <td style="white-space: pre-line">{{$project->description}}</td>
                                <td>
                                    <span class="badge bg-warning fs-6">{{$project->status}}</span>
                                </td>

                            </tr>
                            @endforeach

                        </table>
                        {{$projects->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
