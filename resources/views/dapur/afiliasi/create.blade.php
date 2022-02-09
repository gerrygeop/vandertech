<x-app-layout>
    <x-slot name="header">
        {{ __('Tambah Perusahaan Afiliasi') }}
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <section class="p-8 mx-auto bg-white rounded-md shadow-md">
                
                <form action="{{ route('d.affiliation.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @include('dapur.afiliasi.form')

                    <div class="flex mt-12">
                        <x-button>Simpan</x-button>
                    </div>
                </form>

            </section>
        </div>
    </div>
</x-app-layout>
