<main class=" min-h-screen flex items-center p-0 m-0">
    <div class="grid grid-cols-2 w-full h-screen">
        {{-- Col 1 --}}
        <div
            class="border-r h-screen flex flex-col justify-center items-center font-manrope bg-gradient-to-tl from-blue-400 from-10% via-blue-600 via-5%  to-blue-600 to-50%">
            <form action="{{ route('admin.tki.store') }}" method="POST">
                <form action="{{ route('admin.tki.store') }}" method="POST">
                    @csrf
                    <div class="grid gap-4">
                        <input type="text" name="name" class="border p-2 rounded" placeholder="Nama"
                            value="{{ old('name') }}" required>

                        <input type="text" name="nik" class="border p-2 rounded" placeholder="NIK"
                            value="{{ old('nik') }}" required>

                        <select name="gender" class="border p-2 rounded" required>
                            <option value="">Pilih Gender</option>
                            <option value="L" {{ old('gender') == 'L' ? 'selected' : '' }}>L</option>
                            <option value="P" {{ old('gender') == 'P' ? 'selected' : '' }}>P</option>
                        </select>

                        <input type="text" name="place_of_birth" class="border p-2 rounded"
                            placeholder="Tempat Lahir" value="{{ old('place_of_birth') }}" required>

                        <input type="date" name="date_of_birth" class="border p-2 rounded"
                            value="{{ old('date_of_birth') }}" required>

                        <input type="text" name="address_vilage" class="border p-2 rounded" placeholder="Alamat Desa"
                            value="{{ old('address_vilage') }}" required>

                        <input type="text" name="district" class="border p-2 rounded" placeholder="Kecamatan"
                            value="{{ old('district') }}" required>

                        <select name="education" class="border p-2 rounded" required>
                            <option value="">Pilih Pendidikan</option>
                            @foreach ($educationOptions as $option)
                                <option value="{{ $option }}"
                                    {{ old('education') == $option ? 'selected' : '' }}>
                                    {{ $option }}
                                </option>
                            @endforeach
                        </select>

                        <input type="text" name="phone" class="border p-2 rounded" placeholder="No Telepon"
                            value="{{ old('phone') }}">

                        <select name="compani_id" class="border p-2 rounded" required>
                            <option value="">Pilih Perusahaan</option>
                            @foreach ($compani as $cmp)
                                <option value="{{ $cmp->id }}"
                                    {{ old('compani_id') == $cmp->id ? 'selected' : '' }}>
                                    {{ $cmp->name }}
                                </option>
                            @endforeach
                        </select>

                        <select name="destination_id" class="border p-2 rounded" required>
                            <option value="">Pilih Negara Tujuan</option>
                            @foreach ($dest as $d)
                                <option value="{{ $d->id }}"
                                    {{ old('destination_id') == $d->id ? 'selected' : '' }}>
                                    {{ $d->country_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-4">
                        <button type="submit"
                            class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Simpan</button>
                    </div>
                </form>
        </div>
        {{-- Col 2 --}}
        <div class="h-screen flex flex-col justify-center items-center">
            @include('auth.login')
        </div>
    </div>
</main>
