<x-app-layout>
    @if (session('success'))
        <x-slot name="message">
            {{ session('success') }}
        </x-slot>
    @endif

    <x-slot name="header">
        Kategori
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-3 px-4 lg:px-0 text-right lg:text-left">
                <a href="{{ route('d.category.create') }}" class="btn-add-primary">
                    <x-icon classes="mr-1" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    Kategori
                </a>
            </div>

            <x-table>
                <thead class="bg-slate-50">
                    <tr>
                        <x-th>
                            List Kategori
                        </x-th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-slate-200">
                    @forelse ($categories as $category)
                        <tr>
                            <td class="px-6 py-4 text-sm md:text-base text-slate-700 whitespace-nowrap capitalize">
                                {{ $category->name }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                <div class="flex items-center justify-end">
                                    <a href="{{ route('d.category.edit', $category) }}" class="btn-hover-primary">Edit</a>

                                    <form action="{{ route('d.category.destroy', $category) }}" method="POST">
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
