
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | SANT RAYN</title>

    @vite('resources/css/auth.css')
</head>
<body class="auth-page">

    <main class="auth-container">

        <h1 class="auth-title">SANT RAYN</h1>

        <p class="auth-description">
            Crea tu cuenta y forma parte de nuestra identidad.
        </p>

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
            action="{{ route('registro.registrar') }}"
            method="POST"
            class="auth-form"
        >
            @csrf

            <div class="auth-field">
                <label for="name">Nombre</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    maxlength="255"
                    required
                >
            </div>

            <div class="auth-field">
                <label for="last_name">Apellido</label>
                <input
                    type="text"
                    id="last_name"
                    name="last_name"
                    value="{{ old('last_name') }}"
                    maxlength="255"
                    required
                >
            </div>

            <div class="auth-field">
                <label for="email">Correo electrónico</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    maxlength="255"
                    required
                >
            </div>

            <div class="auth-field">
                <label for="phone">Número de teléfono</label>
                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    maxlength="20"
                    value="{{ old('phone') }}"
                    required
                >
            </div>

            <div class="auth-field">
                <label for="password">Contraseña</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    minlength="8"
                    required
                >
            </div>

            <div class="auth-field">
                <label for="password_confirmation">
                    Confirmar contraseña
                </label>
                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    minlength="8"
                    required
                >
            </div>

            <button type="submit" class="auth-button">
                CREAR CUENTA
            </button>
        </form>

        <p class="auth-footer">
            ¿Ya tienes una cuenta?
            <a href="{{ route('login') }}">Iniciar sesión</a>
        </p>

    </main>

</body>
</html>

