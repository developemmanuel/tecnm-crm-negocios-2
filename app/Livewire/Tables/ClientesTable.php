<?php

namespace App\Livewire\Tables;

use Livewire\Component;

class ClientesTable extends Component
{
    public $showCreateClientModal = false;
    public function toggleCreateClientModal(){
        $this->showCreateClientModal = !$this->showCreateClientModal;
    }
    public function render()
    {
        return view('livewire.tables.clientes-table');
    }
}
