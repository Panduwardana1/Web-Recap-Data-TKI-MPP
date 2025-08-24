<div class="min-h-full flex flex-col gap-4 p-4 bg-white">
    <!-- Navbar -->
    <x-navbar-dashboard-admin></x-navbar-dashboard-admin>

    <!-- Main Dashboard Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-2">

        <!-- Top Statistics Cards -->
        <div class="lg:col-span-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2">

            <!-- Total TKI Card -->
            <div class="flex border p-4 items-center justify-between border-gray-400 rounded-md ">
                <div class="flex items-center gap-2">
                    <x-heroicon-s-user-circle
                        class="h-12 w-12 p-1 rounded-md bg-emerald-700 text-white"></x-heroicon-s-user-circle>
                    <span class="block m-0">
                        <p class="text-2xl lg:text-3xl font-semibold">{{ number_format($totalTki, 0, ',', '.') }}</p>
                        <span class="text-gray-500 text-xs font-medium">Total TKI</span>
                    </span>
                </div>
                <span class="grid gap-3">
                    <x-heroicon-o-arrow-up-right class="h-5 w-5 text-green-700 stroke-2"></x-heroicon-o-arrow-up-right>
                    <x-heroicon-s-user-circle
                        class="h-5 w-5 text-gray-700 hover:text-blue-600"></x-heroicon-s-user-circle>
                </span>
            </div>

            <!-- Today Card -->
            <div class="flex border p-4 items-center justify-between border-gray-400 rounded-md ">
                <div class="flex items-center gap-2">
                    <x-heroicon-s-calendar
                        class="h-12 w-12 p-1 rounded-md bg-yellow-500 text-white"></x-heroicon-s-calendar>
                    <span class="block items-center">
                        <p class="text-2xl lg:text-3xl font-semibold">{{ number_format($today, 0, ',', '.') }}</p>
                        <span class="text-gray-500 text-xs font-medium">To Day</span>
                    </span>
                </div>
                <span class="grid gap-3">
                    <x-heroicon-o-arrow-up-right class="h-5 w-5 text-green-700 stroke-2"></x-heroicon-o-arrow-up-right>
                    <x-heroicon-s-user-circle
                        class="h-5 w-5 text-gray-700 hover:text-blue-600"></x-heroicon-s-user-circle>
                </span>
            </div>

            <!-- This Month Card -->
            <div class="flex border p-4 items-center justify-between border-gray-400 rounded-md ">
                <div class="flex items-center gap-2">
                    <x-heroicon-s-calendar
                        class="h-12 w-12 p-1 rounded-md bg-sky-600 text-white"></x-heroicon-s-calendar>
                    <span class="block items-center">
                        <p class="text-2xl lg:text-3xl font-semibold">{{ number_format($thisMonth, 0, ',', '.') }}</p>
                        <span class="text-gray-500 text-xs font-medium">Month</span>
                    </span>
                </div>
                <span class="grid gap-3">
                    <x-heroicon-o-arrow-up-right class="h-5 w-5 text-green-700 stroke-2"></x-heroicon-o-arrow-up-right>
                    <x-heroicon-s-user-circle
                        class="h-5 w-5 text-gray-700 hover:text-blue-600"></x-heroicon-s-user-circle>
                </span>
            </div>

            <!-- This Year Card -->
            <div class="flex border p-4 items-center justify-between border-gray-400 rounded-md ">
                <div class="flex items-center gap-2">
                    <x-heroicon-s-calendar
                        class="h-12 w-12 p-1 rounded-md bg-amber-600 text-white"></x-heroicon-s-calendar>
                    <span class="block items-center">
                        <p class="text-2xl lg:text-3xl font-semibold">{{ number_format($thisYear, 0, ',', '.') }}</p>
                        <span class="text-gray-500 text-xs font-medium">Year</span>
                    </span>
                </div>
                <span class="grid gap-3">
                    <x-heroicon-o-arrow-up-right class="h-5 w-5 text-green-700 stroke-2"></x-heroicon-o-arrow-up-right>
                    <x-heroicon-s-user-circle
                        class="h-5 w-5 text-gray-700 hover:text-blue-600"></x-heroicon-s-user-circle>
                </span>
            </div>
        </div>

        <!-- Second Row: Gender Stats and Top Company/Destination -->
        <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
            <!-- Gender Male Card -->
            <div class="flex border p-4 items-center justify-between border-gray-400 rounded-md ">
                <div class="flex items-center gap-2">
                    <x-heroicon-s-calendar
                        class="h-12 w-12 p-1 rounded-md bg-amber-600 text-white"></x-heroicon-s-calendar>
                    <span class="block items-center">
                        <p class="text-2xl lg:text-3xl font-semibold">{{ number_format($mele, 0, ',', '.') }}</p>
                        <span class="text-gray-500 text-xs font-medium">Year</span>
                    </span>
                </div>
                <span class="grid gap-3">
                    <x-heroicon-o-arrow-up-right class="h-5 w-5 text-green-700 stroke-2"></x-heroicon-o-arrow-up-right>
                    <x-heroicon-s-user-circle
                        class="h-5 w-5 text-gray-700 hover:text-blue-600"></x-heroicon-s-user-circle>
                </span>
            </div>

            <!-- Gender Female Card -->
            <div class="bg-slate-50 border text-white rounded-lg p-4">
                <div class="flex items-center justify-between mb-2">
                    <h3 class="text-sm font-medium text-slate-300">Gender P (Perempuan)</h3>
                    <x-heroicon-s-arrow-trending-up class="h-5 w-5 text-pink-400"></x-heroicon-s-arrow-trending-up>
                </div>
                <div class="flex items-center flex-col justify-center gap-3">
                    <x-heroicon-s-user-group class="h-8 w-8 text-pink-400"></x-heroicon-s-user-group>
                    <p class="text-2xl lg:text-3xl font-semibold">{{ number_format($famele, 0, ',', '.') }}</p>
                </div>
            </div>

            <!-- Top Company and Destination Card -->
            <div class="bg-slate-50 border text-white rounded-lg p-4">
                <div class="space-y-4">
                    <!-- Top Company Section -->
                    <div>
                        <div class="flex items-center gap-2 mb-2">
                            <h3 class="text-sm font-medium text-slate-300">Top Company</h3>
                            <x-heroicon-s-arrow-trending-up
                                class="h-4 w-4 text-lime-400"></x-heroicon-s-arrow-trending-up>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-base text-slate-100 truncate pr-2">
                                {{ $topCompany?->name ?? 'No Data' }}
                            </span>
                            <span class="text-2xl font-semibold text-lime-400 flex-shrink-0">
                                {{ $topCompany?->tki_count ?? 0 }}
                            </span>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="border-t border-slate-700"></div>

                    <!-- Top Destination Section -->
                    <div>
                        <div class="flex items-center gap-2 mb-2">
                            <h3 class="text-sm font-medium text-slate-300">Top Destination</h3>
                            <x-heroicon-s-arrow-trending-up
                                class="h-4 w-4 text-lime-400"></x-heroicon-s-arrow-trending-up>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-base text-slate-100 truncate pr-2">
                                {{ $topDestination?->country_name ?? 'No Data' }}
                            </span>
                            <span class="text-2xl font-semibold text-lime-400 flex-shrink-0">
                                {{ $topDestination?->tki_count ?? 0 }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chart Section -->
        <div class="lg:col-span-12">
            <div class="bg-white rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-6">Data Bulanan ({{ date('Y') }})</h2>
                <div class="flex items-center justify-center">
                    <div class="w-full h-96 md:h-[400px]">
                        <canvas id="monthlyChart" class="max-w-full max-h-full"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-12">
            <div class="bg-gradient-to-r from-emerald-500 to-lime-500 rounded-lg p-6 text-white">
                <h3 class="text-lg font-semibold mb-2">Quick Actions</h3>
                <p class="text-emerald-100 mb-4">Manage your TKI data efficiently</p>
                <div class="flex flex-wrap gap-3">
                    <button
                        class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2 text-sm font-medium hover:bg-white/30 transition-colors">
                        Add New TKI
                    </button>
                    <button
                        class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2 text-sm font-medium hover:bg-white/30 transition-colors">
                        Generate Report
                    </button>
                    <button
                        class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2 text-sm font-medium hover:bg-white/30 transition-colors">
                        Export Data
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
