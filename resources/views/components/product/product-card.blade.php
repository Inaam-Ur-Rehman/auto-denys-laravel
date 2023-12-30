<div>
    <div class="h-[500px]">
        <img src={{ Storage::disk('public')->url($product->image) }} alt={name} width={{ 200 }}
            height={{ 200 }} class="object-cover w-full mx-auto rounded-lg" />
        <div class="bg-primary p-4 flex flex-col gap-4 rounded-b-[20px]">
            <h2 class="text-2xl font-bold text-secondary min-h-[60px]">{{ $product->name }}</h2>
            <p class="text-xl text-white">
                <span>{{ $product->engine }}</span>
                <span>, {{ $product->company->name }}</span>
                <span>, {{ $product->mileage }} km</span>
            </p>
            <p class="text-sm text-white">
                <span>{{ $product->fuel }}</span>
                <span> | {{ $product->transmission }}</span>
                <span> | {{ $product->year }}</span>
                <span> | {{ $product->mileage }} km</span>
            </p>
            <div class="flex items-center justify-between">
                <p class="text-xl font-bold text-white">Prijs</p>
                <p class="text-xl font-bold text-secondary">€ {{ $product->price }}</p>
            </div>
        </div>
    </div>
</div>
