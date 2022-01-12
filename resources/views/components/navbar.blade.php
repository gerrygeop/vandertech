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
        <x-nav-link :href="route('/')" :active="request()->routeIs('/')">
            Home
        </x-nav-link>

        <div class="lg:mx-1 border-b-2 border-transparent hover:border-gray-200 focus:border-gray-200">
            <x-dropdown align="top" width="auto">
                <x-slot name="trigger">
                    <button class="nav-link px-3 py-2">
                        <div>Perusahaan Inti</div>

                        <div class="ml-px">
                            <x-arrow-bottom />
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link href="/#about">
                        Tentang Perusahaan
                    </x-dropdown-link>
                    <x-dropdown-link href="/#visi-misi">
                        Visi & Misi
                    </x-dropdown-link>
                </x-slot>
            </x-dropdown>
        </div>

        <div class="lg:mx-1 border-b-2 border-transparent hover:border-gray-200 focus:border-gray-200">
            <x-dropdown align="center" width="96">
                <x-slot name="trigger">
                    <button class="nav-link px-3 py-2">
                        <div>Perusahaan Afiliasi</div>

                        <div class="ml-px">
                            <x-arrow-bottom />
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link href="{{ route('vander-inti-energi') }}">
                        Vander Inti Energi
                        <img src="{{ url('image/afiliasi/2. Vander Inti Energi.png') }}" alt="Vender Inti Energi" class="w-auto h-10">
                    </x-dropdown-link>
                    <x-dropdown-link href="{{ route('vander-training') }}">
                        Vandertech In House Training
                        <img src="{{ url('image/afiliasi/0. training.png') }}" alt="Vander In House Training" class="w-auto h-10">
                    </x-dropdown-link>
                    <x-dropdown-link href="{{ route('vander-geolab') }}">
                        Vander Geolaboratory
                        <img src="{{ url('image/afiliasi/4. Vander Geolaboratory.png') }}" alt="Vender Geolaboratory" class="w-auto h-10">
                    </x-dropdown-link>
                    <x-dropdown-link href="{{ route('9t-coffee') }}">
                        9T Coffee
                        <img src="{{ url('image/afiliasi/5. 9T Coffee.png') }}" alt="9T Coffee" class="w-auto h-10">
                    </x-dropdown-link>
                </x-slot>
            </x-dropdown>
        </div>

        <x-nav-link href="/#mitra" :active="request()->is('/#mitra')">Mitra Usaha</x-nav-link>
        <x-nav-link :href="route('news-event')" :active="request()->routeIs('news-event')">News & Event</x-nav-link>
        <x-nav-link href="/#contact" :active="request()->routeIs('/#contact')">Kontak</x-nav-link>
    </div>

</nav>