<div class="flex flex-col w-64 h-full px-4 py-4 bg-white border-r">
    <div class="h-10">
        <img src="{{ url('image/Logo-Vandertech.png') }}" alt="Logo Vandertech" class="w-auto h-full mx-auto">
    </div>
    
    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav>
            <x-sidenav-link :href="route('d.dashboard')" :active="request()->routeIs('d.dashboard')">
                <x-icon d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                <span class="mx-4 font-medium">Dashboard</span>
            </x-sidenav-link>

            <x-sidenav-link :href="route('d.news.index')" :active="request()->routeIs('d.news.*')">
                <x-icon d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                <span class="mx-4 font-medium">News & Event</span>
            </x-sidenav-link>

            <x-sidenav-link :href="route('d.affiliation.index')" :active="request()->routeIs('d.affiliation.*')">
                <x-icon d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                <span class="mx-4 font-medium">Afiliasi</span>
            </x-sidenav-link>

            <x-sidenav-link href="#">
                <x-icon d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                <span class="mx-4 font-medium">Mitra</span>
            </x-sidenav-link>

            <hr class="my-6 border-indigo-300" />

            <x-sidenav-link href="#">
                <x-icon d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </x-icon>
                <span class="mx-4 font-medium">Settings</span>
            </x-sidenav-link>
        </nav>

    </div>
</div>