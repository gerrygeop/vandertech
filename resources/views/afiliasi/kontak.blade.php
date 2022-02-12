<div>
    <div class="mb-2">
        <h2 class="text-base md:text-lg text-slate-800 font-medium underline underline-offset-1">
            Kontak
        </h2>
    </div>
    
    @if ($affiliation->address)
        <div class="mt-4">
            <h2 class="font-semibold tracking-widest text-xs">ALAMAT</h2>
            <p class="mt-1 text-slate-900">
                {{ $affiliation->address }}
            </p>
        </div>
    @endif

    @if ($affiliation->email)
        <div class="mt-4">
            <h2 class="font-semibold tracking-widest text-xs">EMAIL</h2>
            <div class="flex items-center text-slate-900">
                <x-icon size="w-5 h-5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                <p class="ml-2">{{ $affiliation->email }}</p>
            </div>
        </div>
    @endif

    @if ($affiliation->email)
        <div class="mt-4">
            <h2 class="font-semibold tracking-widest text-xs">TELP</h2>
            <div class="flex items-center text-slate-900">
                <x-icon size="w-5 h-5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                <p class="ml-2">{{ $affiliation->telp }}</p>
            </div>
        </div>
    @endif
</div>