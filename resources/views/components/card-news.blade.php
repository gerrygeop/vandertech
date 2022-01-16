<div class="col-span-1">
    <a href="{{ $link }}">
        <div class="bg-white p-4 rounded-lg group hover:-translate-y-2 hover:shadow-lg overflow-hidden transition duration-200">
            <img class="h-40 rounded w-full object-cover object-center mb-4" src="{{ $cover }}" alt="content">

            <div class="flex items-center py-1">
                @if ($isEvent)
                    <span class="tracking-widest text-indigo-500 text-xs font-medium uppercase pr-4">Pelatihan</span>
                @endif

                <span class="text-xs text-gray-500">
                    {{ Carbon\Carbon::parse($timestamp)->toFormattedDateString() }}
                </span>
            </div>

            <h2 class="text-lg text-gray-900 font-medium mb-2 group-hover:underline">{{ $heading }}</h2>
            {{-- <p class="leading-relaxed text-sm max-h-20 line-clamp-3">{{ $slot }}</p> --}}

            <p class="inline-flex items-center -mx-1 mt-1 text-sm text-blue-500 capitalize transition duration-200 dark:text-blue-400 group-hover:underline group-hover:text-blue-600 dark:group-hover:text-blue-500">
                <span class="mx-1">Selengkapnya</span>
                <svg class="w-4 h-4 mx-1 group-hover:translate-x-2 transition duration-200" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </p>
        </div>
    </a>
</div>