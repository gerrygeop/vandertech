<x-app-layout>
    <x-slot name="header">
        Pelatihan telah dilaksanakan
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <section class="p-8 mx-auto bg-white rounded-md shadow-md">
                
                <form action="{{ route('d.affiliation.training.update', [$affiliation, $pelatihan]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    @include('dapur.training.form')

                    <div class="flex mt-12">
                        <a href="{{ route('d.affiliation.training.index', $affiliation) }}" class="mr-2 btn-secondary">
                            Batal
                        </a>
                        <x-button>Simpan</x-button>
                    </div>
                </form>

            </section>
        </div>
    </div>
</x-app-layout>
