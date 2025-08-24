<form action="{{ route('admin.tki.update', $tki->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="grid gap-1">
        <span>
            <label for="" class="font-medium text-sm text-gray-500">Nama Lengkap</label>
            <input type="text" name="name"
                class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none" placeholder="Nama"
                value="{{ old('name', $tki->name) }}" required>
        </span>
        <span>
            <label for="" class="font-medium text-sm text-gray-500">NIK</label>
            <input type="text" name="nik"
                class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none" placeholder="NIK"
                value="{{ old('nik', $tki->nik) }}" required>
        </span>
        <span>
            <label for="" class="font-medium text-sm text-gray-500">Gneder</label>
            <select name="gender" class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none" required>
                <option value="L" {{ old('gender', $tki->gender) == 'L' ? 'selected' : '' }}>L
                </option>
                <option value="P" {{ old('gender', $tki->gender) == 'P' ? 'selected' : '' }}>P
                </option>
            </select>
        </span>

        <span>
            <label for="" class="font-medium text-sm text-gray-500">Tempat Lahir</label>
            <input type="text" name="place_of_birth"
                class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none" placeholder="Tempat Lahir"
                value="{{ old('place_of_birth', $tki->place_of_birth) }}" required>
        </span>

        <span>
            <label for="" class="font-medium text-sm text-gray-500">Tanggal Lahir</label>
            <input type="date" name="date_of_birth"
                class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none"
                value="{{ old('date_of_birth', $tki->date_of_birth) }}" required>
        </span>

        <span>
            <label for="" class="font-medium text-sm text-gray-500">Desa</label>
            <input type="text" name="address_vilage"
                class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none" placeholder="Alamat Desa"
                value="{{ old('address_vilage', $tki->address_vilage) }}" required>
        </span>

        <span>
            <label for="" class="font-medium text-sm text-gray-500">Kecamatan</label>
            <input type="text" name="district"
                class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none" placeholder="Kecamatan"
                value="{{ old('district', $tki->district) }}" required>
        </span>

        <span>
            <label for="" class="font-medium text-sm text-gray-500">Pendidikan</label>
            <select name="education" class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none"
                required>
                <option value="">Chose</option>
                @foreach ($educationOptions as $option)
                    <option value="{{ $option }}"
                        {{ old('education', $tki->education) == $option ? 'selected' : '' }}>
                        {{ $option }}
                    </option>
                @endforeach
            </select>
        </span>
        <span>
            <label for="" class="font-medium text-sm text-gray-500">No HP (opsional)</label>
            <input type="text" name="phone"
                class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none" placeholder="No Telepon"
                value="{{ old('phone', $tki->phone) }}">
        </span>
        <span>
            <label for="" class="font-medium text-sm text-gray-500">PT</label>
            <select name="compani_id" class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none"
                required>
                <option value="">Pilih Perusahaan</option>
                @foreach ($compani as $cmp)
                    <option value="{{ $cmp->id }}"
                        {{ old('compani_id', $tki->compani_id) == $cmp->id ? 'selected' : '' }}>
                        {{ $cmp->name }}
                    </option>
                @endforeach
            </select>
        </span>
        <span>
            <label for="" class="font-medium text-sm text-gray-500">Destinasi</label>
            <select name="destination_id" class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none"
                required>
                <option value="">Pilih Negara Tujuan</option>
                @foreach ($dest as $d)
                    <option value="{{ $d->id }}"
                        {{ old('destination_id', $tki->destination_id) == $d->id ? 'selected' : '' }}>
                        {{ $d->country_name }}
                    </option>
                @endforeach
            </select>
        </span>
    </div>

    <div class="mt-4 flex w-full items-center gap-2">
        <span class="flex items-center py-1 px-2 gap-1 font-semibold bg-blue-700 text-white rounded hover:bg-blue-500">
            <x-heroicon-s-document-text class="h-4 w-4"></x-heroicon-s-document-text>
            <button type="submit">Save</button>
        </span>
        <span class="flex items-center py-1 px-2 font-semibold bg-gray-800 text-white rounded hover:bg-gray-500">
            <a href="{{ route('admin.alldata') }}">
                Back
            </a>
        </span>
    </div>
</form>
