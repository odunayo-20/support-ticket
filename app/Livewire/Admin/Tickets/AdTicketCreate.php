<?php

namespace App\Livewire\Admin\Tickets;

use Livewire\Component;

class AdTicketCreate extends Component
{
    public function render()
    {
        return view('livewire.admin.tickets.ad-ticket-create')->layout('layouts.admin-app')->layoutData([
            'title' => 'Tickets',
        ]);
    }
}