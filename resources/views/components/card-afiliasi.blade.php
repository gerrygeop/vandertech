<a href="{{ $link }}">
    <div class="group relative overflow-hidden bg-white border hover:border-b-0 hover:shadow-lg hover:shadow-green-400/50 hover:border-green-600/25 hover:-translate-y-2 transition-all duration-300">
        <div class="p-4 h-36 flex items-center justify-center">
            <img class="w-auto max-h-full" src="{{ $image }}" alt="avatar">
        </div>
        
        <div class="py-4 text-center group-hover:bg-green-600 transition duration-300">
            <h2 class="text-lg font-medium text-slate-700 group-hover:text-slate-100 tracking-wider">{{ $slot }}</h2>
        </div>
    </div>
</a>