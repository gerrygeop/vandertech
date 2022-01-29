@php
    $affiliations = \App\Models\Affiliation::get();
@endphp

<nav x-data="{ open: false }" class="fixed top-0 inset-x-0 z-50 max-w-7xl mx-auto bg-white shadow-md shadow-slate-400/20">
    <!-- Primary Navigation Menu -->
    <div class="max-w-6xl mx-auto px-2 lg:px-0">
        <div class="flex justify-between h-16 lg:h-20">

            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('/') }}">
                        <img src="{{ url('image/Logo-Vandertech.png') }}" alt="Vandertech" class="w-44 lg:w-48 h-auto">
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

                            @foreach ($affiliations->sortBy('order') as $affiliation)
                                <x-dropdown-link href="{{ route('afiliasi.detail', $affiliation) }}">
                                    {{ $affiliation->name }}
                                    <img src="{{ $affiliation->getLogoAffiliation() }}" alt="{{ $affiliation->name }}" class="w-auto h-10">
                                </x-dropdown-link>
                            @endforeach

                        </x-slot>
                    </x-dropdown>
                </div>
        
                <x-nav-link href="/#mitra" :active="request()->is('/#mitra')">Mitra Usaha</x-nav-link>
                <x-nav-link :href="route('news-event.list')" :active="request()->routeIs('news-event.*')">News & Event</x-nav-link>
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
    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('/')" :active="request()->routeIs('/')" @click="open = ! open">
                Beranda
            </x-responsive-nav-link>

            <div x-data="{ profil: false }" class="px-4 py-2 border-y border-slate-200">
                <span @click="profil = ! profil" class="flex items-center justify-between mb-2 text-slate-400 text-sm">
                    Profil <x-arrow-bottom />
                </span>
                
                <div :class="{'block': profil, 'hidden': ! profil}" class="hidden lg:hidden">
                    <x-responsive-nav-link href="/#about" :active="request()->is('/#about')">Tentang Perusahaan</x-responsive-nav-link>
                    <x-responsive-nav-link href="/#visi-misi" :active="request()->is('/#visi-misi')">Visi & Misi</x-responsive-nav-link>
                </div>
            </div>

            <div x-data="{ afiliasi: false }" class="px-4 py-2 border-b border-slate-200">
                <span @click="afiliasi = ! afiliasi" class="flex items-center justify-between mb-2 text-slate-400 text-sm">
                    Perusahaan Afiliasi <x-arrow-bottom />
                </span>
                
                <div :class="{'block': afiliasi, 'hidden': ! afiliasi}" class="hidden lg:hidden">

                    @foreach ($affiliations->sortBy('order') as $affiliation)
                        <x-responsive-nav-link :href="route('afiliasi.detail', $affiliation)">
                            {{ $affiliation->name }}
                        </x-responsive-nav-link>
                    @endforeach

                </div>
            </div>

            <div @click="open = ! open">
                <x-responsive-nav-link href="/#mitra" :active="request()->is('/#mitra')">Mitra Usaha</x-responsive-nav-link>
                <x-responsive-nav-link :href="route('news-event.list')" :active="request()->routeIs('news-event.*')">News & Event</x-responsive-nav-link>
                <x-responsive-nav-link href="/#contact" :active="request()->routeIs('/#contact')">Kontak</x-responsive-nav-link>
            </div>
        </div>

    </div>
</nav>
