@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add Student</h5>


                    @if ($errors->any())
                        <div class="alert alert-danger m-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/students" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="inputName">Nome</label>
                            <input type="text" class="form-control" id="inputName" name="name" aria-describedby="nameHelp">
                            <small id="nameHelp" class="form-text text-muted">O nome completo.</small>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted">O email que ficará associado à conta do usuário.</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputBirthday">Data de Nascimento</label>
                                    <input type="text" class="form-control" id="inputBirthday" name="birthday_at" aria-describedby="birthdayHelp">
                                    <small id="birthdayHelp" class="form-text text-muted">A data de nascimento.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="inputWeight">Peso</label>
                                    <input type="text" class="form-control" id="inputWeight" name="weight" aria-describedby="weightHelp">
                                    <small id="weightHelp" class="form-text text-muted">O peso em Kg.</small>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="inputHeight">Altura</label>
                                    <input type="text" class="form-control" id="inputHeight" name="height" aria-describedby="heightHelp">
                                    <small id="heightHelp" class="form-text text-muted">A altura em metros.</small>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
