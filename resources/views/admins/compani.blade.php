<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/lombok_tengah2.png') }}">
    <title>Company</title>
    @vite('resources/css/app.css') {{-- perbaiki typo: resoruces → resources --}}
</head>

<body>
    <nav class="bg-lime-500 w-full p-4">
        <button onclick="openModal('{{ route('admin.company.create') }}')" class="bg-white px-4 py-2 rounded shadow">
            Create Data Company
        </button>
    </nav>
    <div class="">
        <div class=" top-0 z-40">
            {{-- <x-sidebar></x-sidebar> --}}
        </div>
        <div class="w-full">
            <table class="w-full border">
                <thead>
                    <tr class="bg-gray-200">
                        <th>No</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $count = 1; @endphp
                    @foreach ($company as $cmp)
                        <tr class="border-b">
                            <td>{{ $count++ }}</td>
                            <td>{{ $cmp->name }}</td>
                            <td>{{ $cmp->address }}</td>
                            <td>{{ $cmp->phone }}</td>
                            <td class="space-x-2">
                                <button onclick="openModal('{{ route('admin.company.show', $cmp->id) }}')"
                                    class="text-blue-600">Show</button>
                                <button onclick="openModal('{{ route('admin.company.edit', $cmp->id) }}')"
                                    class="text-green-600">Edit</button>
                                <form action="{{ route('admin.company.destroy', $cmp->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin hapus?')"
                                        class="text-red-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- 🔹 Modal --}}
    <div id="modal-company"
        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden p-4">
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

    <script>
        function openModal(url) {
            fetch(url)
                .then(res => res.text())
                .then(html => {
                    document.getElementById("modal-content").innerHTML = html;
                    document.getElementById("modal-company").classList.remove("hidden");
                });
        }

        function closeModal() {
            document.getElementById("modal-company").classList.add("hidden");
            document.getElementById("modal-content").innerHTML = "";
        }
    </script>
</body>

</html>
