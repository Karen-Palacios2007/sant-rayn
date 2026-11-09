<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegistroController extends Controller
{
    /**
     * Registrar un nuevo cliente.
     */
    public function registrar(Request $request)
    {
        $datos = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'string', 'max:20'],
            'password' => ['required', 'confirmed', Password::min(8)],
        ]);

        $usuario = User::create([
            'name' => $datos['name'],
            'last_name' => $datos['last_name'],
            'email' => $datos['email'],
            'phone' => $datos['phone'],
            'password' => $datos['password'],
            'role' => 'cliente',
        ]);

        Auth::login($usuario);

        $request->session()->regenerate();

        return redirect('/')
            ->with('success', 'Tu cuenta ha sido creada correctamente.');
    }
}