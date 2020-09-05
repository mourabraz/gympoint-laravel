@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 col-md-5">
            <h1>
                <strong>Gerenciando Alunos</strong>
            </h1>
        </div>
        <div class="col-lg-4 col-md-5 mb-2 mb-md-0 d-flex justify-content-end">
            <a href="/students/create"
                class="btn btn-primary btn-sm active"
                role="button">
            Cadastrar
            </a>
        </div>
    </div>

    <student-list-component list="{{ $students }}" />

    {{-- <div class="row justify-content-center">
        <div class="col-md-10">
            @foreach ($students as $student)
            <div class="card mb-2">
                <div class="card-header d-flex align-items-center justify-content-between">

                    <h4 class="d-flex align-items-center mb-0">
                        <a class="d-flex align-items-center mr-2" href="/students/{{ $student->id }}">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a>
                        {{ $student->user->name}}
                    </h4>

                    <div>
                        <button type="button" class="btn btn-outline-warning btn-sm">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                        </button>
                        <button type="button" class="btn btn-outline-danger btn-sm">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </button>
                    </div>


                </div>

                <div class="card-body">

                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-6">
                            <p>
                                <strong>E-mail:</strong> <a href="mailto:{{ $student->user->email }}?subject=Hello%20{{ $student->user->name }}" target="_blank">{{ $student->user->email }}</a>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p>
                                <strong>Data de Nascimento:</strong> {{ $student->birthday_at->format('d/m/Y') }}
                            </p>
                        </div>
                        <div class="col-md-2">
                            <p>
                                <strong>Idade:</strong> {{ $student->getAge() }}
                            </p>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-4 offset-md-6">
                            <p>
                                <strong>Peso:</strong> {{ number_format($student->weight, 2, ',', '.') }} Kg
                            </p>
                        </div>
                        <div class="col-md-2">
                            <p>
                                <strong>Altura:</strong> {{ number_format($student->height, 2, ',', '.') }} m
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> --}}
</div>
@endsection
