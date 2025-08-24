<div class="max-w-3xl mx-auto bg-white p-6">
    <h2 class="text-xl font-bold mb-4">Detail Data TKI</h2>

    <div class="grid grid-cols-2 gap-4 text-sm">
        <div><strong>Nama:</strong> {{ $tki->name }}</div>
        <div><strong>NIK:</strong> {{ $tki->nik }}</div>

        <div><strong>Gender:</strong> {{ $tki->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}</div>
        <div><strong>Pendidikan:</strong> {{ $tki->education }}</div>

        <div><strong>Tempat Lahir:</strong> {{ $tki->place_of_birth }}</div>
        <div><strong>Tanggal Lahir:</strong> {{ $tki->date_of_birth }}</div>

        <div><strong>Alamat Desa:</strong> {{ $tki->address_vilage }}</div>
        <div><strong>Kecamatan:</strong> {{ $tki->district }}</div>

        <div><strong>No. Telepon:</strong> {{ $tki->phone ?? '-' }}</div>

        <div><strong>Perusahaan:</strong> {{ $tki->compani?->name ?? '-' }}</div>
        <div><strong>Negara Tujuan:</strong> {{ $tki->destination?->country_name ?? '-' }}</div>
    </div>

    <div class="mt-6 flex gap-2">
        <a href="{{ route('admin.tki.edit', $tki->id) }}"
            class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">
            Edit
        </a>
        <a href="{{ route('admin.alldata') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
            Kembali
        </a>
    </div>
</div>
