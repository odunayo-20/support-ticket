<?php

namespace App\Livewire\Admin\Tickets;

use App\Models\Ticket;
use Livewire\Component;
use Livewire\WithPagination;

class AdTicketList extends Component
{
    use WithPagination;
    public $search = '';
    public $pagination = 1;
    public function render()
    {
        $tickets = Ticket::paginate($this->pagination);
        return view('livewire.admin.tickets.ad-ticket-list', compact('tickets'))->layout('layouts.admin-app')->layoutData([
            'title' => 'Tickets',
        ]);
    }
}