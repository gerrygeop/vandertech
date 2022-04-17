<div class="grid grid-cols-1 gap-y-8">

    <div>
        <x-label class="mb-2">Mitra Perusahaan</x-label>
        <select name="id_partner" class="w-full md:w-auto select-menu">
            <option value="" class="text-slate-500">-- Mitra --</option>
            @foreach ($partners as $partner)
                <option value="{{ $partner->id }}" {{ $pelatihan->id_partner == $partner->id ? 'selected' : '' }}>
                    {{ $partner->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <x-label for="tahun" class="mb-2">Tahun</x-label>
        <x-input id="tahun" type="text" name="tahun" class="w-full" value="{{ old('tahun', $pelatihan->tahun) }}" />

        @error('tahun')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <x-label for="layanan_jasa" class="mb-2">Layanan Jasa / Pelatihan</x-label>
        <x-input id="layanan_jasa" type="text" name="layanan_jasa" class="w-full" value="{{ old('layanan_jasa', $pelatihan->layanan_jasa) }}" />

        @error('layanan_jasa')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>

</div>