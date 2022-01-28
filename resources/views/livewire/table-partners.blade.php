<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    <div class="grid grid-cols-4 lg:grid-cols-8 gap-y-4 items-center mb-6 px-2 md:px-0">
        <div class="col-span-full flex justify-end lg:justify-start">
            <a href="{{ route('d.partner.create') }}" class="btn-add-primary">
                <x-icon classes="mr-2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                Perusahaan Mitra
            </a>
        </div>

        <div class="col-span-full lg:col-span-6 flex rounded-md">
            <span
                class="inline-flex items-center px-2 bg-slate-50 text-slate-500 text-sm rounded-l-md border border-r-0 border-slate-300">
                <x-icon d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </span>
            <x-input 
                type="search" 
                wire:model="search" 
                class="w-full border-l-0 rounded-l-none rounded-r-md lg:rounded-r-none"
                placeholder="Cari nama perusahaan"
            />
        </div>

        <select name="kategori" wire:model="kategori" class="col-span-full lg:col-span-2 select-menu">
            <option value="" class="text-slate-500">-- Kategori --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">
                    {{ Str::title($category->name) }}
                </option>
            @endforeach
        </select>
    </div>

    <x-table>
        <thead class="bg-slate-50">
            <tr>
                <x-th>List Mitra</x-th>
                <x-th>Nama</x-th>
                <x-th>Kategori</x-th>
                <th scope="col" class="relative px-4 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>

        <tbody class="bg-white divide-y divide-slate-200">
            <tr wire:loading>
                <td class="px-6 py-4 text-center italic w-full" colspan="4">
                    <p class="text-sm text-gray-500">
                        Loading...
                    </p>
                </td>
            </tr>

            @forelse ($partners as $partner)
                <tr wire:loading.remove>
                    <td class="p-4 whitespace-nowrap">
                        <div class="shrink h-8 w-24 md:h-10 md:w-28">
                            <img class="h-full w-auto mx-auto" src="{{ $partner->getLogoPartner() }}" alt="{{ $partner->name }}">
                        </div>
                    </td>
                    <td class="p-4 lg:whitespace-nowrap">
                        <div class="text-xs md:text-sm font-normal text-slate-700">
                            {{ $partner->name }}
                        </div>
                    </td>
                    <td class="p-4 whitespace-nowrap">
                        @if ($partner->categories->count() > 0)
                            @foreach ($partner->categories as $category)
                                <div class="text-xs text-gray-500 capitalize">
                                    - {{ $category->name }}
                                </div>
                            @endforeach
                        @else
                            <div class="text-sm text-gray-500">
                                -
                            </div>
                        @endif
                    </td>

                    <td class="p-4 whitespace-nowrap text-sm">
                        <div class="flex items-center justify-end">
                            <a href="{{ route('d.partner.show', $partner) }}" class="btn-hover-primary">Detail</a>
                            <a href="{{ route('d.partner.edit', $partner) }}" class="btn-hover-primary">Edit</a>

                            <form action="{{ route('d.partner.destroy', $partner) }}" method="POST" onsubmit="return confirm('Yakin untuk menghapus?')">
                                @csrf
                                @method('DELETE')

                                <button class="btn-hover-danger">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>

            @empty
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                        <p class="text-sm text-center text-slate-500 italic">Tidak ada data</p>
                    </td>
                </tr>

            @endforelse
        </tbody>
    </x-table>
    
</div>
