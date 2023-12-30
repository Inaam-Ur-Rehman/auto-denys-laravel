<div
    class="flex flex-col max-w-5xl px-8 py-8 mx-auto mt-16 border-2 shadow-xl border-primary rounded-xl md:rounded-full md:px-16">
    <h2 class="my-2 text-xl font-extrabold text-center text-primary">VIND UW WAGEN</h2>
    <form action="{{ route('aanbod.index') }}" method="GET"
        class="grid items-center grid-cols-1 gap-8 py-6 md:grid-cols-3">
        <input type="text" name="merk[]" placeholder="Automerk"
            class="px-2 py-1 border-0 rounded-full focus:ring-primary focus:ring-2 text-primary outline-0 ring-2 ring-primary" />
        <input type="text" name="model[]" placeholder="Model"
            class="px-2 py-1 border-0 rounded-full focus:ring-primary focus:ring-2 text-primary outline-0 ring-2 ring-primary" />
        <button type="submit" class="flex items-center gap-2 px-6 py-1 text-white rounded-full bg-primary max-w-max">
            <x-heroicon-o-magnifying-glass class="w-5 h-5 text-white" />
            <span>Bekijk aanbond</span>
        </button>
    </form>
</div>
