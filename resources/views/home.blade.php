@extends('layouts.app')

@section('content')
    @if (isset($message))
        <div class="alert alert-success" role="alert" align="center">
            {{ $message }}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        </div>
    @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <tr>
                    <thead>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </thead>
                </tr>
                <div class="card-body">
                    <tr>
                        <td><a class="btn btn-lg btn-primary" href="{{route('registerStudent')}}">Registrar
                                Estudante</a>
                        </td>
                        <td><a class="btn btn-lg btn-primary" href="{{route('registeredstudents')}}">Mostrar Estudantes
                                Cadastrados
                                Students</a></td>
                    </tr>
                    <br>
                    <br>
                    <tr>
                        <td><a class="btn btn-lg btn-primary" href="{{route('recomendations')}}">Recomendações</a>
                        </td>
                        <td><a class="btn btn-lg btn-primary" href="{{route('testIndex')}}">Iniciar teste</a>
                        </td>

                    </tr>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
