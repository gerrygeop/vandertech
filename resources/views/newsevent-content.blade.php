<div class="mx-auto overflow-hidden bg-white">
    <img class="object-cover w-full h-64 md:h-96" src="{{ $news->getPhoto() }}" alt="cover">

    <div class="lg:mt-6 px-6 py-6 lg:pt-0">
        <div class="flex items-center mb-2">
            @if ($news->is_event)
                <span class="tracking-widest text-blue-500 text-xs font-medium uppercase pr-4">Pelatihan</span>
            @endif
            <span class="text-xs text-slate-500 italic">
                {{ Carbon\Carbon::parse($news->created_at)->toFormattedDateString() }}
            </span>
        </div>
        
        <h2 class="block text-2xl font-semibold text-slate-800">
            {{ $news->title }}
        </h2>
        <article class="mt-2 text-base text-slate-700">{!! $news->body !!}</article>
    </div>
</div>