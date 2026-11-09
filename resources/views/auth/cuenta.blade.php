<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi cuenta | SANT RAYN</title>

    @vite('resources/css/auth.css')
</head>
<body>

    <main class="auth-page">
        <section class="auth-container">

            <h1 class="auth-title">MI CUENTA</h1>

            <p class="auth-description">
                Administra tu información personal en SANT RAYN.
            </p>

            @if (session('success'))
                <div class="auth-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="auth-errors">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('cuenta.actualizar') }}" method="POST" class="auth-form">
                @csrf
                @method('PUT')

                <div class="auth-field">
                    <label for="name">Nombre</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name', auth()->user()->name) }}"
                        required
                    >
                </div>

                <div class="auth-field">
                    <label for="last_name">Apellido</label>
                    <input
                        type="text"
                        id="last_name"
                        name="last_name"
                        value="{{ old('last_name', auth()->user()->last_name) }}"
                        required
                    >
                </div>

                <div class="auth-field">
                    <label for="email">Correo electrónico</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email', auth()->user()->email) }}"
                        required
                    >
                </div>

                <div class="auth-field">
                    <label for="phone">Teléfono</label>
                    <input
                        type="text"
                        id="phone"
                        name="phone"
                        value="{{ old('phone', auth()->user()->phone) }}"
                        required
                    >
                </div>

                <button type="submit" class="auth-button">
                    Guardar cambios
                </button>
            </form>

            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit" class="auth-button">
                    Cerrar sesión
                </button>
            </form>

            <div class="auth-footer">
                <a href="{{ url('/') }}">Volver a la tienda</a>
            </div>

        </section>
    </main>

</body>
</html>