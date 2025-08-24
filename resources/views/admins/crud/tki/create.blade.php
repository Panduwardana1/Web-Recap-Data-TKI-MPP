<form action="{{ route('admin.tki.store') }}" method="POST" class="p-4">
    @csrf
    <div class="grid gap-4">
        <input type="text" name="name" class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none"
            placeholder="Nama" value="{{ old('name') }}" required>
        <input type="text" name="nik" class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none"
            placeholder="NIK" value="{{ old('nik') }}" required>

        <select name="gender" class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none" required>
            <option value="">Gender</option>
            <option value="L" {{ old('gender') == 'L' ? 'selected' : '' }}>L</option>
            <option value="P" {{ old('gender') == 'P' ? 'selected' : '' }}>P</option>
        </select>

        <input type="text" name="place_of_birth"
            class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none" placeholder="Tempat Lahir"
            value="{{ old('place_of_birth') }}" required>

        <input type="date" name="date_of_birth"
            class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none"
            value="{{ old('date_of_birth') }}" required>

        <input type="text" name="address_vilage"
            class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none" placeholder="Alamat Desa"
            value="{{ old('address_vilage') }}" required>

        <input type="text" name="district"
            class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none" placeholder="Kecamatan"
            value="{{ old('district') }}" required>

        <select name="education" class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none" required>
            <option value="">Pendidikan</option>
            @foreach ($educationOptions as $option)
                <option value="{{ $option }}" {{ old('education') == $option ? 'selected' : '' }}
                    class="font-semibold">
                    {{ $option }}
                </option>
            @endforeach
        </select>

        <input type="text" name="phone" class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none"
            placeholder="No Telepon" value="{{ old('phone') }}">

        <select name="compani_id" class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none" required>
            <option value="">PT</option>
            @foreach ($compani as $cmp)
                <option value="{{ $cmp->id }}" {{ old('compani_id') == $cmp->id ? 'selected' : '' }}>
                    {{ $cmp->name }}
                </option>
            @endforeach
        </select>

        <select name="destination_id" class="pl-2 w-full p-1 rounded-md ring-1 ring-slate-500 focus:outline-none"
            required>
            <option value="">Negara Tujuan</option>
            @foreach ($dest as $d)
                <option value="{{ $d->id }}" {{ old('destination_id') == $d->id ? 'selected' : '' }}>
                    {{ $d->country_name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mt-4 flex items-center gap-2">
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
