@extends('layouts.guest')

@section('title', 'Login')

@section('content')

    <link rel="stylesheet" href="/css/login.css">

    <div class="login-page">

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <div class="container-fluid d-flex flex-column align-items-center text-center">

            <div id="presentation" class="row">
                <h1>MDSYS</h1>
                <h2>Sistema de Gerenciamento de Consultório</h2>
            </div>

            <div id="login-form" class="row my-5">

                <div class="container login-format d-flex flex-column align-items-center align-self-center shadow-lg">
            
                    <div class="row">
            
                        <form method="POST" action="{{ route('login') }}" class="login-form col-12 mt-5 mb-3 py-3 d-flex flex-column align-items-center">

                            @csrf
                    
                            <h2 class="form-title mb-5 fs-2">
                                Faça o Login na sua Conta
                            </h2>
            
                            <div class="input-group mb-4">
                                <i class="fa-solid fa-user"></i>
                                <input id="email" name="email" type="email" class="form-control shadow-none py-2 ps-5 rounded" placeholder="Email" required autofocus>
                            </div>

                            <div class="input-group mb-4">
                                <i class="fa-solid fa-lock"></i>
                                <input id="password" name="password" type="password" class="form-control shadow-none py-2 ps-5 rounded" placeholder="Senha" required>   
                            </div>
                            
                            <div class="error-message mb-4">
                                <x-input-error :messages="$errors->get('email')" />
                                <x-input-error :messages="$errors->get('password')" />

                                @if ($message = Session::get('error'))
                                    <p>{{ $message }}</p>
                                @endif

                            </div>

                            <div class="password-options d-flex mt-4 mb-4 align-self-start">
            
                                <div class="form-check align-self-center">
                                    <input id="remember" name="remember" type="checkbox" class="form-check-input shadow-none">
                                    <label for="remember" class="form-check-label">Lembrar dados de acesso</label>
                                </div>
            
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="nav-link p-0 ms-auto">Esqueci a senha</a>
                                @endif
            
                            </div>
            
                            <button type="submit" class="btn btn-primary mt-4 px-4 py-2 text-uppercase shadow-none">Acessar</button>

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