<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Procesar el inicio de sesión.
     */
    public function ingresar(Request $request)
    {
        $credenciales = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $recordar = $request->boolean('remember');

        if (Auth::attempt($credenciales, $recordar)) {

            $request->session()->regenerate();

            return redirect()->intended('/')
                ->with('success', '¡Bienvenido a SANT RAYN!');
        }

        return back()
            ->withErrors([
                'email' => 'El correo electrónico o la contraseña son incorrectos.',
            ])
            ->onlyInput('email');
    }

    /**
     * Cerrar la sesión del usuario.
     */
    public function salir(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')
            ->with('success', 'Has cerrado sesión correctamente.');
    }
}
