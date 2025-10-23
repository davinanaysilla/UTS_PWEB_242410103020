@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="login-container">
    <div class="login-card">
        <div class="text-center mb-4">
            <i class="fas fa-strawberry fa-3x" style="color: #ff6b8b;"></i>
            <h2 class="login-title mt-3">Strawberry Cafe</h2>
            <p class="text-muted">Masuk ke sistem pengelolaan</p>
        </div>

        <form id="loginForm" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control form-control-custom" id="username" name="username"
                       placeholder="Masukkan username" required>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control form-control-custom" id="password" name="password"
                       placeholder="Masukkan password" required>
            </div>

            <button type="submit" class="btn btn-strawberry w-100">
                <i class="fas fa-sign-in-alt me-2"></i>Login
            </button>
        </form>

        <div class="text-center mt-4">
            <small class="text-muted">
                Demo: Gunakan username dan password apapun untuk loginnya ya^-^
            </small>
        </div>
    </div>
</div>
@endsection
