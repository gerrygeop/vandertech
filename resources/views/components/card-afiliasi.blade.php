<a href="{{ $link }}">
    <div class="group relative overflow-hidden bg-transparent transition-all duration-200">
        <div class="p-4 h-28 md:h-36 flex items-center justify-center">
            <img class="w-auto max-h-full" src="{{ $image }}" alt="avatar">
        </div>
        
        <div class="pb-4 bg-blue-700/60 backdrop-blur absolute border -bottom-10 inset-x-0 h-0 group-hover:bottom-0 group-hover:h-full lg:py-2 transition-all duration-200">
            <h2 class="flex items-center justify-center h-full text-lg text-slate-100 font-semibold tracking-wide">
                <span>{{ $slot }}</span>
            </h2>
        </div>
    </div>
</a>