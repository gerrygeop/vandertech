<x-app-layout>
    @if (session('success'))
        <x-slot name="message">
            {{ session('success') }}
        </x-slot>
    @endif

    <x-slot name="header">
        Layanan Jasa / Pelatihan
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="flex items-center justify-between mb-3 px-4 lg:px-0">
                <a href="{{ route('d.affiliation.show', $affiliation) }}" class="flex items-center text-slate-700 px-3 py-2 bg-slate-200 hover:bg-slate-300 rounded">
                    <x-icon classes="mr-1" d="M10 19l-7-7m0 0l7-7m-7 7h18" size="w-5 h-5" />
                    Kembali
                </a>
                <a href="{{ route('d.affiliation.training.create', $affiliation) }}" class="btn-add-primary">
                    <x-icon classes="mr-1" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    Tambah Data
                </a>
            </div>

            <x-table>
                <thead class="bg-slate-50">
                    <tr>
                        <x-th>Tahun</x-th>
                        <x-th>Mitra Perusahaan</x-th>
                        <x-th>Layanan Jasa</x-th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-slate-200">
                    @forelse ($pelatihan as $item)
                        <tr>
                            <td class="px-6 py-4 text-sm md:text-base text-slate-700 whitespace-nowrap capitalize">
                                {{ $item->tahun }}
                            </td>
                            <td class="px-6 py-4 text-sm md:text-base text-slate-700 whitespace-nowrap capitalize">
                                {{ $item->partner->name }}
                            </td>
                            <td class="px-6 py-4 text-sm md:text-base text-slate-700 capitalize">
                                {{ $item->layanan_jasa }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                <div class="flex items-center justify-end">
                                    <a href="{{ route('d.affiliation.training.edit', [$affiliation, $item]) }}" class="btn-hover-primary">Edit</a>

                                    <form action="{{ route('d.affiliation.training.destroy', $item) }}" method="POST" onsubmit="return confirm('Yakin untuk menghapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-hover-danger">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap" colspan="4">
                                <p class="text-sm text-center text-slate-500 italic">Belum ada data</p>
                            </td>
                        </tr>

                    @endforelse
                </tbody>
            </x-table>

        </div>
    </div>
</x-app-layout>
