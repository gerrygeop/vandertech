<nav class="fixed top-0 inset-x-0 z-50 bg-white h-20 py-4 lg:px-12 mx-auto lg:flex lg:justify-between lg:items-center shadow-md" x-data="{ hamburger : false }">
    <div class="flex items-center justify-between px-4 lg:px-0">
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
    <div 
        :class="{'flex': hamburger, 'hidden': ! hamburger}" 
        class="bg-white hidden lg:flex flex-col lg:flex-row px-4 lg:px-0 mt-4 lg:mt-0 lg:-mx-6 space-y-2 lg:space-y-0 shadow-md lg:shadow-none"
    >
        <x-nav-link 
            :href="route('/')" 
            :active="request()->routeIs('/')"
        >
            Home
        </x-nav-link>

        <div class="px-3 py-2 lg:mx-1 hover:bg-blue-200 rounded-md">
            <x-dropdown align="left" width="auto">
                <x-slot name="trigger">
                    <button class="nav-link">
                        <div>Perusahaan Inti</div>

                        <div class="ml-px">
                            <x-arrow-bottom />
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

        <div class="px-3 py-2 lg:mx-1 hover:bg-blue-200 rounded-md">
            <x-dropdown align="left" width="auto">
                <x-slot name="trigger">
                    <button class="nav-link">
                        <div>Perusahaan Afiliasi</div>

                        <div class="ml-px">
                            <x-arrow-bottom />
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
        <x-nav-link href="#">Kontak</x-nav-link>
    </div>

</nav>