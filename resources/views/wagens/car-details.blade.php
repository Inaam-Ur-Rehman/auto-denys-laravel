@extends('layouts.layout')

@section('content')
    <div class="px-4 mx-auto mt-24 md:mt-44 max-w-7xl">
        <h1 class="pb-6 mt-16 text-3xl font-bold md:mt-32 text-primary">
            {{ $car->name }},
            {{ $car->engine }},
            {{ $car->year }}
        </h1>

        <div class="slider-for">
            @foreach ($car->image as $image)
                <div>
                    <img src="{{ asset('storage/' . $image) }}" alt="{{ $car->name }}"
                        class="object-contain w-full aspect-video">
                </div>
            @endforeach
        </div>
        <div class="px-4 mx-4 my-6 overflow-hidden slider-nav">
            @foreach ($car->image as $image)
                <div class="mx-2 !max-w-max">
                    <img src="{{ asset('storage/' . $image) }}" alt="{{ $car->name }}"
                        class="object-cover h-24 rounded-md aspect-video">
                </div>
            @endforeach
        </div>

        <div class="grid grid-cols-1 gap-6 px-8 py-6 my-8 border-2 rounded-lg md:grid-cols-3 border-primary">
            <div class="flex items-center gap-8 text-xl">
                <img src="{{ asset('/images/road.svg') }}" alt="" class="w-8 h-8">
                <div class="flex flex-col gap-2">
                    <p class="text-black/50">Kilometerstand</p>
                    <p class="font-bold text-primary">{{ $car->mileage }} km</p>
                </div>
            </div>
            <div class="flex items-center gap-8 text-xl">
                <img src="{{ asset('/images/transmission.svg') }}" alt="" class="w-8 h-8">
                <div class="flex flex-col gap-2">
                    <p class="text-black/50">Transmissie</p>
                    <p class="font-bold capitalize text-primary">{{ $car->transmission }}</p>
                </div>
            </div>
            <div class="flex items-center gap-8 text-xl">
                <img src="{{ asset('/images/calendar.svg') }}" alt="" class="w-8 h-8">
                <div class="flex flex-col gap-2">
                    <p class="text-black/50">Bouwjaar</p>
                    <p class="font-bold text-primary">{{ $car->year }}</p>
                </div>
            </div>
        </div>

        <a href="{{ route('aanbod.index') }}"
            class="flex items-center gap-2 px-16 py-3 my-4 text-xl text-white rounded-md bg-primary max-w-max">
            Verkocht
        </a>

        <div class="flex items-center gap-2 my-12">
            <x-heroicon-o-map-pin class="w-6 h-6 text-primary" />
            <p>
                {{ $car->location }}
            </p>
        </div>

        <div>
            <h2 class="pb-6 mt-16 text-3xl font-semibold text-primary">Specificaties</h2>

            <div class="grid grid-cols-1 my-8 gap-x-16 gap-y-6 md:grid-cols-2">
                <x-specs-card title="type" :value="$car->body_work->name" />
                <x-specs-card title="Bouwjaar" :value="$car->year" />
                <x-specs-card title="Kilometerstand" :value="$car->mileage" unit="KM" />
                <x-specs-card title="Transmissie" :value="$car->transmission" />
                <x-specs-card title="Brandstof" :value="$car->fuel" />
                <x-specs-card title="Emissieklasse" :value="$car->emission->name" />
                <x-specs-card title="Aantal Pk's" :value="$car->horsepower" unit="pk" />
                <x-specs-card title="Aantal Kw's" :value="$car->kws" unit="Kw" />
                <x-specs-card title="Cilinderinhoud" :value="$car->cylinder_capacity" unit="cm^3" />
                <x-specs-card title="Co" :value="$car->co" />
                <x-specs-card title="Kleur interieur" :value="$car->interior_color" />
                <x-specs-card title="Kleur exterieur" :value="$car->exterior_color" />
            </div>
        </div>

        <div>
            <h2 class="pb-6 mt-16 text-3xl font-semibold text-primary">Opties</h2>

            <div class="grid grid-cols-1 my-8 gap-x-16 gap-y-6 md:grid-cols-2">

                @foreach ($car->options as $option)
                    <div>
                        <h2 class="my-2 font-bold text-primary">
                            {{ $option['name'] }}
                        </h2>

                        <div class="flex flex-col gap-2">

                            @foreach (explode(',', $option['values']) as $value)
                                <div class="flex items-center gap-2">
                                    <img src="{{ asset('/images/tick.svg') }}" alt="tick">
                                    <span>{{ $value }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="pb-6 mt-16 text-3xl font-semibold text-primary">Opmerkingen</h2>

            <div class="text-xl prose prose-xl text-black/50">{!! $car->description !!}</div>
        </div>

        <h2 class="pb-6 mt-16 text-3xl font-semibold text-primary">Gerelateerde wagens</h2>
        <x-product.product-container :products="$relatedCars" type="classic" />
    </div>
@endsection
