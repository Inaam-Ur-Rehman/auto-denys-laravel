@extends('layouts.layout')

@section('content')
    <section class="py-32 bg-center bg-no-repeat bg-cover md:py-16 bg-contact">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="p-6 bg-white rounded-2xl w-[90%] sm:w-[70%] md:w-[600px] xl:w-[800px] py-16">
                <div class="text-center">
                    <h1 class="text-2xl font-bold text-primary">Vragen of afspraak maken?</h1>
                    <p class="text-primary ">CONTACTFORMULIER</p>
                </div>
                @livewire('contact-form')
            </div>
        </div>
    </section>
@endsection
