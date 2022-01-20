<nav x-data="{ open: false }" class="fixed top-0 inset-x-0 z-50 max-w-7xl mx-auto bg-white shadow-md shadow-slate-400/20">
    <!-- Primary Navigation Menu -->
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between h-20">

            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('/') }}">
                        <img src="{{ url('image/Logo-Vandertech.png') }}" alt="Vandertech" class="w-44 h-auto">
                    </a>
                </div>
            </div>
            
            <!-- Navigation Links -->
            <div class="hidden space-x-4 lg:-my-px lg:ml-10 lg:flex">
                <x-nav-link :href="route('/')" :active="request()->routeIs('/')">Beranda</x-nav-link>

                <div class="nav-dropdown__wrapper">
                    <x-dropdown align="top" width="auto">
                        <x-slot name="trigger">
                            <button class="nav-dropdown__trigger px-3 py-2">
                                <div>Profil</div>
        
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

                <div class="nav-dropdown__wrapper">
                    <x-dropdown align="center" width="96">
                        <x-slot name="trigger">
                            <button class="nav-dropdown__trigger px-3 py-2">
                                <div>Perusahaan Afiliasi</div>
        
                                <div class="ml-px">
                                    <x-arrow-bottom />
                                </div>
                            </button>
                        </x-slot>
        
                        <x-slot name="content">
                            <x-dropdown-link href="{{ route('vander-inti-energi') }}">
                                Vander Inti Energi
                                <img src="{{ url('image/logo-afiliasi/vander-inti.png') }}" alt="Vender Inti Energi" class="w-auto h-10">
                            </x-dropdown-link>
                            <x-dropdown-link href="{{ route('vander-training') }}">
                                Vandertech Indo Training
                                <img src="{{ url('image/logo-afiliasi/indo-training.png') }}" alt="Vander Indo Training" class="w-auto h-10">
                            </x-dropdown-link>
                            <x-dropdown-link href="{{ route('vander-geolab') }}">
                                Vander Geo Laboratory
                                <img src="{{ url('image/logo-afiliasi/vander-geo.png') }}" alt="Vender Geo Laboratory" class="w-auto h-10">
                            </x-dropdown-link>
                            <x-dropdown-link href="{{ route('9t-coffee') }}">
                                9T Coffee
                                <img src="{{ url('image/logo-afiliasi/9t-coffee.png') }}" alt="9T Coffee" class="w-auto h-10">
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
        
                <x-nav-link href="/#mitra" :active="request()->is('/#mitra')">Mitra Usaha</x-nav-link>
                <x-nav-link :href="route('news-event')" :active="request()->routeIs('news-event')">News & Event</x-nav-link>
                <x-nav-link href="/#contact" :active="request()->routeIs('/#contact')">Kontak</x-nav-link>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-slate-400 hover:text-slate-500 hover:bg-slate-100 focus:outline-none focus:bg-slate-100 focus:text-slate-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" @click="open = ! open" class="hidden lg:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('/')" :active="request()->routeIs('/')">
                Beranda
            </x-responsive-nav-link>

            <div class="px-4 py-2 border-y border-slate-200">
                <span class="block mb-2 text-slate-400 text-sm">Profil</span>
                
                <x-responsive-nav-link href="/#about" :active="request()->is('/#about')">Tentang Perusahaan</x-responsive-nav-link>
                <x-responsive-nav-link href="/#visi-misi" :active="request()->is('/#visi-misi')">Visi & Misi</x-responsive-nav-link>
            </div>

            <div class="px-4 py-2 border-b border-slate-200">
                <span class="block mb-2 text-slate-400 text-sm">Perusahaan Afiliasi</span>
                
                <x-responsive-nav-link :href="route('vander-inti-energi')" :active="request()->routeIs('vander-inti-energi')">Vander Inti Energi</x-responsive-nav-link>
                <x-responsive-nav-link :href="route('vander-training')" :active="request()->routeIs('vander-training')">Vandertech Indo Training</x-responsive-nav-link>
                <x-responsive-nav-link :href="route('vander-geolab')" :active="request()->routeIs('vander-geolab')">Vander Geo Laboratory</x-responsive-nav-link>
                <x-responsive-nav-link :href="route('9t-coffee')" :active="request()->routeIs('9t-coffee')">9T Coffee</x-responsive-nav-link>
            </div>

            <x-responsive-nav-link href="/#mitra" :active="request()->is('/#mitra')">Mitra Usaha</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('news-event')" :active="request()->routeIs('news-event')">News & Event</x-responsive-nav-link>
            <x-responsive-nav-link href="/#contact" :active="request()->routeIs('/#contact')">Kontak</x-responsive-nav-link>
        </div>

    </div>
</nav>
