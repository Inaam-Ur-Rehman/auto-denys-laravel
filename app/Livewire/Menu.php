<?php

namespace App\Livewire;


use App\Models\Product;
use Livewire\Component;




class Menu extends Component
{

    public $products;
    // public $sort = 'desc';
    public $query = '';
    public $searchTerm = '';



    public function mount()
    {
    }

    public function search()
    {
        // search the prodcts b name, description, price, year, transmission, mileage, fuel, engine
        $this->searchTerm = $this->query;
    }



    public function render()
    {
        $products = [];

        if ($this->searchTerm) {
            $this->products = Product::where('name', 'like', '%' . $this->query . '%')
                ->orWhere('price', 'like', '%' . $this->query . '%')
                ->orWhere('year', 'like', '%' . $this->query . '%')
                ->orWhere('transmission', 'like', '%' . $this->query . '%')
                ->orWhere('mileage', 'like', '%' . $this->query . '%')
                ->orWhere('fuel', 'like', '%' . $this->query . '%')
                ->orWhere('engine', 'like', '%' . $this->query . '%')
                ->get();
        } else {
            $this->products = Product::all();
        }
        return view('livewire.menu', [
            'products' => $this->products,
            'productsCount' => $this->products->count(),
        ]);
    }
}
