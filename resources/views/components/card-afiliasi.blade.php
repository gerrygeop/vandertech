<a href="{{ $link }}">
    <div class="group relative overflow-hidden bg-white border hover:border-b-0 hover:shadow-lg hover:shadow-green-400/50 hover:border-green-600/25 md:hover:-translate-y-2 transition-all duration-300">
        <div class="p-4 h-28 md:h-36 flex items-center justify-center">
            <img class="w-auto max-h-full" src="{{ $image }}" alt="avatar">
        </div>
        
        <div class="px-2 py-4 lg:py-2 text-center group-hover:bg-green-600 transition duration-300">
            <h2 class="text-base font-medium text-slate-700 group-hover:text-slate-100 tracking-wide">{{ $slot }}</h2>
        </div>
    </div>
</a>