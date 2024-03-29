@extends('layouts.panel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Has iniciado sesión!') }}
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                      <a href="{{ route('tasks.index') }}" class="btn btn-primary btn-lg">Ver tareas</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
