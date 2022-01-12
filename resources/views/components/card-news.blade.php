<div class="xl:w-1/4 md:w-1/2 p-4">
    <div class="bg-gray-100 p-6 rounded-lg hover:-translate-y-2 hover:shadow-lg transition duration-200">
        <a href="{{ $link }}">
            <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ $cover }}" alt="content">
            {{-- <h3 class="tracking-widest text-indigo-500 text-xs font-medium">SUBTITLE</h3> --}}
            <h2 class="text-lg text-gray-900 font-medium mb-3 hover:underline truncate">{{ $heading }}</h2>
            <p class="leading-relaxed text-sm max-h-20 line-clamp-3">{{ $slot }}</p>

            <a href="#" class="inline-flex items-center -mx-1 mt-3 text-sm text-blue-500 capitalize transition-colors duration-200 transform dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                <span class="mx-1">Selengkapnya</span>
                <svg class="w-4 h-4 mx-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </a>
    </div>
</div>