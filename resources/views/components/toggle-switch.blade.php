@props(['name', 'checked'])

<label class="relative flex justify-between items-center font-medium text-md">
    {{ $slot }}
    <input 
        type="checkbox" 
        name="{{ $name }}"
        value="aktif"
        class="absolute left-1/2 -translate-x-1/2 w-full h-full peer appearance-none hidden rounded-md" 
        {{ $checked === 'aktif' ? 'checked' : '' }}
    />
    <span class="w-14 h-8 flex items-center flex-shrink-0 ml-4 p-1 bg-gray-300 rounded-full duration-300 ease-in-out peer-checked:bg-blue-400 after:w-6 after:h-6 after:bg-white after:rounded-full after:shadow-md after:duration-300 peer-checked:after:translate-x-6"></span>
</label>