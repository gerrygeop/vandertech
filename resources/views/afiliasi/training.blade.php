<div>
    <h2 class="text-base md:text-lg text-slate-900 font-medium tracking-wider underline underline-offset-1">
        {{ $affiliation->training_name }}
    </h2>
    <div class="pl-5" id="training-afiliasi">
        {!! Str::markdown($affiliation->training) !!}
    </div>
</div>