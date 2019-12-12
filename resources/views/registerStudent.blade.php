@extends('layouts.app')
<script>
    window.setTimeout(function () {
        $(".alert").fadeTo(6000, 0).slideUp(1000, function () {
            $(this).remove();
        });
    }, 5000);
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
@section('content')
    @if (session('alertOK'))
        <div class="alert alert-success" role="alert" align="center">
            {{ session('alertOK') }}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        </div>
    @endif
    @if (session('alertDontOK'))
        <div class="alert alert-danger" role="alert" align="center">
            {{ session('alertDontOK') }}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>
                    <form method="POST" action="{{route('studentRegister')}}">
                        @csrf
                        <table>
                            <tr>
                                <thead>
                                <th scope="col"><p class="leed">Informações pessoais</p></th>
                                <th scope="col"></th>
                                </thead>
                            </tr>
                        </table>
                        <div class="card-body">
                            <tr>
                                <td>
                                    <label class="col-md-2 text-md-right">Nome</label>
                                    <input class="col-md-3" id="name" type="text" name="name" required
                                           style="border-color:#4aa0e6">
                                </td>

                                <td>
                                    <label for="email" class="col-md-2 text-md-right">E-mail</label>
                                    <input id="email" type="email"
                                           class="col-md-3 @error('email') is-invalid @enderror" name="email"
                                           required autocomplete="email" style="border-color:#4aa0e6">
                                </td>

                                <td>
                                    <label for="email" class="col-md-2 text-md-right">Data de nascimento
                                    </label>
                                    <input class="col-md-3" id="date" type="date" name="date"
                                           value="{{ old('date') }}" required style="border-color:#4aa0e6" required>
                                </td>

                                <td>
                                    <label class="col-sm-2 text-md-right" for="selectbasic">Idade</label>
                                    <input class="col-md-3" id="age" name="age"
                                           required="" type="number" style="border-color:#4aa0e6" required>
                                </td>

                                <td>
                                    <label for="email" class="col-md-2 text-md-right">Telefone</label>
                                    <input class="col-md-3" id="phonenumber" type="text" name="phonenumber"
                                            required style="border-color:#4aa0e6" required>
                                </td>
                            </tr>
                        </div>

                        <table>
                            <tr>
                                <thead>
                                <th scope="col"><p class="leed">Endereços</p></th>
                                <th scope="col"></th>
                                </thead>
                            </tr>
                        </table>
                        <div class="card-body">
                            <tr>
                                <td>
                                    <label for="email" class="col-md-2 text-md-right">CEP</label>
                                    <input class="col-md-3 cep-mask" id="cep" name="cep" type="text"
                                            required style="border-color:#4aa0e6" required>
                                </td>

                                <td>
                                    <label for="email" class="col-md-2 text-md-right">Endereço</label>
                                    <input class="col-md-3" id="address" type="text" name="address"
                                           required style="border-color:#4aa0e6" required>
                                </td>

                                <td>
                                    <label for="email" class="col-md-2 text-md-right">Bairro</label>
                                    <input class="col-md-3" id="neighborhood" type="text" name="neighborhood"
                                           required style="border-color:#4aa0e6" required>
                                </td>

                                <td>
                                    <label class="col-sm-2 text-md-right" for="selectbasic">Número</label>
                                    <input class="col-md-3" id="number" name="number"
                                           required="" type="number" style="border-color:#4aa0e6" required>
                                </td>

                            </tr>
                        </div>

                        <table>
                            <tr>
                                <thead>
                                <th scope="col"><p class="leed">Escolaridade e trabalho</p></th>
                                <th scope="col"></th>
                                </thead>
                            </tr>
                        </table>
                        <div class="card-body">
                            <tr>
                                <td>
                                    <label for="email" class="col-md-2 text-md-right">Onde você trabaha</label>
                                    <input class="col-md-3" id="job" type="text" name="job"
                                           required style="border-color:#4aa0e6" required>
                                </td>

                                <td>
                                    <label for="email" class="col-md-2 text-md-right">Profissão</label>
                                    <input class="col-md-3" id="profession" type="text" name="profession"
                                           required style="border-color:#4aa0e6" required>
                                </td>

                                <td>
                                    <label for="email" class="col-md-2 text-md-right">Onde você estuda</label>
                                    <input class="col-md-3" id="study" type="text" name="study"
                                           required style="border-color:#4aa0e6" required>
                                </td>

                                <td>
                                    <label for="email" class="col-md-2 text-md-right">Escolaridade</label>
                                    <input class="col-md-3" id="schooling" type="text" name="schooling"
                                           required style="border-color:#4aa0e6" required>
                                </td>
                            </tr>
                        </div>


                        <table>
                            <tr>
                                <thead>
                                <th scope="col"><p class="leed">Nivel de inglês</p></th>
                                </thead>
                            </tr>
                        </table>
                        <div class="card-body">
                            <tr>
                                <td>
                                    <label for="email" class="col-md-3 text-md-right">Você ja estudou inglês</label>
                                    <select class="col-md-8" id="estudy" type="text" name="estudy"
                                            required style="border-color:#4aa0e6" required> >
                                        <option id="1">Sim</option>
                                        <option id="2">Não</option>
                                    </select>

                                    <label for="email" class="col-md-3 text-md-right">Qual escola e nivel/curso</label>
                                    <input class="col-md-8" id="scholl" type="text" name="scholl"
                                            style="border-color:#4aa0e6" >

                                    <label for="email" class="col-md-3 text-md-right">Por quanto tempo</label>
                                    <input class="col-md-8" id="time" type="text" name="time"
                                            style="border-color:#4aa0e6" >

                                    <label for="email" class="col-md-3 text-md-right">Por que você pretende mudar de escola</label>
                                    <input class="col-md-8" id="change" type="text" name="change"
                                            style="border-color:#4aa0e6" >

                                    <label for="email" class="col-md-3 text-md-right">Por que escolheu o CCBEU</label>
                                    <input class="col-md-8" id="why" type="text" name="why"
                                            style="border-color:#4aa0e6" >
                                </td>
                            </tr>
                        </div>

                        <table>
                            <tr>
                                <thead>
                                <th scope="col"><p class="leed">Você conhece alguem que também queira estudar
                                        conosco?</p></th>
                                <th scope="col"></th>
                                </thead>
                            </tr>
                        </table>
                        <div class="card-body">
                            <tr>
                                <td>
                                    <label for="email" class="col-md-2 text-md-right">Nome</label>
                                    <input class="col-md-3" id="1name" type="text" name="1name"
                                            style="border-color:#4aa0e6" >
                                    <label for="email" class="col-md-2 text-md-right">Telefone</label>
                                    <input class="col-md-3" id="1tell" type="text" name="1tell"
                                            style="border-color:#4aa0e6" >
                                </td>
                                <td>
                                    <label for="email" class="col-md-2 text-md-right">Nome</label>
                                    <input class="col-md-3" id="2name" type="text" name="2name"
                                           style="border-color:#4aa0e6" >
                                    <label for="email" class="col-md-2 text-md-right">Telefone</label>
                                    <input class="col-md-3" id="2tell" type="text" name="2tell"
                                            style="border-color:#4aa0e6" >
                                </td>
                            </tr>
                        </div>
                        <div class="form-group" align="center">
                            <button class="btn-primary col-6" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
