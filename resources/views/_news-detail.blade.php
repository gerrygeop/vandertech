<div class="mx-auto overflow-hidden bg-white dark:bg-gray-800">
    <img class="object-cover w-full h-64 md:h-96" src="{{ $news->getPhoto() }}" alt="Article">

    <div class="lg:mt-6 p-6 lg:px-0">
        <div>
            @if ($news->is_event)
                <span class="mb-2 tracking-widest text-xs font-medium text-blue-600 uppercase dark:text-blue-400">Pelatihan</span>
            @endif
            
            <h2 class="block text-2xl font-semibold text-gray-800 dark:text-white">
                {{ $news->title }}
            </h2>
            <article class="mt-2 text-base text-gray-700">{!! $news->body !!}</article>
        </div>

        <div class="mt-6">
            <span class="mx-1 text-sm text-gray-500 italic">
                {{ Carbon\Carbon::parse($news->created_at)->toFormattedDateString() }}
            </span>
        </div>
    </div>
</div>