@extends('layouts.layout')

@section('content')
    <x-hero />
    <div class="px-4">
        <x-search-car />
    </div>
    <x-features.feature />
    <x-product.product-container :products="$products" type="other" />
    <div class="grid grid-cols-1 gap-8 px-4 mx-auto my-24 md:grid-cols-3 max-w-7xl md:gap-16">
        @foreach ($testimonials as $testi)
            <x-testimonial :testi="$testi" />
        @endforeach
    </div>
@endsection
