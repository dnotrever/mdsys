@extends('layouts.guest')

@section('title', 'Registrar')

@section('content')

    <link rel="stylesheet" href="/css/register.css">

    <div class="register-page">

        <div class="container-fluid d-flex flex-column align-items-center text-center">

            <div id="presentation" class="row">
                <h1>MDSYS</h1>
                <h2>Sistema de Gerenciamento de Consultório</h2>
            </div>

            <div id="register-form" class="row my-5">

                <div class="container register-format d-flex flex-column align-items-center align-self-center shadow-lg">
            
                    <div class="row">
            
                        <form method="POST" action="{{ route('register') }}" class="register-form col-12 mt-2 mb-3 py-3 d-flex flex-column align-items-center">

                            @csrf
                    
                            <h2 class="form-title mb-5 fs-2">
                                Registrar Usuário
                            </h2>
            
                            <div class="input-group mb-3">
                                <i class="fa-solid fa-user"></i>
                                <input id="name" name="name" type="text" class="form-control shadow-none py-2 ps-5 rounded" placeholder="Nome" required autofocus>
                            </div>

                            <div class="error-message align-self-start">
                                <x-input-error :messages="$errors->get('email')" />
                            </div>

                            <div class="input-group mb-3">
                                <i class="fa-solid fa-at"></i>
                                <input id="email" name="email" type="email" class="form-control shadow-none py-2 ps-5 rounded" placeholder="Email" required>
                            </div>

                            <div class="error-message align-self-start">
                                <x-input-error :messages="$errors->get('password')" />
                            </div>

                            <div class="input-group mb-3">
                                <i class="fa-solid fa-lock"></i>
                                <input id="password" name="password" type="password" class="form-control shadow-none py-2 ps-5 rounded" placeholder="Senha" required>   
                            </div>

                            <div class="form-group align-self-end mt-4">
                                <select id="sector" name="sector" class="form-select shadow-none" required>

                                    @foreach ($sectors as $sector)
                                        <option value="{{ $sector->sector_name }}">{{ $sector->sector_name }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
            
                            <button type="submit" class="btn btn-primary mt-5 px-4 py-2 text-uppercase shadow-none">Registrar</button>
                    
                        </form>
            
                    </div>
            
                </div>

            </div>

            <div id="footer" class="row">
                <footer>
                    <small>Developed by dnotrever &copy; All rights reserved</small>
                </footer>
            </div>

        </div>

    </div>

@endsection