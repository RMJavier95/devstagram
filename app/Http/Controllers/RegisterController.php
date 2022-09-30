<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('auth.register');
    }
    public function store(Request $request) {
        // dd($request);
        // dd($request->get('username'));
        $this->validate($request, [
            'name' => 'required|min:4|max:20',
            'user' => 'required|unique:users|min:4|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'user' => Str::slug($request->user),
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        // Autentificar
        auth()->attempt($request->only('email', 'password'));

        // Otro modo
        //auth()->attempt([
        //    'email' => $request->email,
        //    'password' => $request->password,
        //]);

        // Redireccionar
        return redirect()->route('posts.index');
    }
}
