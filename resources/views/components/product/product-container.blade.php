<div class="gap-8 px-4 mx-auto my-24 max-w-7xl">
    <div class="swiper mySwiper ">
        <div class="swiper-wrapper">
            @foreach ($products as $product)
                <div class="swiper-slide">
                    <x-product.product-card :product="$product" />
                </div>
            @endforeach
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

</div>
