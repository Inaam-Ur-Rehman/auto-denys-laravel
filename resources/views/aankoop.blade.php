@extends('layouts.layout')

@section('content')
    {{-- Hero --}}
    <div class="relative w-full mb-8">
        <img class="absolute object-cover w-full h-full aspect-video brightness-[70%] -z-40"
            src="{{ asset('/aankoop.webp') }}" />
        <div class="grid items-center grid-cols-1 gap-8 px-4 pt-40 pb-20 mx-auto max-w-7xl md:pt-52 md:grid-cols-2 ">
            <div>
                <h1 class="my-2 text-4xl font-extrabold text-secondary">Verkoop uw wagen aan Auto Denys</h1>
                <ul class="text-xl text-white list-disc list-inside">
                    <li>Ontvang vrijblijvend de beste prijs</li>
                    <li>Bij akkoord volgt de betaling</li>
                    <li>Gratis ophaling</li>
                    <li>Snelle en discrete verkoop</li>
                </ul>
                <h3 class="my-6 text-xl font-bold text-white">Wij zijn telefonisch bereikbaar.</h3>
                <button
                    class="flex items-center gap-2 px-6 py-1 font-bold text-white duration-150 rounded-full cursor-pointer bg-primary hover:scale-105 max-w-max">
                    <x-heroicon-s-phone class="w-5 h-4 text-white" />
                    <span>0492 07 14 14</span>
                </button>
            </div>
            <livewire:offer-form>
        </div>

    </div>
    {{-- Hoe het werkt --}}
    <div class="mt-16 text-center">
        <h2 class="my-4 text-4xl font-extrabold text-primary">Hoe het werkt</h2>
        <p class="max-w-2xl mx-auto text-xl">Vlot en veilig uw wagen of bestelwagen verkopen en de beste prijs ontvangen?Dit
            is bij
            Auto Denys
            snel geregeld.
        </p>
    </div>

    <div class="grid grid-cols-1 gap-4 px-4 mx-auto mt-16 md:gap-10 lg:gap-16 max-w-7xl md:grid-cols-3">
        <div class="flex flex-col items-center justify-center gap-2">
            <img src="{{ asset('/Task.svg') }}" alt="Task" />
            <h2 class="text-2xl font-bold text-primary">Gegevens invullen</h2>
            <p class="text-center">
                Vul de gegevens van uw wagen in het formulier. Zodra wij deze informatie ontvangen kunnen onze aankopers
                meteen aan de slag.
            </p>
        </div>
        <div class="flex flex-col items-center justify-center">
            <img src="{{ asset('/Car Sale.svg') }}" alt="Car Sale" />
            <h2 class="text-2xl font-bold text-primary">Bod ontvangen</h2>
            <p class="text-center">
                U ontvangt een prijs. Indien u akkoord gaat, ontvangt u meteen het aangegeven bedrag via overschrijving.
            </p>
        </div>
        <div class="flex flex-col items-center justify-center">
            <img src="{{ asset('/Pickup.svg') }}" alt="Pickup" />
            <h2 class="text-2xl font-bold text-primary">Ophaalservice</h2>
            <p class="text-center">
                Nadat er een overeenkomst is, komen wij de wagen gratis ophalen. Zo zorgen wij voor een snelle en zorgeloze
                afhandeling.
            </p>
        </div>
    </div>

    <div class="w-full bg-center bg-no-repeat bg-cover bg-car md:py-16">
        <div class="grid grid-cols-1 gap-8 px-4 py-16 mx-auto mt-16 max-w-7xl lg:grid-cols-3">
            <div class="flex flex-col gap-6 lg:col-span-2">
                <h2 class="text-4xl font-bold text-primary">Meld uw auto aan via het formulier</h2>
                <p>Maak het uzelf gemakkelijk en verkoop uw auto aan een erkende autohandelaar.</p>
                <p>De verkoop van een auto duurt soms veel te lang lang en levert vaak veel frustraties op. Die tijd
                    besteedt u
                    liever aan andere zaken.</p>
                <p>U kunt het verkoopproces optimaliseren en versnellen door uw auto aan te bieden via onze website. Wij
                    kopen
                    zowel
                    particulieren wagens als bedrijfswagens op. Het heeft dus altijd zin om uw auto aan te melden via het
                    formulier.
                    Heeft u voorkeur aan een telefonische taxatie van uw wagen? Dan is dat mogelijk.</p>

                <button
                    class="flex items-center gap-2 px-6 py-2 font-bold text-white duration-150 rounded-full cursor-pointer bg-primary hover:scale-105 max-w-max">
                    Naar het formulier
                </button>
            </div>

        </div>
    </div>
@endsection
