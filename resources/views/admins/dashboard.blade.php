<div class="min-h-full flex flex-col gap-2 p-2">
    {{-- <div class="sm:hidden"> --}}
        <x-navbar-dashboard-admin></x-navbar-dashboard-admin>
    {{-- </div> --}}
    <div class="grid grid-cols-4 gap-1">
        {{-- <div class="col-span-full flex items-center justify-between">
            <div class="grid text-2xl font-semibold">
                <span>Hello👋🏻</span>
                <span class="font-medium text-xs text-stone-500">Lorem ipsum dolor sit amet consectetur.</span>
            </div>
            <div class="flex gap-2 items-center">
                <x-heroicon-o-arrow-down-tray class="h-5 w-5 hover:text-stone-400"></x-heroicon-o-arrow-down-tray>
                <x-heroicon-o-document-text class="h-5 w-5 hover:text-stone-400"></x-heroicon-o-document-text>
                <x-heroicon-o-circle-stack class="h-5 w-5 hover:text-stone-400"></x-heroicon-o-circle-stack>
            </div>
        </div> --}}
        {{-- Data Today --}}
        <div class="grid border rounded-md p-2 h-auto sm:grid sm:flex-wrap  bg-slate-900 text-white">
            <span class="flex items-center justify-between p-1">
                <h2 class="font-semibold">Total TKI</h2>
                <x-heroicon-s-arrow-trending-up class="h-5 w-5 text-lime-300"></x-heroicon-s-arrow-trending-up>
            </span>
            <span class="flex items-center gap-2">
                <x-heroicon-s-users class="h-6 w-6"></x-heroicon-s-users>
                <p class="text-3xl">{{ number_format($totalTki, 0, ',', '.') }}</p>
            </span>
        </div>
        {{-- Data - Month --}}
        <div class="grid border rounded-md p-2 h-auto bg-slate-900 text-white">
            <span class="flex items-center justify-between p-1">
                <h2 class="font-semibold">This Month</h2>
                <x-heroicon-s-arrow-trending-up class="h-5 w-5 text-lime-300"></x-heroicon-s-arrow-trending-up>
            </span>
            <span class="flex items-center gap-2">
                <x-heroicon-s-users class="h-6 w-6"></x-heroicon-s-users>
                <p class="text-3xl">{{ number_format($thisMonth, 0, ',', '.') }}</p>
            </span>
        </div>
        {{-- Data - year --}}
        <div class="grid border rounded-md p-2 h-auto bg-slate-900 text-white">
            <span class="flex items-center justify-between p-1">
                <h2 class="font-semibold">This Year</h2>
                <x-heroicon-s-arrow-trending-up class="h-5 w-5 text-lime-400"></x-heroicon-s-arrow-trending-up>
            </span>
            <span class="flex items-center gap-2">
                <x-heroicon-s-users class="h-6 w-6"></x-heroicon-s-users>
                <p class="text-3xl">{{ number_format($thisYear, 0, ',', '.') }}</p>
            </span>
        </div>
        {{-- Company and Destinattion --}}
        <div class="row-span-2 border rounded-md p-2 h-auto bg-slate-900 text-white">
            <div class="grid h-full gap-4">
                <div>
                    <span class="flex items-center gap-1">
                        <h2 class="font-semibold text-sm">Top Company</h2>
                        <x-heroicon-s-arrow-trending-up class="h-5 w-5 text-lime-400"></x-heroicon-s-arrow-trending-up>
                    </span>
                    <p class="flex items-center gap-2 justify-between">
                        <span class="font-semibold text-xl text-slate-100">{{ $topCompany?->name ?? '-' }}</span>
                        <span class="text-4xl font-medium text-lime-400">
                            {{ $topCompany?->tki_count ?? 0 }}
                        </span>
                    </p>
                </div>
                <div>
                    <span class="flex items-center gap-1">
                        <h2 class="font-semibold text-sm">Top Destination</h2>
                        <x-heroicon-s-arrow-trending-up class="h-5 w-5 text-lime-400"></x-heroicon-s-arrow-trending-up>
                    </span>
                    <p class="flex items-center gap-2 justify-between">
                        <span
                            class="font-semibold text-xl text-slate-100">{{ $topDestination?->country_name ?? '-' }}</span>
                        <span class="text-4xl font-medium text-lime-400">
                            {{ $topDestination?->tki_count ?? 0 }}
                        </span>
                    </p>
                </div>
            </div>
        </div>
        {{-- TotalToday --}}
        <div class="block border rounded-md p-2 h-auto bg-slate-900 text-white">
            <span class="flex items-center justify-between p-1">
                <h2 class="font-semibold">Today</h2>
                <x-heroicon-s-arrow-trending-up class="h-5 w-5 text-lime-300"></x-heroicon-s-arrow-trending-up>
            </span>
            <span class="flex items-center gap-2">
                <x-heroicon-s-users class="h-6 w-6"></x-heroicon-s-users>
                <span class="flex flex-col items-center justify-center">
                    <p class="text-3xl">{{ number_format($today, 0, ',', '.') }}</p>
                </span>
            </span>
        </div>
        {{-- total gender mele --}}
        <div class="block border rounded-md p-2 h-auto bg-slate-900 text-white">
            <span class="flex items-center justify-between p-1">
                <h2 class="font-semibold">Gender L</h2>
                <x-heroicon-s-arrow-trending-up class="h-5 w-5 text-lime-300"></x-heroicon-s-arrow-trending-up>
            </span>
            <span class="flex items-center gap-2">
                <x-heroicon-s-users class="h-6 w-6"></x-heroicon-s-users>
                <span class="flex flex-col items-center justify-center">
                    <p class="text-3xl">{{ number_format($mele, 0, ',', '.') }}</p>
                </span>
            </span>
        </div>
        {{-- Total gender famele --}}
        <div class="block border rounded-md p-2 h-auto bg-slate-900 text-white">
            <span class="flex items-center justify-between p-1">
                <h2 class="font-semibold">Gender P</h2>
                <x-heroicon-s-arrow-trending-up class="h-5 w-5 text-lime-300"></x-heroicon-s-arrow-trending-up>
            </span>
            <span class="flex items-center gap-2">
                <x-heroicon-s-users class="h-6 w-6"></x-heroicon-s-users>
                <span class="flex flex-col items-center justify-center">
                    <p class="text-3xl">{{ number_format($famele, 0, ',', '.') }}</p>
                </span>
            </span>
        </div>
        {{-- Other data --}}
        <div class="bg-emerald-400 p-2 h-auto">g8</div>
        <div class="col-span-3 border rounded-lg p-2 h2">
            <h2 class="font-semibold mb-4">Data Bulanan ({{ date('Y') }})</h2>
            <div class="flex items-center justify-center flex-col h-[400px]">
                <canvas id="monthlyChart"></canvas>
            </div>
        </div>
        <div class="bg-lime-500 col-span-full p-4">f</div>
    </div>

</div>
