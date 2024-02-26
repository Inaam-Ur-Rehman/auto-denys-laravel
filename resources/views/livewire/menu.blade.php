<div>
    <div class="flex flex-col sm:flex-row items-center gap-4 justify-between mx-auto max-w-7xl">
        <p>
            Gevonden wagens ({{ $productsCount }})
        </p>

        {{-- <div>
            <label>
                Sorteren:
            </label>
            <select wire:model.live='sort' class="w-40 border-[1px] rounded outline-none ring-primary">
                <option value="desc">Nieuwste eerst</option>
                <option value="asc">Oudste eerst</option>
            </select>
        </div> --}}
        {{-- search --}}
        <form wire:submit.prevent='search'>
            <div class="relative ">
                <input type="text" wire:model="query" wire:keydown.enter="search" name="query" placeholder="Zoeken"
                    class="w-full min-w-[250px] border-[1px] rounded outline-none ring-primary">
                <button type="submit" class="absolute top-0 right-0 py-3 px-2">
                    <x-heroicon-o-magnifying-glass class="w-5 h-5 text-primary" />
                </button>
            </div>
        </form>
    </div>

    <div class="grid grid-cols-1 gap-16 mx-auto my-4 md:grid-cols-12 max-w-7xl md:my-24">

        <div class="w-full md:col-span-12">
            @if ($productsCount > 0)
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
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
