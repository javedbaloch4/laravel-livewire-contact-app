<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactApp extends Component
{

    use WithPagination;

    public $searchQuery;
    public $search;
    public $viewKey;

    public $viewMode = "list";

    public function toggleView($mode) {
        $this->viewMode = $mode;
    }

    public function render()
    {
        return view('livewire.contact-app', ['contacts' => $this->getContacts($this->search)]);
    }

    public function getContacts($query = NULL) {
        if (trim($query) == '') {
            return Contact::paginate(5);
        }
        return Contact::where('first_name', 'like', "%{$query}%")
            ->orWhere('last_name', 'like', "%{$query}%")
            ->orWhere('email', 'like', "%{$query}%")
            ->orWhere('number', 'like', "%{$query}%")
            ->paginate(5);
    }

    public function search() {
        $this->search = $this->searchQuery;
        $this->viewKey = time();
    }
}
