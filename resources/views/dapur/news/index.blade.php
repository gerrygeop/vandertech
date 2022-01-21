<x-app-layout>
    <x-slot name="header">
        {{ __('News & Event') }}
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-3 px-4 lg:px-0 text-right lg:text-left">
                <a href="{{ route('d.news.create') }}" class="btn-add-primary">
                    <x-icon classes="w-5 h-5 mr-1" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    News & Event
                </a>
            </div>

            <x-table>
                <thead class="bg-slate-50">
                    <tr>
                        <x-th>
                            Judul
                        </x-th>
                        <x-th>
                            Status
                        </x-th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-slate-200">
                    @forelse ($news as $new)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <p class="text-sm text-slate-700">
                                        {{ $new->title }}
                                    </p>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <x-badge status="{{ $new->status }}">
                                    {{ $new->status }}
                                </x-badge>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                <div class="flex items-center justify-end">
                                    <a href="{{ route('d.news.show', $new) }}" class="btn-hover-primary">Detail</a>
                                    <a href="{{ route('d.news.edit', $new) }}" class="btn-hover-primary">Edit</a>

                                    <form action="{{ route('d.news.destroy', $new) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn-hover-danger">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap" colspan="3">
                                <p class="text-sm text-center text-slate-500 italic">Belum ada data</p>
                            </td>
                        </tr>

                    @endforelse
                </tbody>
            </x-table>

        </div>
    </div>
</x-app-layout>
