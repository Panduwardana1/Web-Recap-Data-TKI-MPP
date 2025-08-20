<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body class="scroll-smooth">
    <x-navbar></x-navbar>
    <main class=" min-h-screen flex items-center p-0 m-0">
        <div class="grid grid-cols-2 w-full h-screen">
            {{-- Col 1 --}}
            <div class="border-r h-screen flex flex-col justify-center items-center font-manrope bg-gradient-to-tl from-blue-400 from-10% via-blue-600 via-5%  to-blue-600 to-50%">
                <div class="px-2 flex flex-col items-center text-white">
                    <div class="text-6xl">SIREDA</div>
                     <p class="text-1xl font-urbanist text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente, molestiae.</p>
                </div>
            </div>
            {{-- Col 2 --}}
            <div class="h-screen flex flex-col justify-center items-center">
                @include('auth.login')
            </div>
        </div>
    </main>

    <footer>
        <div>
            {{-- <x-footer></x-footer> --}}
        </div>
    </footer>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

</body>

</html>
