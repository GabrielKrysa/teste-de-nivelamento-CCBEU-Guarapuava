@extends('layouts.app')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>
                    <form>
                        <table>
                            <tr>
                                <thead>
                                <th scope="col"><p class="leed">Personal information</p></th>
                                <th scope="col"></th>
                                </thead>
                            </tr>
                        </table>
                        <div class="card-body">
                            <tr>
                                <td>
                                    <label class="col-md-2 text-md-right">Name</label>
                                    <input class="col-md-3" id="name" type="text" name="name" required
                                           style="border-color:#4aa0e6">
                                </td>

                                <td>
                                    <label for="email" class="col-md-2 text-md-right">E-mail Address</label>
                                    <input id="email" type="email"
                                           class="col-md-3 @error('email') is-invalid @enderror" name="email"
                                           required autocomplete="email" style="border-color:#4aa0e6">
                                </td>

                                <td>
                                    <label for="email" class="col-md-2 text-md-right">Date of Birth
                                    </label>
                                    <input class="col-md-3" id="date" type="date" name="date"
                                           value="{{ old('date') }}" required style="border-color:#4aa0e6" required>
                                </td>

                                <td>
                                    <label class="col-sm-2 text-md-right" for="selectbasic">Age</label>
                                    <input class="col-md-3" id="age" name="age"
                                           required="" type="number" style="border-color:#4aa0e6" required>
                                </td>

                                <td>
                                    <label for="email" class="col-md-2 text-md-right">Phone Number</label>
                                    <input class="col-md-3" id="phonenumber" type="text" name="phonenumber"
                                            required style="border-color:#4aa0e6" required>
                                </td>
                            </tr>
                        </div>

                        <table>
                            <tr>
                                <thead>
                                <th scope="col"><p class="leed">Location</p></th>
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
                                    <label for="email" class="col-md-2 text-md-right">House's Address </label>
                                    <input class="col-md-3" id="address" type="text" name="address"
                                           required style="border-color:#4aa0e6" required>
                                </td>

                                <td>
                                    <label for="email" class="col-md-2 text-md-right">Neighborhood</label>
                                    <input class="col-md-3" id="neighborhood" type="text" name="neighborhood"
                                           required style="border-color:#4aa0e6" required>
                                </td>

                                <td>
                                    <label class="col-sm-2 text-md-right" for="selectbasic">House's Number</label>
                                    <input class="col-md-3" id="number" name="number"
                                           required="" type="number" style="border-color:#4aa0e6" required>
                                </td>

                            </tr>
                        </div>

                        <table>
                            <tr>
                                <thead>
                                <th scope="col" ><p class="leed">Schooling and Work</p></th>
                                <th scope="col"></th>
                                </thead>
                            </tr>
                        </table>
                        <div class="card-body">
                            <tr>
                                <td>
                                    <label for="email" class="col-md-2 text-md-right">Where do You Work</label>
                                    <input class="col-md-3" id="job" type="text" name="job"
                                           required style="border-color:#4aa0e6" required>
                                </td>

                                <td>
                                    <label for="email" class="col-md-2 text-md-right">Profession</label>
                                    <input class="col-md-3" id="profession" type="text" name="profession"
                                           required style="border-color:#4aa0e6" required>
                                </td>

                                <td>
                                    <label for="email" class="col-md-2 text-md-right">Where do You Study</label>
                                    <input class="col-md-3" id="study" type="text" name="study"
                                           required style="border-color:#4aa0e6" required>
                                </td>

                                <td>
                                    <label for="email" class="col-md-2 text-md-right">Schooling</label>
                                    <input class="col-md-3" id="schooling" type="text" name="schooling"
                                           required style="border-color:#4aa0e6" required>
                                </td>
                            </tr>
                        </div>


                        <table>
                            <tr>
                                <thead>
                                <th scope="col"><p class="leed">Schooling and Work</p></th>
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
                                           required style="border-color:#4aa0e6" required>

                                    <label for="email" class="col-md-3 text-md-right">Por quanto tempo</label>
                                    <input class="col-md-8" id="time" type="text" name="time"
                                           required style="border-color:#4aa0e6" required>

                                    <label for="email" class="col-md-3 text-md-right">Por que você pretende mudar de escola</label>
                                    <input class="col-md-8" id="change" type="text" name="change"
                                           required style="border-color:#4aa0e6" required>

                                    <label for="email" class="col-md-3 text-md-right">Por que escolheu o CCBEU</label>
                                    <input class="col-md-8" id="change" type="text" name="change"
                                           required style="border-color:#4aa0e6" required>
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
