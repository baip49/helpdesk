<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use Illuminate\Http\Request;

class Chatbox extends Component
{
    public $tickets;
    public $ticket_id;
    public $message;

    protected $listeners = ['updateTicketId'];

    public function updateTicketId($ticketId)
    {
        $this->ticket_id = $ticketId;
    }
    public function mount()
    {
        $this->tickets = [];
        $this->ticket_id = null;
        $this->message = '';
    }

    public function sendMessage()
    {
        Message::create([
            'user_id' => Auth::id(),
            'ticket_id' => $this->ticket_id,
            'message' => $this->message,
        ]);

        // Limpiar el campo de mensaje después de enviar
        $this->message = '';
    }

    public function render()
    {
        $user = Auth::user();
        $this->tickets = Ticket::whereHas('messages', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->with('messages')->get();
        $categories = Category::all();

        return view('livewire.chatbox', compact('categories'));
    }
}
