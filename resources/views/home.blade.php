@extends('layouts.layout')

@section('content')
    <div class="relative">
        <x-hero />
        <div class="absolute z-[99999] flex items-center gap-6 font-bold transform -translate-x-1/2 -bottom-6 left-1/2">
            <a href="{{ route('aanbod.index') }}" class="px-4 py-2 text-white rounded-full bg-primary whitespace-nowrap btn">
                ONS AANBOD
            </a>
            <a href="{{ route('aankoop.index') }}"
                class="px-4 py-2 bg-white border-2 rounded-full text-primary border-primary whitespace-nowrap btn">
                VIND UW WAGEN
            </a>
        </div>
    </div>
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
