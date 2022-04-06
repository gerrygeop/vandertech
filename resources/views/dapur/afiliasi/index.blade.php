<x-app-layout>
    @if (session('success'))
        <x-slot name="message">
            {{ session('success') }}
        </x-slot>
    @endif

    <x-slot name="header">
        Perusahaan Afiliasi
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-3 px-4 lg:px-0 text-right lg:text-left">
                <a href="{{ route('d.affiliation.create') }}" class="btn-add-primary">
                    <x-icon classes="mr-1" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    Tambah Afiliasi
                </a>
            </div>

            <x-table>
                <thead class="bg-slate-50">
                    <tr>
                        <x-th>No</x-th>
                        <x-th>Nama Afiliasi</x-th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-slate-200">
                    @forelse ($affiliations->sortBy('order') as $affiliation)
                        <tr>
                            <td class="px-6 py-4 text-sm text-slate-500">
                                {{ $affiliation->order }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-14 w-32">
                                        <img class="h-full w-auto mx-auto" src="{{ $affiliation->getLogoAffiliation() }}" alt="{{ $affiliation->name }}">
                                    </div>

                                    <div class="ml-4">
                                        <div class="text-base font-normal text-slate-700">
                                            {{ $affiliation->name }}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm z-50">
                                <div class="flex items-center justify-end">
                                    <a href="{{ route('d.affiliation.show', $affiliation) }}" class="btn-hover-primary">Detail</a>
                                    <a href="{{ route('d.affiliation.edit', $affiliation) }}" class="btn-hover-primary">Edit</a>

                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            <span class="inline-flex rounded-md">
                                                <button 
                                                    type="button"
                                                    class="inline-flex items-center p-2 text-sm text-gray-500 hover:text-gray-700 hover:bg-gray-200 rounded-md focus:outline-none transition"
                                                >
                                                    <x-icon d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                </button>
                                            </span>
                                        </x-slot>
                    
                                        <x-slot name="content">
                                            <x-dropdown-link href="{{ route('d.affiliation.photo.create', $affiliation) }}">
                                                <span class="btn-hover-primary p-0">Foto</span>
                                            </x-dropdown-link>

                                            @if ($affiliation->training)
                                            <x-dropdown-link href="{{ route('d.affiliation.training.index', $affiliation) }}">
                                                <span class="btn-hover-primary p-0">Pelatihan</span>
                                            </x-dropdown-link>
                                            @endif

                                            {{-- <x-dropdown-link href="{{ route('d.affiliation.show', $affiliation) }}">
                                                <span class="btn-hover-primary p-0">Detail</span>
                                            </x-dropdown-link>
                                            <x-dropdown-link href="{{ route('d.affiliation.edit', $affiliation) }}">
                                                <span class="btn-hover-primary p-0">Edit</span>
                                            </x-dropdown-link> --}}

                                            <form action="{{ route('d.affiliation.destroy', $affiliation) }}" method="POST" onsubmit="return confirm('Yakin untuk menghapus?')">
                                                @csrf
                                                @method('DELETE')
                                                <x-dropdown-link :href="route('d.affiliation.destroy', $affiliation)" onclick="event.preventDefault(); this.closest('form').submit();">
                                                    <span class="btn-hover-danger p-0">Hapus</span>
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap" colspan="2">
                                <p class="text-sm text-center text-slate-500 italic">Belum ada data</p>
                            </td>
                        </tr>

                    @endforelse
                </tbody>
            </x-table>

        </div>
    </div>
</x-app-layout>
