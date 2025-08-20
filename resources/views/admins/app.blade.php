<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Admin Panel</title>
</head>

<body class="font-manrope">
    <div class="fixed top-2 left-1/2 -translate-x-1/2 items-center justify-center max-w-[50%] z-50 text-center bg-teal-700 text-white p-2 mt-2 rounded mb-3"
        id="info">
        <div class="flex items-center gap-2">
            <i data-feather="check-circle" class="text-white h-4 w-4"></i>
            {{ session('success') }}
        </div>
    </div>
    <div>
        <div class="grid grid-cols-[220px,_1fr] gap-2 p-2 font-manrope">
            <x-sidebar>
                <h1>Hello</h1>
            </x-sidebar>
            <x-dashboard></x-dashboard>
        </div>
    </div>

    {{-- JS --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</body>

</html>
