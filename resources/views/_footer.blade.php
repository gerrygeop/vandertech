<footer class="text-gray-600 bg-white border-t">
    <div class="max-w-6xl px-2 sm:px-5 py-5 mx-auto flex items-center">

        <a class="flex items-center justify-center md:justify-start">
            <img src="{{ url('image/logo-w.png') }}" alt="Logo Wana" class="w-8 md:w-12 h-auto">
            <span class="ml-2 text-base md:text-lg text-gray-600 md:font-semibold tracking-wide">Wana</span>
        </a>

        <p class="text-xs sm:text-sm text-gray-500 ml-3 sm:ml-4 pl-3 sm:pl-4 border-l-2 border-gray-200 sm:py-2">
            © {{ Carbon\Carbon::now()->year }} Wana
        </p>

        <span class="inline-flex ml-auto justify-start">
            <a class="text-gray-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                </svg>
            </a>

            <a class="ml-3 text-gray-500">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
            </a>

            <a class="ml-3 text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
            </a>
        </span>

    </div>
</footer>