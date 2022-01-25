@props(['message' => ''])

<div class="fixed top-0 z-50 w-full text-white bg-gradient-to-r from-blue-600 to-indigo-600 shadow-md" x-data="{ show: true }" x-show="show" @click.away="show = false">
    <div class="container flex items-center justify-between px-12 py-4 mx-auto">
        <div class="flex">
            <x-icon d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />

            <p class="mx-3">{{ $message }}</p>
        </div>

        <button @click="show = false"
            class="p-1 transition-colors duration-200 transform rounded-md hover:bg-opacity-25 hover:bg-gray-600 focus:outline-none">
            <x-icon size="w-5 h-5" d="M6 18L18 6M6 6L18 18" />
        </button>
    </div>
</div>