<div class="px-5 py-10 bg-white">
    <div class="max-w-4xl mx-auto">

        <div class="flex flex-col text-center w-full mb-8">
            <h1 class="sm:text-3xl text-2xl font-medium mb-4 text-gray-900">Contact Us</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Jika ingin mendaftar pada kegiatan ini silahkan mengisi form dibawah ini lalu klik kirim.</p>
        </div>

        <div class="w-full lg:w-2/3 mx-auto">
            <div class="flex flex-col">
                <div class="mb-4">
                    <x-label for="nama" class="mb-2">Nama</x-label>
                    <x-input type="text" class="w-full" id="nama" required />
                </div>

                <div class="mb-6">
                    <x-label for="asal" class="mb-2">Asal</x-label>
                    <x-input type="text" name="asal" class="w-full" id="asal" required />
                </div>

                <div class="w-full">
                    <x-button id="btn-wa" class="w-full md:w-fit">Kirim</x-button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        const btnKirim = document.getElementById('btn-wa');

        btnKirim.addEventListener('click', function() {
            const nama = document.getElementById('nama').value;
            const asal = document.getElementById('asal').value;

            const text = 'Halo, Nama saya *'+nama+'* dari *'+asal+'* ingin mendaftar pada kegiatan *'+@json($news->title)+'*';

            let win = window.open('https://api.whatsapp.com/send?phone='+@json($news->contact)+'&text='+text);
            if (win) {
                win.focus();
            } else {
                alert('Please allow popups for this website');
            }
            return false;
        });
    </script>
@endpush