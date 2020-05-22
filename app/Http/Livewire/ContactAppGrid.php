<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactAppGrid extends Component
{
    public $contacts;

    public function mount() {
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.contact-app-grid');
    }
}
