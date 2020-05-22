<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactAppListItems extends Component
{

    public $contact;

    public function mount(Contact $contact) {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.contact-app-list-items');
    }
}
