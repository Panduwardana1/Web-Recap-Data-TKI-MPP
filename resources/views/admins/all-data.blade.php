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
    <div class="grid grid-cols-1 lg:grid-cols-[220px,_1fr] p-2 gap-2 font-manrope">
        <div class="lg:block">
            <x-sidebar></x-sidebar>
        </div>
        <main class="min-w-0">
            <div>
                @if (session('success'))
                    <div class="p-3 bg-green-200 text-green-800 rounded mb-3">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="p-3 bg-red-200 text-red-800 rounded mb-3">
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="p-3 bg-red-200 text-red-800 rounded mb-3">
                        <ul>
                            @foreach ($errors->all() as $err)
                                <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('tki.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" required class="border p-2">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Import</button>
                </form>
            </div>
            <div class="bg-white rounded-lg shadow-sm">
                @if (session('success'))
                    <div class="p-3 bg-green-500 text-white rounded-t-lg mb-0" id="session">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="p-4">
                    <!-- Header Actions -->
                    <div
                        class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 p-3 border rounded-lg mb-4 bg-gray-50">
                        <button onclick="openModal('{{ route('admin.tki.create') }}')"
                            class="flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-md transition-colors">
                            <x-heroicon-s-plus-circle class="h-5 w-5"></x-heroicon-s-plus-circle>
                            <span>Tambah Data</span>
                        </button>
                        <form method="GET" action="{{ route('admin.alldata') }}" class="w-full sm:w-auto">
                            <div class="flex items-center gap-2">
                                <div
                                    class="flex items-center border border-gray-300 bg-white px-3 py-2 rounded-lg focus-within:ring-2 focus-within:ring-blue-500 focus-within:border-blue-500">
                                    <input type="text" name="q" value="{{ request('q') }}"
                                        placeholder="Cari nama/NIK..."
                                        class="px-1 py-0 focus:outline-none w-full min-w-[200px] text-sm">
                                    <x-heroicon-s-magnifying-glass
                                        class="h-5 w-5 text-gray-400"></x-heroicon-s-magnifying-glass>
                                </div>
                                <button type="submit"
                                    class="bg-gray-900 hover:bg-gray-800 text-white px-4 py-2 rounded-lg transition-colors">
                                    Cari
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Table Container with Horizontal Scroll -->
                    <div class="overflow-x-auto border rounded-lg">
                        <table class="min-w-full divide-y">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th scope="col"
                                        class="py-4 px-4 text-center text-sm font-semibold text-white font-inter">No
                                    </th>
                                    <th scope="col"
                                        class="py-4 text-left text-sm font-semibold text-white font-inter">Nama</th>
                                    <th class="py-4 text-center text-sm font-semibold text-white font-inter">NIK</th>
                                    <th class="py-4 text-left text-sm font-semibold text-white font-inter">Gender</th>
                                    <th class="py-4 text-center text-sm font-semibold text-white font-inter">
                                        PT/Perusahaan</th>
                                    <th class="py-4 text-left text-sm font-semibold text-white font-inter">Negara Tujuan
                                    </th>
                                    <th class="py-4 text-center text-sm font-semibold text-white font-inter">Pendidikan
                                    </th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white font-inter">Terdata
                                    </th>
                                    <th class="py-4 text-center text-sm font-semibold text-white font-inter">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-300">
                                @forelse ($dataTki as $index => $row)
                                    <tr class="hover:bg-slate-100 selection:bg-amber-500">
                                        <td
                                            class="px-2 text-center text-sm font-medium hover:bg-amber-500 hover:text-white font-inter">
                                            {{ $dataTki->firstItem() + $index }}
                                        </td>
                                        <td class="text-left text-sm font-normal font-inter">
                                            {{ $row->name }}
                                        </td>
                                        <td class="px-2 text-left text-sm font-normal font-inter">
                                            {{ $row->nik }}
                                        </td>
                                        <td class="px-2 text-left text-sm font-normal font-inter">
                                            <span
                                                class="
                                                {{ $row->gender === 'L' ? 'bg-blue-600 text-white py-1.5 px-2.5 rounded-full text-center' : 'bg-pink-700 text-white py-1.5 px-2.5  rounded-full text-center' }}">
                                                {{ $row->gender }}
                                            </span>
                                        </td>
                                        <td class="px-2 text-left text-sm font-sem font-inter">
                                            {{ $row->compani?->name ?? '-' }}
                                        </td>
                                        <td class="px-2 text-left text-sm font-normal font-inter">
                                            {{ $row->destination?->country_name ?? '-' }}
                                        </td>
                                        <td class="px-2 text-center text-sm font-semibold font-inter">
                                            {{ $row->education }}
                                        </td>
                                        <td class="px-2 text-left text-sm font-normal font-inter">
                                            {{ $row->created_at->format('d M Y') }}
                                        </td>
                                        <td class="px-4 py-3">
                                            <div class="flex items-center justify-center gap-4">
                                                <button onclick="openModal('{{ route('admin.tki.show', $row->id) }}')"
                                                    title="Lihat Detail" class="p-1 text-blue-600 hover:text-blue-500">
                                                    <x-heroicon-s-identification class="h-5 w-5" />
                                                </button>
                                                <button onclick="openModal('{{ route('admin.tki.edit', $row->id) }}')"
                                                    title="Edit Data" class="p-1 text-gray-800 hover:text-gray-700">
                                                    <x-heroicon-s-pencil-square class="h-5 w-5" />
                                                </button>
                                                <form action="{{ route('admin.tki.destroy', $row->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Apakah anda yakin untuk menghapus datanya?')"
                                                    class="inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" title="Hapus Data"
                                                        class="p-1 tp-1 text-red-600 hover:text-red-500">
                                                        <x-heroicon-s-trash class="h-5 w-5"></x-heroicon-s-trash>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="px-4 py-8 text-center text-gray-500">
                                            <div class="flex flex-col items-center">
                                                <svg class="w-12 h-12 text-gray-300 mb-2" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                                    </path>
                                                </svg>
                                                <p class="font-medium">Belum ada data</p>
                                                <p class="text-sm">Data akan muncul disini setelah ditambahkan</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Mobile Card View (Hidden on larger screens) -->
                    <div class="block sm:hidden space-y-4 mt-4">
                        @forelse ($dataTki as $index => $row)
                            <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                                <div class="flex justify-between items-start mb-3">
                                    <div class="flex-1">
                                        <h3 class="font-semibold text-gray-900">{{ $row->name }}</h3>
                                        <p class="text-sm text-gray-600 font-mono">{{ $row->nik }}</p>
                                    </div>
                                    <div class="flex gap-2 ml-4">
                                        <button onclick="openModal('{{ route('admin.tki.show', $row->id) }}')"
                                            class="p-2 text-blue-600 hover:bg-blue-100 rounded">
                                            <x-heroicon-s-user-circle class="h-5 w-5" />
                                        </button>
                                        <button onclick="openModal('{{ route('admin.tki.edit', $row->id) }}')"
                                            class="p-2 text-green-600 hover:bg-green-100 rounded">
                                            <x-heroicon-s-pencil-square class="h-5 w-5" />
                                        </button>
                                        <form action="{{ route('admin.tki.destroy', $row->id) }}" method="POST"
                                            onsubmit="return confirm('Apakah anda yakin untuk menghapus datanya?')"
                                            class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 text-red-600 hover:bg-red-100 rounded">
                                                <x-heroicon-s-trash class="h-5 w-5"></x-heroicon-s-trash>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-3 text-sm">
                                    <div>
                                        <span class="font-medium text-gray-700">Gender:</span>
                                        <span
                                            class="ml-1 px-2 py-1 rounded-full text-xs
                                            {{ $row->gender === 'L' ? 'bg-blue-100 text-blue-800' : 'bg-pink-100 text-pink-800' }}">
                                            {{ $row->gender }}
                                        </span>
                                    </div>
                                    <div>
                                        <span class="font-medium text-gray-700">Pendidikan:</span>
                                        <span class="ml-1 text-gray-600">{{ $row->education }}</span>
                                    </div>
                                    <div class="col-span-2">
                                        <span class="font-medium text-gray-700">PT:</span>
                                        <span class="ml-1 text-gray-600">{{ $row->compani?->name ?? '-' }}</span>
                                    </div>
                                    <div class="col-span-2">
                                        <span class="font-medium text-gray-700">Negara Tujuan:</span>
                                        <span
                                            class="ml-1 text-gray-600">{{ $row->destination?->country_name ?? '-' }}</span>
                                    </div>
                                    <div class="col-span-2">
                                        <span class="font-medium text-gray-700">Terdata:</span>
                                        <span
                                            class="ml-1 text-gray-600">{{ $row->created_at->format('d M Y') }}</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="text-center py-8">
                                <svg class="w-12 h-12 text-gray-300 mx-auto mb-2" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                                <p class="font-medium text-gray-500">Belum ada data</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            @if ($dataTki->hasPages())
                <div class="fixed right-6 bottom-6 z-40">
                    <div class="flex items-center space-x-2 py-1 px-3 bg-slate-900 rounded-md">
                        {{-- Previous Page Link --}}
                        @if ($dataTki->onFirstPage())
                            <span
                                class="px-3 py-2 bg-gray-100 text-gray-400 rounded cursor-not-allowed flex items-center">
                                <x-heroicon-s-chevron-left class="h-4 w-4 mr-1"></x-heroicon-s-chevron-left>
                            </span>
                        @else
                            <a href="{{ $dataTki->appends(request()->except('page'))->previousPageUrl() }}"
                                class="px-3 py-2 bg-gray-900 hover:bg-gray-800 text-white rounded transition-colors flex items-center">
                                <x-heroicon-s-chevron-left class="h-4 w-4 mr-1"></x-heroicon-s-chevron-left>
                            </a>
                        @endif

                        {{-- Page Numbers --}}
                        <div class="flex items-center space-x-1">
                            @for ($i = max(1, $dataTki->currentPage() - 2); $i <= min($dataTki->lastPage(), $dataTki->currentPage() + 2); $i++)
                                @if ($i == $dataTki->currentPage())
                                    <span
                                        class="px-3 py-1 bg-blue-600 text-white rounded font-medium">{{ $i }}</span>
                                @else
                                    <a href="{{ $dataTki->appends(request()->except('page'))->url($i) }}"
                                        class="px-3 py-1 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded transition-colors">{{ $i }}</a>
                                @endif
                            @endfor
                        </div>

                        {{-- Next Page Link --}}
                        @if ($dataTki->hasMorePages())
                            <a href="{{ $dataTki->appends(request()->except('page'))->nextPageUrl() }}"
                                class="px-3 py-1 bg-gray-900 hover:bg-gray-800 text-white rounded transition-colors flex items-center">
                                <x-heroicon-s-chevron-right class="h-4 w-4 ml-1"></x-heroicon-s-chevron-right>
                            </a>
                        @else
                            <span
                                class="px-3 py-1 bg-gray-100 text-gray-400 rounded cursor-not-allowed flex items-center">
                                <x-heroicon-s-chevron-right class="h-4 w-4 ml-1"></x-heroicon-s-chevron-right>
                            </span>
                        @endif
                    </div>
                </div>
            @endif
        </main>
    </div>

    <!-- Modal -->
    <div id="modal-tki" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden p-4">
        <div class="bg-white rounded-lg w-full max-w-2xl max-h-[90vh] overflow-y-auto relative">
            <button onclick="closeModal()"
                class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 text-2xl leading-none z-10 bg-white rounded-full w-8 h-8 flex items-center justify-center shadow-sm">
                &times;
            </button>
            <div id="modal-content" class="p-6">
                {{-- Modal content will be loaded here --}}
            </div>
        </div>
    </div>

    <script src="{{ asset('js/all-data.js') }}"></script>
</body>

</html>
