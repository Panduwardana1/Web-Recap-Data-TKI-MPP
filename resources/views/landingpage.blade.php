<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Recap Data TKI MPP</title>
</head>

<body class="scroll-smooth bg-gradient-to-br from-orange-400 from-30% via-yellow-400 to-yellow-200">
    {{-- navabr --}}
    <nav class="">
        <x-navbar></x-navbar>
    </nav>

    {{-- flex flex-col justify-center items-center min-h-screen font-manrope --}}
    <main class="flex flex-col mx-6 justify-center items-center font-manrope min-h-screen">
        <div class="grid grid-cols-2 gap-4 min-h-screen">
            <div class="grid items-center space-y-4 w-auto">
                <div class="space-y-4">
                    <div class="grid gap-2">
                        <h1 class="font-semibold text-5xl">WEB Recap Data TKI</h1>
                        <h1 class="font-semibold text-6xl">Mall Pelayanan Publik</h1>
                        <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora facere, debitis mollitia
                            tempore
                            quas vitae aliquid doloremque consequuntur animi perferendis rerum accusamus? Soluta maiores
                            explicabo, sequi quasi eveniet enim alias.</p>
                    </div>
                    <div class="bg-slate-100 p-2 space-y-2 rounded-md font-medium shadow-md">
                        <i data-feather="alert-circle" class="text-black"></i>
                        <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut necessitatibus
                            voluptatem, quo quam dicta voluptate eligendi corporis molestiae facilis ea?</p>
                    </div>
                </div>
            </div>

            {{-- login --}}
            <div class="flex flex-col items-center justify-center">
                {{-- @yield('login') --}}
                @include('login.login')
            </div>
        </div>
    </main>

    <footer>
        <div>
            <x-footer></x-footer>
        </div>
    </footer>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

</body>

</html>
