<div>
    <div class="mb-4">
        <div class="mb-1">
            <h2 class="text-base md:text-lg text-slate-900 font-medium tracking-wider underline underline-offset-1">Visi</h2>
        </div>
        <p class="text-sm md:text-base text-slate-800">
            {{ $affiliation->visi }}
        </p>
    </div>
    <div class="mb-4">
        <div class="mb-1">
            <h2 class="text-base md:text-lg text-slate-900 font-medium tracking-wider underline underline-offset-1">Misi</h2>
        </div>
        <div class="pl-5" id="visi-misi-afiliasi">
            {!! Str::markdown($affiliation->misi) !!}
        </div>
    </div>
</div>