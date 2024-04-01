@extends('layouts.uPanel')
@section('title','Inicio')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="text-center card-header">{{ __('Bienvenido usuario') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Has iniciado sesión! Puedes ver la información sobre proyectos y tareas') }}
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                      <a href="{{ route('Tasks') }}" class="btn btn-primary btn-lg">Ver tareas</a>
                    </div>
                    <div class="col text-center">
                        <a href="{{ route('Projects') }}" class="btn btn-primary btn-lg">Ver Proyectos</a>
                      </div>
                  </div>
                  <br><br>
            </div>
        </div>
    </div>
</div>
@endsection
