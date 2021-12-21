<nav class="p-6 mx-auto lg:flex lg:justify-between lg:items-center shadow" x-data="{ hamburger : false }">
    <div class="flex items-center justify-between">
        <div>
            <a href="#">
                <img src="{{ url('image/Logo-Vandertech.png') }}" alt="Logo Vander Tech" class="h-12 w-auto">
            </a>
        </div>

        <!-- Mobile menu button -->
        <div class="flex lg:hidden">
            <button 
                type="button"
                x-on:click="hamburger = ! hamburger"
                class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                aria-label="toggle menu"
            >
                <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                    <path fill-rule="evenodd"
                        d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                    </path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
    <div :class="{'flex': hamburger, 'hidden': ! hamburger}" class="hidden lg:flex flex-col mt-4 space-y-2 lg:mt-0 lg:flex-row lg:-mx-6 lg:space-y-0">
        <x-nav-link :href="route('/')" :active="request()->routeIs('/')">Home</x-nav-link>

        <div class="flex sm:items-center px-3 py-2 lg:mx-2 hover:bg-blue-200 rounded-md">
            <x-dropdown align="left" width="auto">
                <x-slot name="trigger">
                    <button class="flex items-center text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                        <div>Perusahaan Inti</div>

                        <div class="ml-1">
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link href="#">
                        Tentang Perusahaan
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                        Visi & Misi
                    </x-dropdown-link>
                </x-slot>
            </x-dropdown>
        </div>

        <div class="flex sm:items-center px-3 py-2 lg:mx-2 hover:bg-blue-200 rounded-md">
            <x-dropdown align="left" width="auto">
                <x-slot name="trigger">
                    <button class="flex items-center text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                        <div>Perusahaan Afiliasi</div>

                        <div class="ml-1">
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link href="#">
                        Vander IntiEnergi
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                        Vandertech In House Training
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                        Vander GEOLABORATORY
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                        9T Coffee
                    </x-dropdown-link>
                </x-slot>
            </x-dropdown>
        </div>

        <x-nav-link href="#">Mitra Usaha</x-nav-link>
        <x-nav-link href="#">News & Event</x-nav-link>
    </div>

    <a class="hidden lg:block h-10 px-5 py-2 mt-4 text-sm text-center text-gray-700 capitalize transition-colors duration-200 transform border rounded-md dark:hover:bg-gray-700 dark:text-white lg:mt-0 hover:bg-gray-100 lg:w-auto"
        href="#">
        Contact Us
    </a>
</nav>