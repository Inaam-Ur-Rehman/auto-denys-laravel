<?php

namespace App\Livewire;

use App\Models\BodyWork;
use App\Models\Company;
use App\Models\Emission;
use App\Models\Product;
use Illuminate\Support\Number;
use Livewire\Component;




class Menu extends Component
{

    public $products;
    public $merk = [];
    public $brandstof = [];
    public $transmissie = [];
    public $carrosserie = [];
    public $emissieklasse = [];
    public $model = [];
    public $productsCount;
    public $minPrice;
    public $maxPrice;
    public $sort = 'desc';

    protected $queryString = ['merk', 'brandstof', 'transmissie', 'carrosserie', 'emissieklasse', 'minPrice', 'maxPrice', 'sort', 'model'];

    public function mount()
    {
    }


    public function render()
    {
        $products = \App\Models\Product::all();

        $companies = Company::all();
        $fuels = $products->unique('fuel')->pluck('fuel');
        $bodyWork = BodyWork::all();
        $emission = Emission::all();
        // logic here


        $filtered = Product::where('published', true)->when(
            $this->merk,
            // find through relation
            function ($query) {
                $query->whereHas('company', function ($query) {
                    $query->whereIn('name', $this->merk);
                });
            }
        )->when(
            $this->brandstof,
            function ($query) {
                $query->whereIn('fuel', $this->brandstof);
            }
        )->when(
            $this->transmissie,
            function ($query) {
                $query->whereIn('transmission', $this->transmissie);
            }
        )
            ->when(
                $this->minPrice,
                function ($query) {
                    $query->where('price', '>=', intval($this->minPrice));
                }
            )
            ->when(
                $this->maxPrice,
                function ($query) {
                    $query->where('price', '<=', intval($this->maxPrice));
                }
            )
            ->when(
                $this->model,
                function ($query) {
                    $query->whereIn('year', $this->model);
                }
            )
            ->when(
                $this->carrosserie,
                function ($query) {
                    $query->whereHas('body_work', function ($query) {
                        $query->whereIn('name', $this->carrosserie);
                    });
                }
            )
            ->when(
                $this->emissieklasse,
                function ($query) {
                    $query->whereHas('emission', function ($query) {
                        $query->whereIn('name', $this->emissieklasse);
                    });
                }
            )
            ->when(
                $this->sort,
                function ($query) {
                    $query->orderBy('created_at', $this->sort);
                }
            )
            ->where('published', true)->get();


        $this->products = $filtered;
        $this->productsCount = $filtered->count();

        return view('livewire.menu', [
            'products' => $this->products,
            'bodyWork' => $bodyWork,
            'emission' => $emission,
            'companies' => $companies,
            'fuels' => $fuels,
            'productsCount' => $this->productsCount
        ]);
    }
}
