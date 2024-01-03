<div class="gap-8 px-2 mx-auto my-24 max-w-7xl">
    <div class="relative px-4">
        <div class="slick ">
            @foreach ($products as $product)
                <div class="px-2 swiper-slide">
                    @if ($type == 'classic')
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
                    @else
                        <x-product.product-card :product="$product" />
                    @endif
                </div>
            @endforeach


        </div>

        {{-- // slick buttons  --}}
        <div class="flex justify-between mt-8 slick-buttons">
            <button class="absolute left-0 text-white transform -translate-y-1/2 rounded-md top-1/2 prev">
                <img src="{{ asset('images/right.png') }}" alt="arrow-left" class="w-10 h-10" />
            </button>
            <button class="absolute right-0 text-white transform -translate-y-1/2 rounded-md top-1/2 next">
                <img src="{{ asset('images/right.png') }}" alt="arrow-right" class="w-10 h-10 rotate-180" />
            </button>

        </div>
    </div>
</div>
