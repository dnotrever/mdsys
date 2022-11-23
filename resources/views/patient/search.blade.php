@extends('layouts.app')

@section('title', 'Buscar Paciente')

@section('content')

    <link rel="stylesheet" href="/css/patient/search.css">

    <div class="row m-0 d-flex justify-content-center">
        
        <div class="patients-search" class="col-6">

            <div class="search-title d-flex">

                <h2>Pacientes</h2>

                <a href="/patient/insert" class="btn btn-primary ms-auto mb-auto">
                    <i class="fa-solid fa-plus"></i>
                    <span class="text-uppercase">Inserir</span>
                </a>

            </div>

            <div class="search-patient">

                <form action="/patient/search" method="GET" class="d-flex">

                    <div class="input-group">
                        <input type="text" id="search" name="search" class="form-control" placeholder="Buscar por Paciente...">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>

                    <a href="/patient/search" class="btn btn-secondary text-uppercase mx-4">Listar Todos</a>

                </form>

            </div>

            <div class="search-table">

                <table class="table table-hover table-borderless text-center">

                    @if (count($patients) > 0)
                        <thead>
                            <tr>
                                <th class="col-1" scope="col">Prontuário</th>
                                <th class="col-5" scope="col">Nome</th>
                                <th class="col-2" scope="col">Nascimento</th>
                                <th class="col-2" scope="col">Gênero</th>
                                <th class="col-3" scope="col">Celular</th>
                            </tr>
                        </thead>
                    @endif
        
                    <tbody class="align-middle">
        
                        @foreach ($patients as $patient)
                            <tr>
                                <th scope="row">{{ $patient->id }}</th>
                                <td>
                                    <a class="nav-link" href="/patient/{{ $patient->id }}">
                                        {{ $patient->name }}
                                    </a>
                                </td>
                                <td>
                                    {{ date('d/m/Y', strtotime($patient->birth)) }}
                                </td>
                                <td>{{ $patient->gender }}</td>
                                <td>{{ $patient->cellphone }}</td>
                            </tr>
                        @endforeach
        
                    </tbody>

                </table>
                
                @if (count($patients) == 0 && $search)
                    <p class="text-muted">Paciente <span class="fw-bold">{{ $search }}</span> não encontrado!</p>
                @elseif (count($patients) == 0)
                    <p class="text-muted">Não há pacientes cadastrados.</p>
                @endif

            </div>

        </div>

    </div>

@endsection