<?php

namespace App\Livewire\Menus;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MainMenu extends Component
{
    public $closeSessionButton = false;
    public function openCloseSessionButton(){
        $this->closeSessionButton = true;
    }
    public function offCloseSessionButton(){
        $this->reset('closeSessionButton');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function render()
    {
        return view('livewire.menus.main-menu');
    }
}
