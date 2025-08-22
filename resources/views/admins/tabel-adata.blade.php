<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>

<body>
    <div class="grid grid-cols-[220px,_1fr] p-2 gap-2 font-manrope">
        <div>
            <x-sidebar></x-sidebar>
        </div>
        <main>
            <div class="min-h-full flex flex-col gap-2 p-2 border rounded-lg">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas laborum animi veniam quae amet et
                    sapiente voluptatem dignissimos illum. Dolores.</h2>
            </div>
        </main>
    </div>

</body>

</html>
