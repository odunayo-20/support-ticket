<?php

namespace App\Livewire\Admin\Tickets;

use Livewire\Component;

class AdTicketEdit extends Component
{
    public function render()
    {
        return view('livewire.admin.tickets.ad-ticket-edit')->layout('layouts.admin-app')->layoutData([
            'title' => 'Tickets',
        ]);
    }
}