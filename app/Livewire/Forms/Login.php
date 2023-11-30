<?php

namespace App\Livewire\Forms;

use Livewire\Component;

class Login extends Component
{
    public $user, $password;

    public function save(){
        $this->validate([
            'user' => ['required'],
            'password' => ['required']
        ], ['user.required' => 'Ingresa un usuario', 'password' => 'Ingresa una contraseña']);
    }
    public function render()
    {
        return view('livewire.forms.login');
    }
}
