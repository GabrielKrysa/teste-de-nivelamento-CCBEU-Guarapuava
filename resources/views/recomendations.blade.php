@extends('layouts.app')
<style>
    .table td {
        min-width: 150px;
    }

    .table th {
        min-width: 150px;
    }

</style>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <table class="table" id="table">
                        <tr>
                            <thead>
                            <th scope="col" align="center">Nome</th>
                            <th scope="col" align="center">Telefone</th>
                            <th scope="col" align="center">Data de registro</th>
                            </thead>
                        </tr>
                        <div class="card-body">
                            <tbody>
                            @foreach($recomendations as $recomendation)
                                <tr>
                                    <td>
                                        {{$recomendation->name}}
                                    </td>
                                    <td>
                                        {{$recomendation->phone}}
                                    </td>
                                    <td>
                                        {{$recomendation->created_at}}
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
