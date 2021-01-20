<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ShowContact extends Component
{
    public $data, $cid;

    public function mount($id)
    {
        $this->cid = $id;
    }

    public function render()
    {
        $this->data = Contact::find($this->cid);
        return view('livewire.show-contact');
    }
}
