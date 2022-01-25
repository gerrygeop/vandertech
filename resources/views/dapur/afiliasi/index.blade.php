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
                    Perusahaan Afiliasi
                </a>
            </div>

            <x-table>
                <thead class="bg-slate-50">
                    <tr>
                        <x-th>
                            List Perusahaan
                        </x-th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-slate-200">
                    @forelse ($affiliations as $affiliation)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-32">
                                        <img class="h-full w-auto mx-auto" src="{{ $affiliation->getLogoAffiliation() }}" alt="{{ $affiliation->name }}">
                                    </div>

                                    <div class="ml-4">
                                        <div class="text-base font-normal text-slate-700">
                                            {{ $affiliation->name }}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                <div class="flex items-center justify-end">
                                    <a href="{{ route('d.affiliation.photo.create', $affiliation) }}" class="btn-hover-primary">Foto</a>
                                    <a href="{{ route('d.affiliation.show', $affiliation) }}" class="btn-hover-primary">Detail</a>
                                    <a href="{{ route('d.affiliation.edit', $affiliation) }}" class="btn-hover-primary">Edit</a>

                                    <form action="{{ route('d.affiliation.destroy', $affiliation) }}" method="POST">
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
                                <p class="text-sm text-center text-slate-500 italic">Belum ada data</p>
                            </td>
                        </tr>

                    @endforelse
                </tbody>
            </x-table>

        </div>
    </div>
</x-app-layout>
