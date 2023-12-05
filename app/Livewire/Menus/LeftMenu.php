<?php

namespace App\Livewire\Menus;

use Livewire\Component;

class LeftMenu extends Component
{
    public $reportes = false, $usuarios = false;
    public function toggleReportes(){$this->reportes = !$this->reportes;}
    public function toggleUsuarios(){$this->usuarios = !$this->usuarios;}
    public function render()
    {
        return view('livewire.menus.left-menu');
    }
}
