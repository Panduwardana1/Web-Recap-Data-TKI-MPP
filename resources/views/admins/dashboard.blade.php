@vite('resources/css/app.css')
<div class="min-h-full flex flex-col gap-2 p-2">
    <x-navbar-dashboard-admin></x-navbar-dashboard-admin>
    <div class="grid grid-cols-4 gap-1">
        <div class="col-span-full flex items-center justify-between">
            <div class="grid text-2xl font-semibold">
                <span>Welcome back 👋🏻</span>
                <span class="font-medium text-xs text-stone-500">Lorem ipsum dolor sit amet consectetur.</span>
            </div>
            <div class="flex gap-2 items-center">
                <x-heroicon-o-arrow-down-tray class="h-5 w-5 hover:text-stone-400"></x-heroicon-o-arrow-down-tray>
                <x-heroicon-o-document-text class="h-5 w-5 hover:text-stone-400"></x-heroicon-o-document-text>
                <x-heroicon-o-circle-stack class="h-5 w-5 hover:text-stone-400"></x-heroicon-o-circle-stack>
                <form action="" class="items-center">
                    <input type="date" name="" id=""
                        class="border rounded-md font-medium text-stone-400 text-xs p-1">
                </form>
            </div>
        </div>
        {{-- Today --}}
        <div class="grid border rounded-md p-2 h-auto">
            <span class="flex items-center justify-between p-1">
                <h2 class="font-semibold">Total TKI</h2>
                <x-heroicon-s-arrow-trending-up class="h-5 w-5 text-lime-600"></x-heroicon-s-arrow-trending-up>
            </span>
            <span class="flex items-center gap-2">
                <x-heroicon-s-users class="h-6 w-6"></x-heroicon-s-users>
                <p class="text-3xl">{{ number_format($total, 0, ',', '.') }}</p>
            </span>
        </div>
        {{-- Today --}}
        <div class="grid border rounded-md p-2 h-auto bg-stone-800 text-white">
            <span class="flex items-center justify-between p-1">
                <h2 class="font-semibold">This Month</h2>
                <x-heroicon-s-arrow-trending-up class="h-5 w-5 text-lime-300"></x-heroicon-s-arrow-trending-up>
            </span>
            <span class="flex items-center gap-2">
                <x-heroicon-s-users class="h-6 w-6"></x-heroicon-s-users>
                <p class="text-3xl">{{ number_format($thisMonth, 0, ',', '.') }}</p>
            </span>
        </div>
        {{-- year --}}
        <div class="grid border rounded-md p-2 h-auto">
            <span class="flex items-center justify-between p-1">
                <h2 class="font-semibold">This Year</h2>
                <x-heroicon-s-arrow-trending-up class="h-5 w-5 text-lime-600"></x-heroicon-s-arrow-trending-up>
            </span>
            <span class="flex items-center gap-2">
                <x-heroicon-s-users class="h-6 w-6"></x-heroicon-s-users>
                <p class="text-3xl">{{ number_format($thisYear, 0, ',', '.') }}</p>
            </span>
        </div>
        <div class="row-span-2 border rounded-md p-4 h-auto bg-white">
            <div class="grid h-full gap-4">
                <!-- Top Company -->
                <div>
                    <h2 class="font-semibold text-sm text-stone-500">Top Company</h2>
                    <p class="flex items-center gap-2 mt-1 justify-between">
                        <span class="font-medium text-stone-700">{{ $topCompany?->name ?? '-' }}</span>
                        <span class="text-2xl font-bold text-orange-600">
                            {{ $topCompany?->tki_count ?? 0 }}
                        </span>
                    </p>
                </div>
                <span class="p-[1px] w-full flex justify-between rounded-lg bg-stone-700"></span>
                <!-- Top Destination -->
                <div>
                    <h2 class="font-semibold text-sm text-stone-500">Top Destination</h2>
                    <p class="flex items-center gap-2 mt-1 justify-between">
                        <span class="font-medium text-stone-700">{{ $topDestination?->country_name ?? '-' }}</span>
                        <span class="text-2xl font-bold text-emerald-600">
                            {{ $topDestination?->tki_count ?? 0 }}
                        </span>
                    </p>
                </div>
            </div>
        </div>


        {{-- Other --}}
        <div class="flex p-2 border items-center justify-between">
            ...
        </div>
        <div class="bg-emerald-400 p-2 h-auto">
            <div class="">
                <h2 class="font-semibold">Top Destination</h2>
                <p>{{ $topDestination?->country_name ?? '-' }} <span>({{ $topDestination?->tki_count ?? 0 }})</span>
                </p>
            </div>
        </div>
        <div class="bg-lime-400 p-2 h-auto">g8</div>
        <div class="bg-emerald-400 p-2 h-auto">g8</div>
        <div class="col-span-3 border rounded-lg p-2 h2">
            <h2 class="font-semibold mb-4">Data Bulanan ({{ date('Y') }})</h2>
            <div class="relative w-full h-[400px]">
                <canvas id="monthlyChart"></canvas>
            </div>
        </div>
    </div>

</div>
