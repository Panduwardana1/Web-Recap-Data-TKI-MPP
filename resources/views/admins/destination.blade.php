<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destination</title>
    <link rel="icon" href="{{ asset('img/lombok_tengah2.png') }}">
    @vite('resources/css/app.css')
</head>

<body class="font-inter">

    {{-- 🔹 Navbar --}}
    <nav class="bg-lime-500 w-full p-4">
        <button onclick="openModal('{{ route('admin.destination.create') }}')"
            class="bg-white px-4 py-2 rounded shadow">
            Add Destination
        </button>
    </nav>

    {{-- 🔹 Table Data --}}
    <div class="p-6">
        <table class="w-full border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2">No</th>
                    <th class="p-2">Name</th>
                    <th class="p-2">Date Add</th>
                    <th class="p-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $count = 1; @endphp
                @foreach ($destination as $dest)
                    <tr class="border-b">
                        <td class="p-2">{{ $count++ }}</td>
                        <td class="p-2">{{ $dest->country_name }}</td>
                        <td class="p-2">{{ $dest->created_at }}</td>
                        <td class="p-2 space-x-2">
                            <button onclick="openModal('{{ route('admin.destination.show', $dest->id) }}')"
                                class="text-blue-600">Show</button>
                            <button onclick="openModal('{{ route('admin.destination.edit', $dest->id) }}')"
                                class="text-green-600">Edit</button>
                            <form action="{{ route('admin.destination.destroy', $dest->id) }}" method="POST"
                                class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin hapus data ini?')"
                                    class="text-red-600">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- 🔹 Modal --}}
    <div id="modal-destination"
        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden p-4">
        <div class="bg-white rounded-lg w-full max-w-2xl max-h-[90vh] overflow-y-auto relative">
            <button onclick="closeModal()"
                class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 text-2xl leading-none z-10 bg-white rounded-full w-8 h-8 flex items-center justify-center shadow-sm">
                &times;
            </button>
            <div id="modal-content" class="p-6"></div>
        </div>
    </div>

    <script>
        // Fungsi buka modal dengan fetch HTML dari route
        function openModal(url) {
            fetch(url)
                .then(res => res.text())
                .then(html => {
                    document.getElementById("modal-content").innerHTML = html;
                    document.getElementById("modal-destination").classList.remove("hidden");
                });
        }

        // Fungsi tutup modal
        function closeModal() {
            document.getElementById("modal-destination").classList.add("hidden");
            document.getElementById("modal-content").innerHTML = "";
        }
    </script>
</body>

</html>
