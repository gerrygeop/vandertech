<x-app-layout>
    <x-slot name="header">
        {{ __('News & Event') }}
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-3">
                <a href="{{ route('news.create') }}" class="btn-add-primary">
                    <x-icon classes="w-5 h-5 mr-1" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    News & Event
                </a>
            </div>

            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">

                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Judul
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">

                                    @foreach ($news as $new)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <p class="text-sm text-gray-700">
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
                                                    <a href="{{ route('news.show', $new) }}" class="p-2 text-indigo-600 hover:text-indigo-800 hover:underline">Detail</a>
                                                    <a href="{{ route('news.edit', $new) }}" class="p-2 text-indigo-600 hover:text-indigo-800 hover:underline">Edit</a>
            
                                                    <form action="{{ route('news.destroy', $new) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
            
                                                        <button class="p-2 text-red-500 hover:text-red-700 hover:underline">Hapus</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
