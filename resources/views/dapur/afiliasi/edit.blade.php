<x-app-layout>
    <x-slot name="header">
        {{ __('Edit Perusahaan Afiliasi') }}
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <section class="p-8 mx-auto bg-white rounded-md shadow-md dark:bg-slate-800">
                
                <form action="{{ route('d.affiliation.update', $affiliation) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="w-32">
                        <x-toggle-switch name="hidden" value="1" checked="{{ $affiliation->hidden }}">
                            Sembunyikan
                        </x-toggle-switch>
                        
                        @error('hidden')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <hr class="my-6 border-slate-200" />

                    @include('dapur.afiliasi.form')

                    <div class="flex mt-12">
                        <x-button>Simpan</x-button>
                    </div>
                </form>

            </section>
        </div>
    </div>
</x-app-layout>
