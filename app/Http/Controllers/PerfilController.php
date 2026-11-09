<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PerfilController extends Controller
{
    /**
     * Actualizar los datos del perfil del usuario autenticado.
     */
    public function actualizar(Request $request)
    {
        $usuario = Auth::user();

        $datos = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($usuario->id),
            ],
            'phone' => ['required', 'string', 'max:20'],
        ]);

        $usuario->update($datos);

        return redirect()
            ->route('cuenta')
            ->with('success', 'Tus datos se actualizaron correctamente.');
    }
}