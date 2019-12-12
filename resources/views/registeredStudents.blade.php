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
                    <div class="card-header">Registered Students</div>
                    <table class="table" id="table">
                        <tr>
                            <thead>
                            <th scope="col" align="center">Nome</th>
                            <th scope="col" align="center">Email</th>
                            <th scope="col" align="center">Contato</th>
                            <th scope="col" align="center">Registro</th>
                            </thead>
                        </tr>
                        <div class="card-body">
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>
                                        {{$student->name}}
                                    </td>
                                    <td>
                                        {{$student->email}}
                                    </td>
                                    <td>
                                        {{$student->phone_number}}
                                    </td>
                                    <td>
                                        {{$student->created_at}}
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
