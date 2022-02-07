<x-app-layout>
    <x-slot name="header">
        Pengaturan
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

                {{-- Update Informasi --}}
                <div class="col-span-full lg:col-span-1 px-4 lg:px-0">
                    <h2 class="capitalize text-slate-700">Informasi Profil</h2>
                    <p class="text-slate-400 text-sm font-light">
                        Perbarui informasi profil dan alamat email akun Anda
                    </p>
                </div>

                <section class="col-span-full lg:col-span-2 p-8 w-full mx-auto bg-white border rounded-md shadow">
                    <form action="{{ route('d.setting.update-informasi') }}" method="POST">
                        @csrf
                        @method('PUT')
    
                        <div class="grid grid-cols-1 gap-y-8">
                            <div>
                                <x-label for="name" class="mb-2">Nama</x-label>
                                <x-input id="name" type="text" name="name" class="w-full" value="{{ old('name', auth()->user()->name) }}" />
    
                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
    
                            <div>
                                <x-label for="email" class="mb-2">E-mail</x-label>
                                <x-input id="email" type="text" name="email" class="w-full" value="{{ old('email', auth()->user()->email) }}" />
    
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
    
                        <div class="flex items-center space-x-2 mt-12">
                            <x-button>Simpan</x-button>
                            
                            @if (session('saved-information'))
                                <p class="text-indigo-600 text-sm">{{ session('saved-information') }}</p>
                            @endif
                        </div>
                    </form>
                </section>

                <div class="col-span-full border-t border-slate-200 my-4 lg:my-8"></div>

                {{-- Update Password --}}
                <div class="col-span-full lg:col-span-1 px-4 lg:px-0">
                    <h2 class="capitalize text-slate-700">Perbarui kata sandi</h2>
                    <p class="text-slate-400 text-sm font-light">
                        Pastikan akun Anda menggunakan kata sandi acak yang panjang agar tetap aman.
                    </p>
                </div>

                <section class="col-span-full lg:col-span-2 p-8 w-full mx-auto bg-white border rounded-md shadow">
                    <form action="{{ route('d.setting.update-password') }}" method="POST">
                        @csrf
                        @method('PUT')
    
                        <div class="grid grid-cols-1 gap-y-8">
                            <div>
                                <x-label for="current_password" class="mb-2">Kata Sandi Lama</x-label>
                                <x-input id="current_password" type="password" name="current_password" class="w-full" />
    
                                @error('current_password')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                                @if (session('error-password'))
                                    <p class="text-red-600 text-sm mt-1">{{ session('error-password') }}</p>
                                @endif
                            </div>
    
                            <div>
                                <x-label for="password" class="mb-2">Kata Sandi Baru</x-label>
                                <x-input id="password" type="password" name="password" class="w-full" />
    
                                @error('password')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <x-label for="password_confirmation" class="mb-2">Konfirmasi Kata Sandi</x-label>
                                <x-input id="password_confirmation" type="password" name="password_confirmation" class="w-full" />
    
                                @error('password_confirmation')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
    
                        <div class="flex items-center space-x-2 mt-12">
                            <x-button>Simpan</x-button>

                            @if (session('saved-password'))
                                <p class="text-indigo-600 text-sm">{{ session('saved-password') }}</p>
                            @endif
                        </div>
                    </form>
                </section>

            </div>

        </div>
    </div>
</x-app-layout>
