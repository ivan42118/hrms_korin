{{-- resources/views/auth/login.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - HRMS</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
<script src="{{ mix('js/app.js') }}"></script>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h1 class="login-title">HRMS Login</h1>
                <p class="login-subtitle">Masuk untuk melanjutkan ke sistem</p>
            </div>

            @if(session('error'))
                <div class="error-message">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-input"
                        placeholder="admin@admin.com"
                        required
                        autofocus
                    />
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-input"
                        placeholder="••••••••"
                        required
                    />
                </div>

                <div class="remember-forgot">
                    <label class="remember-label">
                        <input type="checkbox" name="remember" class="remember-checkbox" />
                        Ingat saya
                    </label>
                    <a href="#" class="forgot-link">Lupa password?</a>
                </div>

                <button type="submit" class="login-button">Masuk</button>
            </form>

            <p class="login-footer">
                Belum punya akun?
                <a href="#" class="register-link">Daftar</a>
            </p>
        </div>
    </div>
</body>
</html>
