<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Data</title>
</head>

<body>
    <div class="grid grid-cols-[220px,_1fr] p-2 gap-2 font-manrope">
        <div>
            <x-sidebar></x-sidebar>
        </div>
        <main>
            <x-nav-link-database></x-nav-link-database>
            <div class="bg-white rounded-lg">
                <div class="overflow-x-auto p-2">
                    <table class="w-full text-sm text-left text-gray-600 border">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                            <tr>
                                <th class="px-4 py-2 border">No</th>
                                <th class="px-4 py-2 border">Nama</th>
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
                                    <td class="px-4 py-2 border text-center">{{ $row->gender }}</td>
                                    <td class="px-4 py-2 border">{{ $row->compani?->name }}</td>
                                    <td class="px-4 py-2 border">{{ $row->destination?->country_name }}</td>
                                    <td class="px-4 py-2 border text-center">{{ $row->education }}</td>
                                    <td class="px-4 py-2 border">{{ $row->created_at->format('d M Y') }}</td>
                                    <td class="px-4 py-2 border">
                                        <span class="flex items-center justify-center gap-2">
                                            <a href="{{ route('') }}"><x-heroicon-s-user-circle
                                                class="h-5 w-5"></x-heroicon-s-user-circle></a>
                                            <a href=""><x-heroicon-s-pencil-square
                                                class="h-5 w-5"></x-heroicon-s-pencil-square></a>
                                            <a href=""><x-heroicon-s-trash
                                                    class="h-5 w-5"></x-heroicon-s-trash></a>
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
                <div class="mt-4">
                    {{ $dataTki->links() }}
                </div>
            </div>
        </main>
    </div>

</body>

</html>
