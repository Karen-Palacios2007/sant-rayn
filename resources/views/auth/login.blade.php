<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Iniciar sesión | SANT RAYN</title>

    @vite('resources/css/auth.css')
</head>

<body class="auth-page">

    <main class="auth-container">

        <h1 class="auth-title">SANT RAYN</h1>

        <p class="auth-description">
            Bienvenido de nuevo. Ingresa a tu cuenta.
        </p>

        @if (session('success'))
            <div class="auth-success" role="status">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="auth-errors" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form
            action="{{ route('login.ingresar') }}"
            method="POST"
            class="auth-form"
        >
            @csrf

            <div class="auth-field">
                <label for="email">Correo electrónico</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    maxlength="255"
                    autocomplete="email"
                    required
                >
            </div>

            <div class="auth-field">
                <label for="password">Contraseña</label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    autocomplete="current-password"
                    required
                >
            </div>

            <div class="auth-field auth-remember">
                <label>
                    <input
                        type="checkbox"
                        name="remember"
                        value="1"
                    >
                    Recordarme
                </label>
            </div>

            <button type="submit" class="auth-button">
                INICIAR SESIÓN
            </button>
        </form>

        <p class="auth-footer">
            ¿No tienes una cuenta?
            <a href="{{ route('registro.form') }}">Crear cuenta</a>
        </p>

        <p class="auth-footer">
            <a href="{{ url('/') }}">Volver a la tienda</a>
        </p>

    </main>

</body>
</html>
