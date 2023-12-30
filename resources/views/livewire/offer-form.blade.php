<div class="px-8 py-8 bg-white md:px-16 rounded-3xl ">
    <p class="text-xl font-extrabold text-center text-primary">ONTVANG EEN BOD IN 2 STAPPEN</p>
    <p class="text-xl text-center text-primary">Vul het formulier in.</p>
    <form wire:submit.prevent='submit' class="flex flex-col gap-4">
        <label for="merk">
            Merk
            {{-- select --}}
            <input wire:model="merk" value="{{ old('merk') }}"
                class="z-40 w-full px-4 py-2 mt-1 border-2 border-none rounded-lg outline-none ring-2 ring-slate-800/20 focus:ring-2 focus:ring-slate-800/50"
                type="text" name="merk" id="merk" placeholder="Merk" />
            @error('merk')
                <div class="px-4 py-2 mt-1 text-sm text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </label>
        <label for="model">
            Model
            {{-- select --}}
            <input wire:model="model"
                class="z-40 w-full px-4 py-2 mt-1 border-2 border-none rounded-lg outline-none ring-2 ring-slate-800/20 focus:ring-2 focus:ring-slate-800/50"
                type="text" name="model" id="model" placeholder="Model" />

            @error('model')
                <div class="px-4 py-2 mt-1 text-sm text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </label>
        <label for="brandstof">
            Brandstof
            {{-- select --}}
            <input wire:model="brandstof"
                class="z-40 w-full px-4 py-2 mt-1 border-2 border-none rounded-lg outline-none ring-2 ring-slate-800/20 focus:ring-2 focus:ring-slate-800/50"
                type="text" name="brandstof" id="brandstof" placeholder="Brandstof" />

            @error('brandstof')
                <div class="px-4 py-2 mt-1 text-sm text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </label>
        <label for="bouwjaar">
            Bouwjaar
            {{-- select --}}
            <input wire:model="bouwjaar"
                class="z-40 w-full px-4 py-2 mt-1 border-2 border-none rounded-lg outline-none ring-2 ring-slate-800/20 focus:ring-2 focus:ring-slate-800/50"
                type="text" name="bouwjaar" id="bouwjaar" placeholder="Bouwjaar" />

            @error('bouwjaar')
                <div class="px-4 py-2 mt-1 text-sm text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </label>
        <label for="email">
            Email
            {{-- select --}}
            <input wire:model="email"
                class="z-40 w-full px-4 py-2 mt-1 border-2 border-none rounded-lg outline-none ring-2 ring-slate-800/20 focus:ring-2 focus:ring-slate-800/50"
                type="text" name="email" id="email" placeholder="Bouwjaar" />

            @error('email')
                <div class="px-4 py-2 mt-1 text-sm text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </label>
        <label for="telefoon">
            Telefoon
            {{-- select --}}
            <input wire:model="telefoon"
                class="z-40 w-full px-4 py-2 mt-1 border-2 border-none rounded-lg outline-none ring-2 ring-slate-800/20 focus:ring-2 focus:ring-slate-800/50"
                type="text" name="telefoon" id="telefoon" placeholder="Telefoon" />

            @error('telefoon')
                <div class="px-4 py-2 mt-1 text-sm text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </label>
        <button type="submit"
            class="px-6 py-2 mx-auto mt-8 font-bold text-white duration-150 rounded-full cursor-pointer bg-primary hover:scale-105 max-w-max">
            Versturen
        </button>
    </form>

</div>
