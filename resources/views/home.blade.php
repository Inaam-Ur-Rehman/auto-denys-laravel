@extends('layouts.layout')

@section('content')
    <x-hero />
    <div class="px-4">
        <x-search-car />
    </div>
    <x-features.feature/>
    <x-product.product-container :products="$products"/>
    <div class="my-24 px-4 grid grid-cols-1 md:grid-cols-3 max-w-7xl mx-auto gap-8 md:gap-16">
        @foreach($testimonials as $testi)
            <x-testimonial :testi="$testi"/>
        @endforeach
    </div>
@endsection
