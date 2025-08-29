<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-stone-500 rounded-lg sm:hidden hover:bg-stone-200 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-stone-800 dark:hover:bg-stone-200 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

{{-- /* Sidebar */ --}}
<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-60 h-full transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-2 py-6 overflow-y-visible border-r-2 border-stone-200 bg-white">
        <div class="flex items-center px-5 gap-2 pb-4">
            <span class="py-2 px-3.5 rounded-md bg-gray-950 text-white text-lg">ZY</span>
            <div class="grid">
                <span class="font-semibold">Super Admin</span>
                <p class="text-xs text-stone-600">admin@gmail.com</p>
            </div>
            <x-heroicon-o-chevron-up-down class="h-5 w-5 text-stone-600"></x-heroicon-o-chevron-up-down>
        </div>
        {{-- Nav link --}}
        <div class="flex flex-col h-full justify-between pt-4 pb-12 px-4 border-t">
            <div class="space-y-1.5 font-medium">
                <x-nav-link :active="request()->routeIs('admin.alldata')" href="{{ route('admin.alldata') }}">
                    <div
                        class="flex items-center p-1 text-gray-900 rounded-lg dark:text-stone-800 hover:bg-gray-100 dark:hover:bg-gray-200 group">
                        <x-heroicon-o-home class="h-6 w-6 text-stone-700"></x-heroicon-o-home>
                        <span class="ms-3 text-stone-700">Dashboard</span>
                    </div>
                </x-nav-link>
                <x-nav-link :active="request()->routeIs('admin.alldata')" href="{{ route('admin.alldata') }}">
                    <div
                        class="flex items-center p-1 text-gray-900 rounded-lg dark:text-stone-800 hover:bg-gray-100 dark:hover:bg-gray-200 group">
                        <x-heroicon-o-table-cells class="h-6 w-6 text-stone-700"></x-heroicon-o-table-cells>
                        <span class="ms-3 text-stone-700">Data</span>
                    </div>
                </x-nav-link>
                <x-nav-link :active="request()->routeIs('admin.alldata')" href="{{ route('admin.alldata') }}">
                    <div
                        class="flex items-center p-1 text-gray-900 rounded-lg dark:text-stone-800 hover:bg-gray-100 dark:hover:bg-gray-200 group">
                        <x-heroicon-o-building-office class="h-6 w-6 text-stone-700"></x-heroicon-o-building-office>
                        <span class="ms-3 text-stone-700">Company / PT</span>
                    </div>
                </x-nav-link>
                <x-nav-link :active="request()->routeIs('admin.alldata')" href="{{ route('admin.alldata') }}">
                    <div
                        class="flex items-center p-1 text-gray-900 rounded-lg dark:text-stone-800 hover:bg-gray-100 dark:hover:bg-gray-200 group">
                        <x-heroicon-o-globe-europe-africa
                            class="h-6 w-6 text-stone-700"></x-heroicon-o-globe-europe-africa>

                        <span class="ms-3 text-stone-700">Destination</span>
                    </div>
                </x-nav-link>
                <x-nav-link :active="request()->routeIs('admin.alldata')" href="{{ route('admin.alldata') }}">
                    <div
                        class="flex items-center p-1 text-gray-900 rounded-lg dark:text-stone-800 hover:bg-gray-100 dark:hover:bg-gray-200 group">
                        <x-heroicon-o-chart-bar-square class="h-6 w-6 text-stone-700"></x-heroicon-o-chart-bar-square>

                        <span class="ms-3 text-stone-700">Analityc</span>
                    </div>
                </x-nav-link>
            </div>
            {{-- Button Logout --}}
            <div class="grid gap-1 p-1 rounded-md bg-stone-100">
                <h1 class="font-medium text-stone-600">Copyright@2025</h1>
                <p class="text-xs text-stone-600">Dinas tenaga kerja dan trsnmigrasi.
                    Mall Pelayanan Publik <span class="font-semibold text-stone-600">MPP</span>
                </p>
                <form action="{{ route('logout') }}" method="POST" class="flex items-stretch justify-center ">
                    @csrf
                    <button type="submit"
                        class="flex py-1 items-center justify-center gap-2 bg-stone-900 hover:bg-stone-800 active:bg-stone-950 text-stone-50 w-full rounded-md"
                        title="logout">
                        <x-heroicon-o-arrow-left-start-on-rectangle
                            class="h-6 w-6 text-stone-300"></x-heroicon-o-arrow-left-start-on-rectangle>
                        <span class="font-medium">Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</aside>

{{-- Content --}}
<div class="sm:ml-60 bg-stone-50 scroll-smooth">
    <div class="dark:border-stone-200 bg-white rounded-xl px-2 relative">
        {{-- Navbar fixed --}}
        <div
            class="hidden py-3 w-[74rem] border-b-2 sm:flex fixed left-4 right-4 sm:left-60 sm:right-4 z-50 justify-center bg-white border-stone-200">
            <div class=" flex items-center justify-between w-full max-w-full text-stone-800 rounded-md px-2">
                <span class="font-semibold text-xl">Dashboard</span>
                <span class="flex items-center justify-center gap-2">
                    <span class="text-md font-medium text-stone-900">{{ $time }}</span>
                    <x-heroicon-s-calendar class="h-5 w-5"></x-heroicon-s-calendar>
                </span>
            </div>
        </div>
        {{-- Row 1 --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2 mb-2 pt-4 sm:pt-16">
            {{-- Total user --}}
            <div class="block items-center h-28 rounded-md bg-white dark:bg-white border-2">
                <div class="flex items-center justify-between border-b py-2 px-2">
                    <div class="flex items-center gap-2">
                        <x-heroicon-s-user
                            class="h-6 w-6 p-0.5 rounded-full border border-blue-700 text-white bg-blue-600"
                            title="user"></x-heroicon-s-user>
                        <span class="font-semibold text-stone-600 text-sm">Total User</span>
                    </div>
                    <div class="bg-teal-50 rounded-md">
                        <span class="text-md px-4 font-semibold items-center justify-center text-teal-600">+199</span>
                    </div>
                </div>
                <div class="flex py-4 flex-col items-center justify-center">
                    <h1 class="text-3xl font-semibold selection:bg-blue-500">{{ number_format($totalTki, 0, ',', '.') }}
                    </h1>
                </div>
            </div>
            {{-- total company --}}
            <div class="block items-center h-28 rounded-md bg-white dark:bg-white border-2">
                <div class="flex items-center justify-between border-b py-2 px-2">
                    <div class="flex items-center gap-2">
                        <x-heroicon-s-building-office-2
                            class="h-6 w-6 p-0.5 rounded-full border border-amber-700 text-white bg-amber-500"
                            title="company"></x-heroicon-s-building-office-2>
                        <span class="font-semibold text-stone-600 text-sm">Company</span>
                    </div>
                    <div class="bg-teal-50 rounded-md">
                        <span class="text-md px-4 font-semibold items-center justify-center text-teal-600">+199</span>
                    </div>
                </div>
                <div class="flex py-4 flex-col items-center justify-center">
                    <h1 class="text-3xl font-semibold selection:bg-amber-500">{{ $topCompany?->tki_count ?? 'No Data' }}
                    </h1>
                </div>
            </div>
            {{-- total destination --}}
            <div class="block items-center h-28 rounded-md bg-white dark:bg-white border-2">
                <div class="flex items-center justify-between border-b py-2 px-2">
                    <div class="flex items-center gap-2">
                        <x-heroicon-s-map-pin
                            class="h-6 w-6 p-0.5 rounded-full border border-teal-700 text-white bg-teal-600"
                            title="destination"></x-heroicon-s-map-pin>
                        <span class="font-semibold text-stone-600 text-sm">Destination</span>
                    </div>
                    <div class="bg-teal-50 rounded-md">
                        <span class="text-md px-4 font-semibold items-center justify-center text-teal-600">+5</span>
                    </div>
                </div>
                <div class="flex py-4 flex-col items-center justify-center">
                    <h1 class="text-3xl font-semibold selection:bg-teal-500">{{ $topDestination?->count ?? 'No Data' }}
                    </h1>
                </div>
            </div>
            {{-- total NIK --}}
            <div class="block items-center h-28 rounded-md bg-white dark:bg-white border-2">
                <div class="flex items-center justify-between border-b py-2 px-2">
                    <div class="flex items-center gap-2">
                        <x-heroicon-s-credit-card
                            class="h-6 w-6 p-0.5 rounded-full border border-sky-700 text-white bg-sky-600"
                            title="user"></x-heroicon-s-credit-card>
                        <span class="font-semibold text-stone-600 text-sm">NIK</span>
                    </div>
                    <div class="bg-teal-50 rounded-md">
                        <span class="text-md px-4 font-semibold items-center justify-center text-teal-600">+199</span>
                    </div>
                </div>
                <div class="flex py-4 flex-col items-center justify-center">
                    <h1 class="text-3xl font-semibold selection:bg-sky-500">1.210.100</h1>
                </div>
            </div>
        </div>
        {{-- Col 2 --}}
        <div class="grid grid-cols-2 gap-2 mb-2">
            <div class="block items-center h-32 rounded-md bg-white dark:bg-white border-2">
                <div class="flex items-center py-2 px-2 justify-between border-b rounded-tr-md rounded-tl-md">
                    <span class="text-stone-600 font-semibold">Gender</span>
                </div>
                <div class="grid grid-cols-2 justify-between items-center">
                    <div class="py-2 border-l h-full">
                        <h1 class="text-center text-3xl font-semibold selection:bg-sky-500">
                            {{ number_format($mele, 0, ',', '.') }}</h1>
                        <span class="flex justify-center py-2 font-medium text-xs text-stone-600">Laki-laki</span>
                    </div>
                    <div class="py-2 border-l h-full">
                        <h1 class="text-center text-3xl font-semibold selection:bg-sky-500">
                            {{ number_format($famele, 0, ',', '.') }}</h1>
                        <span class="flex justify-center py-2 font-medium text-xs text-stone-600">Perempuan</span>
                    </div>
                </div>
            </div>
            {{-- col 2 --}}
            <div class="block items-center h-32 rounded-md bg-white dark:bg-white border-2">
                <div class="flex items-center py-2 px-2 justify-between border-b">
                    <span class="text-stone-600 font-semibold">Today</span>
                    <span class="flex items-center gap-2 font-medium text-stone-600"
                        title="{{ $time }}">{{ $time }} <x-heroicon-s-calendar
                            class="h-5 w-5"></x-heroicon-s-calendar></span>
                </div>
                <div class="grid grid-cols-3 justify-between items-center">
                    <div class="py-2 h-full">
                        <h1 class="text-center text-3xl font-semibold selection:bg-sky-500">
                            {{ number_format($today, 0, ',', '.') ?? '-' }}</h1>
                        <span class="flex justify-center py-2 font-medium text-xs text-stone-600">All</span>
                    </div>
                    <div class="py-2 border-l h-full">
                        <h1 class="text-center text-3xl font-semibold selection:bg-sky-500">10</h1>
                        <span class="flex justify-center py-2 font-medium text-xs text-stone-600">Laki-laki</span>
                    </div>
                    <div class="py-2 border-l h-full">
                        <h1 class="text-center text-3xl font-semibold selection:bg-sky-500">1</h1>
                        <span class="flex justify-center py-2 font-medium text-xs text-stone-600">Perempuan</span>
                    </div>
                </div>
            </div>
        </div>
        {{-- todo Chart --}}
        <div class="grid items-center h-75 mb-2 rounded-lg bg-white dark:bg-white border-2">
            <div class="flex items-center gap-1 py-2 px-2 border-b bg-stone-800 rounded-tl-md rounded-tr-md">
                <x-heroicon-o-chart-bar class="h-5 w-5 text-stone-200"></x-heroicon-o-chart-bar>
                <span class="font-semibold text-stone-200">Chart</span>
            </div>
            <div class="p-2 h-64 border bg-gray-200">
                Content
            </div>
        </div>
        {{-- todo Col 2 Data Company --}}
        <div class="grid grid-cols-2 gap-4 mb-2">
            <div class="block items-center h-32 rounded-md bg-white dark:bg-white border-2">
                <div class="flex items-center py-2 px-2 justify-between border-b">
                    <span class="text-stone-600 font-semibold">Today</span>
                    <span class="flex items-center gap-2 font-medium text-stone-600"
                        title="{{ $time }}">{{ $time }} <x-heroicon-s-calendar
                            class="h-5 w-5"></x-heroicon-s-calendar></span>
                </div>
                <div class="grid grid-cols-3 justify-between items-center">
                    <div class="py-2 h-full">
                        <h1 class="text-center text-3xl font-semibold selection:bg-sky-500">
                            {{ number_format($today, 0, ',', '.') ?? '-' }}</h1>
                        <span class="flex justify-center py-2 font-medium text-xs text-stone-600">All</span>
                    </div>
                    <div class="py-2 border-l h-full">
                        <h1 class="text-center text-3xl font-semibold selection:bg-sky-500">10</h1>
                        <span class="flex justify-center py-2 font-medium text-xs text-stone-600">Laki-laki</span>
                    </div>
                    <div class="py-2 border-l h-full">
                        <h1 class="text-center text-3xl font-semibold selection:bg-sky-500">1</h1>
                        <span class="flex justify-center py-2 font-medium text-xs text-stone-600">Perempuan</span>
                    </div>
                </div>
            </div>
            {{-- todo data lainnya --}}
            <div class="block items-center h-32 rounded-md bg-white dark:bg-white border-2">
                <div class="flex items-center py-2 px-2 justify-between border-b">
                    <span class="text-stone-600 font-semibold">Today</span>
                    <span class="flex items-center gap-2 font-medium text-stone-600"
                        title="{{ $time }}">{{ $time }} <x-heroicon-s-calendar
                            class="h-5 w-5"></x-heroicon-s-calendar></span>
                </div>
                <div class="grid grid-cols-3 justify-between items-center">
                    <div class="py-2 h-full">
                        <h1 class="text-center text-3xl font-semibold selection:bg-sky-500">
                            {{ number_format($today, 0, ',', '.') ?? '-' }}</h1>
                        <span class="flex justify-center py-2 font-medium text-xs text-stone-600">All</span>
                    </div>
                    <div class="py-2 border-l h-full">
                        <h1 class="text-center text-3xl font-semibold selection:bg-sky-500">10</h1>
                        <span class="flex justify-center py-2 font-medium text-xs text-stone-600">Laki-laki</span>
                    </div>
                    <div class="py-2 border-l h-full">
                        <h1 class="text-center text-3xl font-semibold selection:bg-sky-500">1</h1>
                        <span class="flex justify-center py-2 font-medium text-xs text-stone-600">Perempuan</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center h-48 mb-4 rounded-sm bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 1v16M1 9h16" />
                </svg>
            </p>
        </div>
    </div>
</div>
