<form>
    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
        <div>
            <label for="first_name" class="block text-sm font-medium text-gray-700">Volledige naam</label>
            <input type="text" wire:model="name" id="name"
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary sm:text-sm">
            @error('name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="telephone" class="block text-sm font-medium text-gray-700">Telefoonnummer</label>
            <input type="tel" wire:model="telephone" id="telephone"
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary sm:text-sm">
            @error('telephone')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">E-mailadres</label>
            <input type="text" wire:model="email" id="email"
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary sm:text-sm">
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="subject" class="block text-sm font-medium text-gray-700">Onderwerp</label>
            <input type="text" wire:model="subject" id="subject"
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary sm:text-sm">
            @error('subject')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

    </div>
    <div>
        <label for="message" class="block mt-4 text-sm font-medium text-gray-700">Bericht</label>
        <textarea wire:model="message" id="message" rows="4"
            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary sm:text-sm"></textarea>
        @error(' message')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex justify-center mt-6">
        <button type="submit"
            class="px-4 py-2 text-white rounded-full bg-primary whitespace-nowrap btn">Versturen</button>
    </div>

</form>
