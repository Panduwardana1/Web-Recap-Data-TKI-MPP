<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Add data</title>
</head>

<body>
    <div class="grid grid-cols-[220px,_1fr] p-2 gap-2 font-manrope">
        <div>
            <x-sidebar></x-sidebar>
        </div>
        <main>
            <div class="bg-white rounded-lg">
                @if (session('success'))
                    <div class="p-2 bg-green-500 z-50 text-white rounded mb-2" id="session">
                        {{ session('success') }}
                    </div>
                @endif

                <div>
                    <div class="flex items-center justify-between p-2 border rounded-lg mb-1">
                        <button onclick="openModal('{{ route('admin.tki.create') }}')"
                            class="flex items-center gap-1 bg-green-600 text-white font-semibold py-1 px-3 rounded-md">
                            <x-heroicon-s-plus-circle class="h-5 w-5"></x-heroicon-s-plus-circle>
                            <span>Add</span>
                        </button>
                        <form method="GET" action="{{ route('admin.alldata') }}">
                            <div class="flex items-center gap-4">
                                <span class="flex items-center border px-2 rounded">
                                    <input type="text" name="q" value="{{ request('q') }}"
                                        placeholder="Cari nama/NIK..."
                                        class="px-1 py-1 rounded focus:outline-none w-full">
                                    <x-heroicon-s-magnifying-glass class="h-5 w-5"></x-heroicon-s-magnifying-glass>
                                </span>
                                <button type="submit" class="bg-gray-900 text-white px-2 py-1 rounded">Cari</button>
                            </div>
                        </form>
                    </div>
                    <table class="w-full text-sm text-left text-gray-600 border">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                            <tr>
                                <th class="px-4 py-2 border">No</th>
                                <th class="px-4 py-2 border">Nama</th>
                                <th class="px-4 py-2 border">NIK</th>
                                <th class="px-4 py-2 border text-center">Gender</th>
                                <th class="px-4 py-2 border">PT</th>
                                <th class="px-4 py-2 border">Negara Tujuan</th>
                                <th class="px-4 py-2 border">Pendidikan</th>
                                <th class="px-4 py-2 border">Terdata Pada</th>
                                <th class="px-4 py-2 border text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dataTki as $index => $row)
                                <tr class="hover:bg-stone-900 hover:text-slate-100">
                                    <td class="px-4 py-2 border">{{ $dataTki->firstItem() + $index }}</td>
                                    <td class="px-4 py-2 border">{{ $row->name }}</td>
                                    <td class="px-4 py-2 border">{{ $row->nik }}</td>
                                    <td class="px-4 py-2 border text-center">{{ $row->gender }}</td>
                                    <td class="px-4 py-2 border">{{ $row->compani?->name }}</td>
                                    <td class="px-4 py-2 border">{{ $row->destination?->country_name }}</td>
                                    <td class="px-4 py-2 border text-center">{{ $row->education }}</td>
                                    <td class="px-4 py-2 border">{{ $row->created_at->format('d M Y') }}</td>
                                    <td class="px-4 py-2 border">
                                        <span class="flex items-center justify-center gap-2">
                                            <button onclick="openModal('{{ route('admin.tki.show', $row->id) }}')"
                                                title="Lihat">
                                                <x-heroicon-s-user-circle class="h-5 w-5" />
                                            </button>
                                            <button onclick="openModal('{{ route('admin.tki.edit', $row->id) }}')"
                                                title="Edit">
                                                <x-heroicon-s-pencil-square class="h-5 w-5" />
                                            </button>
                                            <form action="{{ route('admin.tki.destroy', $row->id) }}" method="POST"
                                                onsubmit="return confirm('Apakah anda yakin untuk menghapus datanya?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">
                                                    <x-heroicon-s-trash class="h-5 w-5"></x-heroicon-s-trash></a>
                                                </button>
                                            </form>
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-4 py-2 text-center text-gray-500">Belum ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                <div class="fixed bottom-4 right-4 bg-white p-2 rounded-lg shadow-lg z-50">
                    {{ $dataTki->appends(request()->except('page'))->links() }}
                </div>
            </div>


            {{-- Custom pagination next/prev --}}
            @if ($dataTki->hasPages())
                <div class="flex justify-end mt-2 gap-2 fixed bottom-4 right-4 z-50">
                    {{-- Previous Page Link --}}
                    @if ($dataTki->onFirstPage())
                        <span class="px-3 py-1 bg-gray-200 text-gray-500 rounded cursor-not-allowed">Sebelumnya</span>
                    @else
                        <a href="{{ $dataTki->appends(request()->except('page'))->previousPageUrl() }}"
                            class="px-3 py-1 bg-gray-900 text-white rounded hover:bg-gray-700">
                            <x-heroicon-s-chevron-double-up class="h-5 w-5 -rotate-90"></x-heroicon-s-chevron-double-up>
                        </a>
                    @endif

                    {{-- Next Page Link --}}
                    @if ($dataTki->hasMorePages())
                        <a href="{{ $dataTki->appends(request()->except('page'))->nextPageUrl() }}"
                            class="px-3 py-1 bg-gray-900 text-white rounded hover:bg-gray-700">
                            <x-heroicon-s-chevron-double-up class="h-5 w-5 rotate-90"></x-heroicon-s-chevron-double-up>
                        </a>
                    @else
                        <span class="px-3 py-1 bg-gray-200 text-gray-500 rounded cursor-not-allowed">Berikutnya</span>
                    @endif
                </div>
            @endif
    </div>
    </main>
    </div>

    <!-- Modal -->
    <div id="modal-tki" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg w-[90vw] max-w-2xl p-4 relative">
            <button onclick="closeModal()" class="absolute top-2 right-2 text-xl">&times;</button>
            <div id="modal-content">
                {{-- // --}}
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        function openModal(url) {
            fetch(url)
                .then(res => res.text())
                .then(html => {
                    document.getElementById('modal-content').innerHTML = html;
                    document.getElementById('modal-tki').classList.remove('hidden');
                });
        }

        function closeModal() {
            document.getElementById('modal-tki').classList.add('hidden');
            document.getElementById('modal-content').innerHTML = '';
        }
    </script>
</body>

</html>
