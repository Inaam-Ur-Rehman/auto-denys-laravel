<header x-data="{ open: false }" x-cloak
    class="py-4 bg-primary text-white w-full md:max-w-max px-6 md:px-24 rounded-b-[40px] md:absolute md:top-0 md:left-1/2 z-40 transform md:-translate-x-1/2 fixed top-0 left-auto right-auto">
    <div class="flex justify-between md:hidden">
        <a href="{{ route('home') }}" class="mb-4 ">
            <img class="object-cover px-6 w-44" src={{ asset('images/logo.png') }} width={{ 128 }}
                height={{ 87 }} alt="Auto Denys" /></a>
        <x-heroicon-o-bars-3 class="w-8 h-8 text-white cursor-pointer md:hidden" id="menu" @click="open = !open" />

    </div>
    <nav x-show="open"
        class="flex flex-col justify-center gap-4 py-6 md:flex-row md:items-center sm:gap-8 md:gap-12 md:hidden">
        <a href="{{ route('aanbod.index') }}" class="whitespace-nowrap">
            Aanbod
        </a>
        <a href="{{ route('aankoop.index') }}" class="whitespace-nowrap">
            Aankoop
        </a>
        <a href="{{ route('aankoop.index') }}" class="whitespace-nowrap">
            Garantie
        </a>
        <a href="{{ route('home') }}" class="hidden md:block">
            <img class="object-cover min-w-24 sm:w-44" src={{ asset('images/logo.png') }} width={{ 128 }}
                height={{ 87 }} alt="Auto Denys" /></a>
        <a href="{{ route('home') }}" class="shrink-0">
            Home
        </a>
        <a href="{{ route('home') }}" class="shrink-0">
            Over ons
        </a>
        <a href="{{ route('contact.index') }}" class="shrink-0">
            Contact
        </a>
    </nav>
    {{-- Desktop --}}
    <nav class="justify-center hidden gap-4 py-2 md:flex md:flex-row md:items-center sm:gap-8 md:gap-12">
        <a href="{{ route('aanbod.index') }}"
            class="whitespace-nowrap btn {{ Request::is('aanbod') ? 'underline decoration-secondary underline-offset-4 decoration-2' : '' }}">
            Aanbod
        </a>
        <a href="{{ route('aankoop.index') }}"
            class="whitespace-nowrap btn {{ Request::is('aankoop') ? 'underline decoration-secondary underline-offset-4 decoration-2' : '' }}">
            Aankoop
        </a>
        <a href="{{ route('aankoop.index') }}" class="whitespace-nowrap btn">
            Garantie
        </a>
        <a href="{{ route('home') }}" class="hidden md:block">
            <img class="object-cover min-w-24 sm:w-44" src={{ asset('images/logo.png') }} width={{ 128 }}
                height={{ 87 }} alt="Auto Denys" /></a>
        <a href="{{ route('home') }}"
            class="shrink-0 {{ Request::is('/') ? 'underline decoration-secondary underline-offset-4 decoration-2' : '' }}">
            Home
        </a>
        <a href="{{ route('home') }}" class="shrink-0 btn">
            Over ons
        </a>
        <a href="{{ route('contact.index') }}"
            class="shrink-0 btn {{ Request::is('contact') ? 'underline decoration-secondary underline-offset-4 decoration-2' : '' }}">
            Contact
        </a>
    </nav>
</header>
