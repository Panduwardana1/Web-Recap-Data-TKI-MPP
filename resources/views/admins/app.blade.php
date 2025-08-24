<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/lombok_tengah2.png') }}">
    <title>Admin Dashboard</title>
</head>

<body class="font-manrope">
    {{-- notification --}}
    <div class="fixed top-2 left-1/2 -translate-x-1/2 items-center justify-center max-w-[50%] z-50 text-center bg-lime-600 text-white p-2 mt-2 rounded mb-3"
        id="info">
        <div class="flex items-center font-medium gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            {{ session('success') }}
        </div>
    </div>

    {{-- main --}}
    <main>
        <div class="grid grid-cols-[220px,_1fr] p-2 font-manrope">
            <div>
                <x-sidebar></x-sidebar>
            </div>
            {{-- Column --}}
            <div class=" rounded-lg">
                @include('admins.dashboard')
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('monthlyChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                datasets: [{
                    label: 'Jumlah TKI',
                    data: {!! json_encode(array_values($monthlyCounts)) !!},
                    borderColor: 'rgba(92, 126, 237)',
                    backgroundColor: 'rgba(199, 212, 255)',
                    tension: .1,
                    fill: true
                }],
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        enabled: true
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>
