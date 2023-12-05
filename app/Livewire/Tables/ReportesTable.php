<?php

namespace App\Livewire\Tables;

use Livewire\Component;

class ReportesTable extends Component
{
    public $showCreateReporteModal = false;
    public function toggleCreateReporteModal(){
        $this->showCreateReporteModal = !$this->showCreateReporteModal;
    }


    public function render()
    {
        return view('livewire.tables.reportes-table');
    }
}
