<div>
    <div class="flex items-center justify-between mx-auto max-w-7xl">
        <p>
            Gevonden wagens ({{ $productsCount }})
        </p>
        <div>
            <label>
                Sorteren:
            </label>
            <select wire:model.live='sort' class="w-40 border-[1px] rounded outline-none ring-primary">
                <option value="desc">Nieuwste eerst</option>
                <option value="asc">Oudste eerst</option>
            </select>
        </div>
    </div>

    <div class="grid min-h-screen grid-cols-1 gap-16 mx-auto my-4 md:grid-cols-12 max-w-7xl">
        <div class="mb-8 md:col-span-3">
            <div class="grid w-full grid-cols-1 gap-6 mt-4 sm:grid-cols-2 md:grid-cols-1">
                <div x-data="{ merk: true }">
                    <div class="flex items-center justify-between border-b-[1px] border-primary">
                        <p>
                            Merk
                        </p>
                        <x-heroicon-o-chevron-down x-show="!merk" class="w-3 h-3 cursor-pointer text-primary"
                            @click="merk = true" />
                        <x-heroicon-o-chevron-up x-show="merk" class="w-3 h-3 cursor-pointer text-primary"
                            @click="merk = false" />
                    </div>
                    <div x-show="merk">
                        @foreach ($companies as $company)
                            {{-- checkbox for slect multile brands --}}
                            <div class="flex items-center mt-2">
                                <input wire:model.live='merk' value="{{ Str::lower($company->name) }}" type="checkbox"
                                    class="w-4 h-4 rounded outline-none border-primary text-primary focus:ring-primary">
                                <label class="ml-3 text-sm text-black">
                                    {{ Str::upper($company->name) }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div x-data="{ prijs: true }">
                    <div class="flex items-center justify-between border-b-[1px] border-primary">
                        <p>
                            Prijs
                        </p>
                        <x-heroicon-o-chevron-down x-show="!prijs" class="w-3 h-3 cursor-pointer text-primary"
                            @click="prijs = true" />
                        <x-heroicon-o-chevron-up x-show="prijs" class="w-3 h-3 cursor-pointer text-primary"
                            @click="prijs = false" />
                    </div>
                    <div x-show="prijs" class="w-full">

                        {{-- checkbox for slect multile brands --}}
                        <div class="flex flex-col mt-2">
                            <label class="text-sm text-black">
                                Minimum
                            </label>
                            <input wire:model.live='minPrice' type="number"
                                class="w-full text-xl rounded outline-none border-primary text-primary focus:ring-primary ">

                        </div>
                        <div class="flex flex-col mt-2">
                            <label class="text-sm text-black">
                                Maximum
                            </label>
                            <input wire:model.live='maxPrice' type="number"
                                class="w-full text-xl rounded outline-none border-primary text-primary focus:ring-primary ">

                        </div>
                    </div>
                </div>
                <div x-data="{ brandstof: false }">
                    <div class="flex items-center justify-between border-b-[1px] border-primary">
                        <p>
                            Brandstof
                        </p>
                        <x-heroicon-o-chevron-down x-show="!brandstof" class="w-3 h-3 cursor-pointer text-primary"
                            @click="brandstof = true" />
                        <x-heroicon-o-chevron-up x-show="brandstof" class="w-3 h-3 cursor-pointer text-primary"
                            @click="brandstof = false" />
                    </div>
                    <div x-show="brandstof">
                        @foreach ($fuels as $fuel)
                            {{-- checkbox for slect multile brands --}}
                            <div class="flex items-center mt-2">
                                <input wire:model.live='brandstof' value="benzine" type="checkbox"
                                    class="w-4 h-4 rounded outline-none border-primary text-primary focus:ring-primary">
                                <label class="ml-3 text-sm text-black">
                                    Benzine
                                </label>
                            </div>
                            <div class="flex items-center mt-2">
                                <input wire:model.live='brandstof' value="diesel" type="checkbox"
                                    class="w-4 h-4 rounded outline-none border-primary text-primary focus:ring-primary">
                                <label class="ml-3 text-sm text-black">
                                    Diesel
                                </label>
                            </div>
                            <div class="flex items-center mt-2">
                                <input wire:model.live='brandstof' value="elektrisch" type="checkbox"
                                    class="w-4 h-4 rounded outline-none border-primary text-primary focus:ring-primary">
                                <label class="ml-3 text-sm text-black">
                                    Elektrisch
                                </label>
                            </div>
                            <div class="flex items-center mt-2">
                                <input wire:model.live='brandstof' value="hybride" type="checkbox"
                                    class="w-4 h-4 rounded outline-none border-primary text-primary focus:ring-primary">
                                <label class="ml-3 text-sm text-black">
                                    Hybride
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div x-data="{ transmissie: false }">
                    <div class="flex items-center justify-between border-b-[1px] border-primary">
                        <p>
                            Transmissie
                        </p>
                        <x-heroicon-o-chevron-down x-show="!transmissie" class="w-3 h-3 cursor-pointer text-primary"
                            @click="transmissie = true" />
                        <x-heroicon-o-chevron-up x-show="transmissie" class="w-3 h-3 cursor-pointer text-primary"
                            @click="transmissie = false" />
                    </div>
                    <div x-show="transmissie">

                        {{-- checkbox for slect multile brands --}}
                        <div class="flex items-center mt-2">
                            <input wire:model.live='transmissie' value="automatisch" type="checkbox"
                                class="w-4 h-4 rounded outline-none border-primary text-primary focus:ring-primary">
                            <label class="ml-3 text-sm text-black">
                                Automatisch
                            </label>
                        </div>
                        <div class="flex items-center mt-2">
                            <input wire:model.live='transmissie' value="manueel" type="checkbox"
                                class="w-4 h-4 rounded outline-none border-primary text-primary focus:ring-primary">
                            <label class="ml-3 text-sm text-black">
                                Manueel
                            </label>
                        </div>

                    </div>
                </div>
                <div x-data="{ carrosserie: false }">
                    <div class="flex items-center justify-between border-b-[1px] border-primary">
                        <p>
                            Type Carrosserie
                        </p>
                        <x-heroicon-o-chevron-down x-show="!carrosserie" class="w-3 h-3 cursor-pointer text-primary"
                            @click="carrosserie = true" />
                        <x-heroicon-o-chevron-up x-show="carrosserie" class="w-3 h-3 cursor-pointer text-primary"
                            @click="carrosserie = false" />
                    </div>
                    <div x-show="carrosserie">
                        @foreach ($bodyWork as $carro)
                            {{-- checkbox for slect multile brands --}}
                            <div class="flex items-center mt-2">
                                <input wire:model.live='carrosserie' value="{{ Str::lower($carro->name) }}"
                                    type="checkbox"
                                    class="w-4 h-4 rounded outline-none border-primary text-primary focus:ring-primary">
                                <label class="ml-3 text-sm text-black">
                                    {{ Str::upper($carro->name) }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div x-data="{ emissieklasse: false }">
                    <div class="flex items-center justify-between border-b-[1px] border-primary">
                        <p>
                            Emissieklasse
                        </p>
                        <x-heroicon-o-chevron-down x-show="!emissieklasse" class="w-3 h-3 cursor-pointer text-primary"
                            @click="emissieklasse = true" />
                        <x-heroicon-o-chevron-up x-show="emissieklasse" class="w-3 h-3 cursor-pointer text-primary"
                            @click="emissieklasse = false" />
                    </div>
                    <div x-show="emissieklasse">
                        @foreach ($emission as $emis)
                            {{-- checkbox for slect multile brands --}}
                            <div class="flex items-center mt-2">
                                <input wire:model.live='emissieklasse' value="{{ Str::lower($emis->name) }}"
                                    type="checkbox"
                                    class="w-4 h-4 rounded outline-none border-primary text-primary focus:ring-primary">
                                <label class="ml-3 text-sm text-black">
                                    {{ Str::upper($emis->name) }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full md:col-span-9">
            @if ($productsCount > 0)
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($this->products as $product)
                        <div
                            class="relative flex flex-col justify-between p-4 overflow-hidden bg-white rounded shadow-md">
                            <div class="">
                                <div>
                                    <span
                                        class="absolute top-0 left-0 px-2 py-1 text-xs font-bold text-white rounded-br-lg bg-primary">{{ $product->badge }}</span>
                                </div>
                                <img src="{{ asset('storage/' . $product->image[0]) }}" alt="{{ $product->name }}"
                                    class="object-contain w-full aspect-video">

                                <h2 class="mt-4 text-base font-semibold text-[#4F4F4F]">{{ $product->name }}</h2>
                                <div class="mt-2 text-sm text-[#4F4F4F]">
                                    {!! Str::limit($product->description, 40) !!}
                                </div>
                                <div class="flex flex-wrap items-center">
                                    <p class="mt-2 text-sm text-black/50">{{ $product->fuel }} | </p>
                                    <p class="mt-2 text-sm text-black/50"> &nbsp;{{ $product->transmission }} |
                                    </p>
                                    <p class="mt-2 text-sm text-black/50">&nbsp; {{ $product->year }} | </p>
                                    <p class="mt-2 text-sm text-black/50"> &nbsp;{{ $product->mileage }}</p>
                                </div>
                                <div class="mx-auto border-b-[1px] w-full my-2"></div>
                                <div class="">
                                    @if (!$product->is_available)
                                        <p>Verkocht</p>
                                    @else
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm text-black/80">Prijs</p>
                                            <p class="text-xl font-bold text-black/80">€{{ $product->price }}</p>
                                        </div>
                                    @endif
                                </div>
                                <div class="mx-auto border-b-[1px] w-full my-2"></div>
                            </div>
                            <div class="flex gap-2 mt-4">
                                <x-heroicon-o-arrow-right class="w-5 h-5 text-primary" />
                                <a href="
                                    {{ // like wagons/audi-a3-1-6-tdi-2015
                                        // as /product-name slug
                                        route('details.index', ['slug' => $product->slug]) }}
                                "
                                    class="text-base text-primary">Bekijk deze auto</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="flex items-center justify-center w-full h-96">
                    <p class="text-2xl text-gray-500">Geen wagens gevonden</p>
                </div>
            @endif
        </div>
    </div>

</div>
