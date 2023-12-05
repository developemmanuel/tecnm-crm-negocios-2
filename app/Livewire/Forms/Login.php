<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    public function login(){
        $credentials = $this->validate(
            [ 'email' => ['required', 'email'], 'password' => ['required'] ],
            [ 'email.required' => 'Ingresa un correo', 'password' => 'Ingresa una contraseña', 'email.email' => 'Ingresa un correo válido' ]
        );
        if (Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        } else {
            session()->flash('error', 'Credenciales incorrectas.');
        }
    }

    public function render()
    {
        return view('livewire.forms.login');
    }
}
