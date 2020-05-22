<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactAppList extends Component
{
    protected $contacts;
    public $viewMode;

    public function mount($contacts, $viewMode)
    {
        $this->contacts = $contacts;
        $this->viewMode = $viewMode;
    }

    public function render()
    {
        $view = 'livewire.contact-app-grid';

        if ($this->viewMode == 'list') {
            $view = 'livewire.contact-app-list';
        }

        return view($view, ['contacts' => $this->contacts]);

    }
}
