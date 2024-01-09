<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $telephone;
    public $subject;
    public $message;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'telephone' => 'required|min:10',
        'subject' => 'required|min:6',
        'message' => 'required|min:6',
    ];

    public function save()
    {
        $this->validate();

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->telephone = $this->telephone;
        $contact->subject = $this->subject;
        $contact->message = $this->message;
        $contact->save();

        session()->flash('message', 'Bedankt voor uw bericht, wij nemen zo snel mogelijk contact met u op.');
        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
