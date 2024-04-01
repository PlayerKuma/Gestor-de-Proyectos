@extends('layouts.panel')
@section('title','Inicio  |  Modo Administrador')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class=" text-center card-header">{{ __('Bienvenido Administrador') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Has iniciado sesión! Selecciona los datos que deseas gestionar hoy:') }}
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                      <a href="{{ route('tasks.index') }}" class="btn btn-primary btn-lg">Gestionar tareas</a>
                    </div>
                    <div class="col text-center">
                        <a href="{{ route('projects.index') }}" class="btn btn-primary btn-lg">Gestionar Proyectos</a>
                      </div>
                  </div>
                  <br><br>
            </div>
        </div>
    </div>
</div>
@endsection
