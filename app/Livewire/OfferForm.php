<?php

namespace App\Livewire;

use App\Models\Offers;
use Livewire\Component;

class OfferForm extends Component
{
    public $merk;
    public $model;
    public $brandstof;
    public $bouwjaar;
    public $telefoon;
    public $email;

    protected $rules = [
        'merk' => 'required',
        'model' => 'required',
        'brandstof' => 'required',
        'bouwjaar' => 'required',
        'telefoon' => 'nullable|phone:AUTO,NL',
        'email' => 'required|email',
    ];

    public function submit()
    {
        // $this->validate();

        // Execution doesn't reach here if validation fails.


        // Persist user to database.

        Offers::create([
            'merk' => $this->merk,
            'model' => $this->model,
            'brandstof' => $this->brandstof,
            'bouwjaar' => $this->bouwjaar,
            'telefoonnummer' => $this->telefoon,
            'email' => $this->email,
        ]);




        // reset input fields
        $this->reset();

        session()->flash('message', 'Uw aanvraag is succesvol verzonden.');

        // // after 2 seconds redirect to homepage
        // sleep(2);
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.offer-form');
    }
}
