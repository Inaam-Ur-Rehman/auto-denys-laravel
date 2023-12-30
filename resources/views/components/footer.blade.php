<footer class="px-4 py-12 bg-primary">
    <div class="flex flex-col items-center justify-between gap-8 mx-auto max-w-7xl md:flex-row">
        <div class="grid items-center w-full grid-cols-1 gap-8 md:grid-cols-2 md:max-w-max">
            <img src={{ asset('images/logo.svg') }} alt="Logo" width={{ 300 }}
                height={{ 200 }} />
            <div class="flex flex-col justify-center gap-4 font-bold text-white">
                <a href="/"> OVER ONS </a>
                <a href="/"> AANBOD </a>
                <a href="/"> AANKOOP </a>
                <a href="/"> GARANTIE </a>
            </div>
        </div>

        <div class="flex flex-col gap-3 text-white place-items-start">
            <div class="flex items-center gap-2 font-bold">
                <x-heroicon-s-phone class="w-6 h-6" />
                <p>0492071414</p>
            </div>
            <div>
                <div class="flex items-center justify-between p-2 rounded-full w-max">
                    <img src="{{ asset('images/facebook.svg') }}" class="cursor-pointer" alt="Facebook Logo"
                        width={{ 40 }} height={{ 40 }} />
                    <img src="{{ asset('images/linkedin.svg') }}" class="cursor-pointer" alt="Linkedin Logo"
                        width={{ 40 }} height={{ 40 }} />
                    <img src="{{ asset('images/instagram.svg') }}" class="cursor-pointer" alt="Instagram Logo"
                        width={{ 40 }} height={{ 40 }} />
                </div>
            </div>
        </div>
    </div>
</footer>
