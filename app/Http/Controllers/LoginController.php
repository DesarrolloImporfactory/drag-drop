<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('pages');
        }
        return view('layouts.auth.login');
    }

    public function login(Request $request)
    {
        // Obtener el usuario por email
        $user = User::where('email', $request->email)->first();

        // Verificar si el usuario existe
        if ($user) {
            // Verificar si la contraseña coincide con MD5
            if (md5($request->password) == $user->password) {
                // Autenticar al usuario manualmente
                Auth::login($user);
                $request->session()->regenerate();
                return redirect()->intended('pages');
            }

            // Si la contraseña MD5 no coincide, verificar con Bcrypt
            if (Hash::check($request->password, $user->password)) {
                // Autenticar al usuario manualmente
                Auth::login($user);
                $request->session()->regenerate();
                return redirect()->intended('pages');
            }
        }

        // Si la autenticación falla, regresar con error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
