<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactAutoComplete extends Component
{
    public $query, $data, $highlightIndex;

    public function mount()
    {
        $this->resetProperties();
    }

    public function render()
    {
        return view('livewire.contact-auto-complete');
    }

    public function resetProperties()
    {
        $this->query = '';
        $this->data = [];
        $this->highlightIndex = 0;
    }

    public function incrementHighlight()
    {
        dd('incrementHighlight');
        if ($this->highlightIndex === count($this->contacts) - 1) {
            $this->highlightIndex = 0;
            return;
        }
        $this->highlightIndex++;
    }

    public function decrementHighlight()
    {
        dd('decrementHighlight');
        if ($this->highlightIndex === 0) {
            $this->highlightIndex = count($this->contacts) - 1;
            return;
        }
        $this->highlightIndex--;
    }

    public function showContact()
    {
        $contact = $this->data[$this->highlightIndex] ?? null;
        if ($contact) {
            $this->redirect(route('show-contact', $contact['id']));
        }
    }

    public function updatedQuery()
    {
        $this->data = Contact::where('name', 'like', '%' . $this->query . '%')
            ->get()
            ->toArray();
    }
}
